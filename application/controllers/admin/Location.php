<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
require APPPATH . '/libraries/BaseController.php';
class Location extends BaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->isLoggedIn();
        $this->table = "location";   
        $this->id = "id";  
        $this->MainTitle = "Location";
        $this->folder = "location/"; 
        $this->Controller = "Location"; 
        $this->url = "location";

        $this->img_path = IMG_INDUSTRY;
        $this->img_height = 160; 
        $this->img_width = 200;
        $this->isthumb = true;

        $config = array(
            'table' => $this->table,
            'id' => $this->id,
            'field' => 'slug',
            'title' => 'title',
            'replacement' => 'dash' // Either dash or underscore
        );
        $this->load->library('slug', $config);
    }

    function index()
    {
        if($this->isAdmin() == TRUE) { $this->loadThis(); } else
        {     
            $data['MainTitle'] = $this->MainTitle;
            $data['Controller'] = $this->Controller;
            $data['url'] = $this->url;  
            $this->global['pageTitle'] = ' : Manage '.$data['MainTitle'];
            $this->loadViews(ADMIN.$this->folder."Manage", $this->global, $data, NULL);
        }
    }

    public function showForm($id = '') {
        if($this->isAdmin() == TRUE) { $this->loadThis(); } else
        {   

            $data['type'] = "add";
            $data['main_category'] = $this->HWT->get_result("category","*",array("isDelete"=>0,"status"=>1));
            if($id!='') {
                $data['type'] = "edit";
                $data['edit'] = $this->HWT->get_one_row($this->table,"*",array($this->id=>$id,"isDelete"=>0));
            }
            $data['Controller'] = $this->Controller;
            $data['MainTitle'] = $this->MainTitle;
            $data['tbl_id'] = $this->id;
            $data['url'] = $this->url; 
            $data['img_path'] = $this->img_path; 
            $this->global['pageTitle'] = ' : '.ucfirst($data['type']).' '.$data['MainTitle'];
            $this->loadViews(ADMIN.$this->folder."Form", $this->global, $data, NULL);
        }   
    }
    
    public function ajax_list()
    {
        $columns = array(0=>'title');
        $limit = $this->input->post('length');
        $start = $this->input->post('start');
        $param['limit'] = array($start,$limit);
        $param['search_column'] = array("title");
        $order = $columns[$this->input->post('order')[0]['column']];
        $dir = $this->input->post('order')[0]['dir'];
      
        $wh = array("isDelete"=>0);
        $totalData = $this->HWT->get_num_rows($this->table,$wh);
        
            $totalFiltered = $totalData; 
            if(empty($this->input->post('search')['value']))
            {            
                $posts = $this->HWT->get_hwt($this->table,"*",$wh,$param);
            }
            else {
                $search = $this->input->post('search')['value']; 
                $param['search'] = $search;
                $posts =  $this->HWT->get_hwt($this->table,"*",$wh,$param);
                
                $param['limit'] = "";
                $totalFiltered = count($this->HWT->get_hwt($this->table,"*",$wh,$param));
            }

            $data = array();
            if(!empty($posts))
            {
                foreach ($posts as $post)
                {
                    $statuslbl = $post['status'] == '1' ? 'Active' : 'Deactive';
                    $statusColor = $post['status'] == '1' ? 'success' : 'danger';
                    $nestedData['title'] = $post['title'];
                    
                    
                    $nestedData['action'] = '<button data-id='.$post[$this->id].' class="btn btn-sm btn-danger rowDelete"><i class="fa fa-trash"></i></button>
                    <a href='.ADMIN_LINK.$this->url.'/edit/'.$post[$this->id].' data-id='.$post[$this->id].' class="btn btn-sm btn-info " ><i class="fa fa-pencil"></i></a>
                    <button data-id='.$post[$this->id].' data-status='.$post['status'].' class="btn btn-sm btn-'.$statusColor.' rowStatus" >'.$statuslbl.'</button>';
                    
                    $data[] = $nestedData;

                }
            }
              
            $json_data = array(
                        "draw"            => intval($this->input->post('draw')),  
                        "recordsTotal"    => intval($totalData),  
                        "recordsFiltered" => intval($totalFiltered), 
                        "data"            => $data   
                        );
                
            echo json_encode($json_data); 
    }




    

    
    
    /**
     * This function is used to add new user to the system
     */
    function save()
    {
        if($this->isAdmin() == TRUE) { $this->loadThis(); } else
        {
            $this->load->library('form_validation');
            
            $this->form_validation->set_rules('title','Title Name','trim|required');
            
            if($this->form_validation->run() == FALSE)
            {
                $this->showForm();
            }
            else
            {

                $type = $this->input->post('type');
                $post = $this->input->post();

                $is_featured = (isset($post['is_featured'])) ? $post['is_featured'] : '0';

                $DataInfo = array(
                    'title'=>$this->input->post('title'),
                );

                

                if($type == "add"){

                    $DataInfo['slug'] = $this->slug->create_uri($DataInfo);
                    $DataInfo['created_at'] = date('Y-m-d H:i:s');
                    $DataInfo['status'] = '1';
                    $result = $this->HWT->insert($this->table,$DataInfo);
                }
                if($type == "edit"){

                    $editid = $this->input->post('editid'); 
                    $DataInfo['slug'] = $this->slug->create_uri($DataInfo,$editid);
                    $DataInfo['updated_at'] = date('Y-m-d H:i:s');
                    $result = $this->HWT->update($this->table,$DataInfo,array($this->id=>$editid));
                }
              
                if($result > 0)
                {
                    $this->session->set_flashdata('success', 'Details Add successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Something Went Wrong..!');
                }
                redirect(ADMIN_LINK.$this->url);
            }
        }
    }

    
    /**
     * This function is used to delete the user using userId
     * @return boolean $result : TRUE / FALSE
     */
    function delete()
    {
        if($this->isAdmin() == TRUE) { $this->loadThis(); } else
        {
            
            $data['tbl'] = $this->table;
            $data['id'] = $this->id;
            $data['did'] = $this->input->post('id');
            $result = $this->HWT->hwt_delete($data);

            if ($result > 0) { 
                echo(json_encode(array('status'=>TRUE))); 
            }
            else { 
                echo(json_encode(array('status'=>FALSE))); 
            }
        }
    }

    function changeStatus()
    {
        if($this->isAdmin() == TRUE) { $this->loadThis(); } else
        {
            $data['tbl'] = $this->table;
            $data['id'] = $this->id;
            $data['editid'] = $this->input->post('id');
            $data['status'] = $this->input->post('status');

            $result =  $this->HWT->changeStatus($data);
            
            if ($result > 0) { 
                echo(json_encode(array('status'=>TRUE))); 
            }
            else { 
                echo(json_encode(array('status'=>FALSE))); 
            }
        }
    }

    /* Upload Files */
    public function upload_files()
    {
        /*ini_set('upload_max_filesize', '10M');
        ini_set('post_max_size', '10M');*/

        $path = MyPath;
        if(!is_dir($path)) {
            mkdir($path);
        }
        try {
            if (
                !isset($_FILES['file']['error']) ||
                is_array($_FILES['file']['error'])
            ) {
                throw new RuntimeException('Invalid parameters.');
            }

            switch ($_FILES['file']['error']) {
                case UPLOAD_ERR_OK:
                    break;
                case UPLOAD_ERR_NO_FILE:
                    throw new RuntimeException('No file sent.');
                case UPLOAD_ERR_INI_SIZE:
                    throw new RuntimeException('Other Error.');
                case UPLOAD_ERR_FORM_SIZE:
                    throw new RuntimeException('Exceeded filesize limit.');
                default:
                    throw new RuntimeException('Unknown errors.');
            }
            $filename = uniqid().'_'.str_replace(" ", "_hwt_", $_FILES['file']['name']);
            // $filepath = sprintf(MyPath.'%s_%s', uniqid(), $_FILES['file']['name']);
            $filepath = MyPath.$filename;

            if (!move_uploaded_file($_FILES['file']['tmp_name'],$filepath)) {
                throw new RuntimeException('Failed to move uploaded file.');
            }

            // All good, send the response
            $data = array('status' => 'ok','path' => $filename);
            //echo json_encode($data);

        } catch (RuntimeException $e) {
            // Something went wrong, send the err message as JSON
            http_response_code(400);

            echo json_encode([
                'status' => 'error',
                'message' => $e->getMessage()
            ]);
        }
        echo json_encode($data);
    }
   
}
?>