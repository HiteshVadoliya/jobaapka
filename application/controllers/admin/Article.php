<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
require APPPATH . '/libraries/BaseController.php';
class Article extends BaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->isLoggedIn();
        $this->table = "article";   
        $this->id = "id";  
        $this->MainTitle = "Article";
        $this->folder = "article/"; 
        $this->Controller = "Article"; 
        $this->url = "article";
        $this->img_path = IMG_BUSINESS; 

        $this->img_height = 500; 
        $this->img_width = 350;
        $this->isthumb = true;
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
        // $param['search_column'] = array("title");
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
                    

                    $img_name = $post['img_src'];
                    if($img_name!='' && file_exists($this->img_path.$img_name)) {
                        $pre_img = APP_URL.$this->img_path.$img_name;
                    } else {
                        $pre_img = DEFAULT_IMG;
                    }
                    
                    $nestedData['img_src'] = '<img src='.$pre_img.' title='.$post['title'].' alt='.$post['title'].' width="150" >';

                    
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
            
            $type = $this->input->post('type');
            $post = $this->input->post();
            if($type == "add"){
                $this->form_validation->set_rules('img_path','Image','trim|required');
            }
            $this->form_validation->set_rules('date','Date','trim|required');
            if($this->form_validation->run() == FALSE)
            {
                $this->session->set_flashdata('error', validation_errors());
                if($type == "edit"){
                    redirect(ADMIN_LINK.$this->url.'/edit/'.$post['editid']);
                } else {
                    redirect(ADMIN_LINK.$this->url.'/add/');
                }
            }
            else
            {

                $date = date("Y-m-d",strtotime($this->input->post('date')));
                $DataInfo = array(
                    'date'=>$date,
                    'title'=>$this->input->post('title'),
                    'descr'=>$this->input->post('descr'),
                );

                

                if($type == "add"){

                    /* Profile Image */
                    if($post['img_path'] != '') {
                        $path = $this->img_path;
                        if(!is_dir($path)) {
                            mkdir($path);
                        }    
                        $Img = array();
                        $ImgFile = $post['img_path'];                        
                        $src = MyPath.$ImgFile;
                        $dest = $this->img_path.$ImgFile;
                        copy($src, $dest);
                        unlink($src);                        
                        $DataInfo['img_src'] = $post['img_path']; 
                        $this->HWT->resize_image($this->img_path,$post['img_path'],$this->img_height,$this->img_width,$this->isthumb,'Thumb/');                       
                    }

                    $DataInfo['created_at'] = date('Y-m-d H:i:s');
                    $DataInfo['status'] = '1';
                    $result = $this->HWT->insert($this->table,$DataInfo);


                    $mail_data = array();
                    $sitesetting = $this->SiteSetting_model->getSiteSetting();
                    $mail_data['site_logo'] = $sitesetting[0]->site_logo;
                    $mail_data['site_name'] = $sitesetting[0]->site_name;
                    $mail_data['address'] = $sitesetting[0]->address;
                    $from_email = FROM_EMAIL;
                    
                    $subject = 'New Article';

                    $inner_html = '<table border="1" class="email-footer" align="center" width="570" cellpadding="0" cellspacing="0" style="box-sizing: border-box; font-family: Arial, sans-serif; margin: 0 auto; padding: 0; text-align: center; width: 570px;">';
                    $inner_html .= '<tr>
                        <td class="content-cell" align="left" style="box-sizing: border-box; font-family: Arial, sans-serif; padding: 5px; word-break: break-word;">
                          Sr.
                        </td>
                        <td class="content-cell" align="left" style="box-sizing: border-box; font-family: Arial, sans-serif; padding: 5px; word-break: break-word;">
                          Title
                        </td>
                         <td class="content-cell" align="left" style="box-sizing: border-box; font-family: Arial, sans-serif; padding: 5px; word-break: break-word;">
                          Link
                        </td>
                      </tr>
                      <tr>
                        <td class="content-cell" align="left" style="box-sizing: border-box; font-family: Arial, sans-serif; padding: 5px; word-break: break-word;">
                          1.
                        </td>
                        <td class="content-cell" align="left" style="box-sizing: border-box; font-family: Arial, sans-serif; padding: 5px; word-break: break-word;">
                          '.nl2br($this->input->post('title')).'
                        </td>
                         <td class="content-cell" align="left" style="box-sizing: border-box; font-family: Arial, sans-serif; padding: 5px; word-break: break-word;">
                          <a href="'.base_url("business_details/".$result).'">Click Here</a>
                        </td>
                      </tr>';
                    $inner_html .= '</table><br/>';

                    $mail_data['inner_html'] = $inner_html;

                    
                    $final_result = $this->HWT->get_result("newsletter","*",array("isDelete"=>0,"status"=>1));


                    
                    if(!empty($final_result)) {
                        foreach ($final_result as $fin_key => $mail_id) {
                            $mail_list =  $mail_id['title'];
                            
                            if(!empty($mail_id['title'])) {
                                $mail_data['user_name'] = "";
                                $email = $mail_id['title'];
                                $message = $this->load->view(USER.'mail_template/article_alert', $mail_data, TRUE);
                                $mail_data_send['to_email'] = FROM_EMAIL;
                                $mail_data_send['subject'] = $subject;
                                $mail_data_send['body'] = $message;
                                $mail_result = $this->HWT->hwt_send_mail($mail_data_send);
                            }
                        }
                    }
                }
                if($type == "edit"){

                 

                    /* Image */
                    if($post['img_path'] != '') {
                        $path = $this->img_path;
                        if(!is_dir($path)) {
                            mkdir($path);
                        }                        
                        $Img = array();
                        $old_Img = $post['old_Img'];
                        $ImgFile = $post['img_path'];
                        
                        $src = MyPath.$ImgFile;
                        $dest = $this->img_path.$ImgFile;
                        copy($src, $dest);
                        unlink($src);
                        
                        if($old_Img != '' && file_exists($this->img_path.$old_Img)) {                    
                            unlink($this->img_path.$old_Img);
                        }
                        $DataInfo['img_src'] = $post['img_path'];

                        $this->HWT->resize_image($this->img_path,$post['img_path'],$this->img_height,$this->img_width,$this->isthumb,'Thumb/');
                    }

                    

                    $DataInfo['updated_at'] = date('Y-m-d H:i:s');
                    $editid = $this->input->post('editid'); 
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