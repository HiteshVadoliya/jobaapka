<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
require APPPATH . '/libraries/BaseController.php';
class Employer extends BaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->isLoggedIn();
        $this->table = "hwt_user";   
        $this->id = "id";  
        $this->MainTitle = "Employer";
        $this->folder = "employer/"; 
        $this->Controller = "Employer"; 
        $this->url = "employer";
        $this->img_path = IMG_SLIDER; 
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
        if(isset($_REQUEST['order_by']) && $_REQUEST['order_by']!='' && isset($_REQUEST['order_by_with']) && $_REQUEST['order_by_with']!='') {
            $order_by = $_REQUEST['order_by'];
            $order_by_with = $_REQUEST['order_by_with'];
            $param['order_by'] = $order_by;
            $param['order_by_with'] = $order_by_with;
        }

        $post =$this->input->post();

        $columns = array(0=>'fname',1=>'email');
        $limit = $this->input->post('length');
        $start = $this->input->post('start');
        $param['limit'] = array($start,$limit);
        $param['search_column'] = array("fname","email");
        $draw = $post['draw'];
        $order = $columns[$this->input->post('order')[0]['column']];
        $dir = $this->input->post('order')[0]['dir'];
        if($draw==1) {
            $order = 'id';
            $dir = 'desc';
        }
        $param['shortby'] = $order;
        $param['shortorder'] = $dir;
      
        $wh = array("isDelete"=>0,"type"=>"employer");

        if(isset($_REQUEST['active_deactive']) && $_REQUEST['active_deactive']!='') {
            if($_REQUEST['active_deactive']==0) {
                $wh['plan_status'] = $_REQUEST['active_deactive'];
            } else if($_REQUEST['active_deactive']==1) {
                $wh['plan_status'] = $_REQUEST['active_deactive'];
            }
        }

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
                    $nestedData['title'] = $post['fname']." ".$post['lname'];
                    $nestedData['from_email'] = $post['email'];      

                    $planlbl = $post['plan_status'] == '1' ? 'Paid' : 'Unpaid';
                    $planColor = $post['plan_status'] == '1' ? 'btn-primary' : 'btn-danger';             
                    
                    /*<button data-id='.$post[$this->id].' class="btn btn-sm btn-danger rowDelete"><i class="fa fa-trash"></i></button>*/
                    $nestedData['action'] = '<a href='.ADMIN_LINK.$this->url.'/view/'.$post[$this->id].' title="view" class="btn btn-sm btn-info " ><i class="fa fa-eye"></i></a>&nbsp;<a href="javascript:;" title="Plan Status" class="btn btn-sm '.$planColor.' " ><i class="fa fa-money" aria-hidden="true"></i>&nbsp;'.$planlbl.'</a>';
                    
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
            
            $this->form_validation->set_rules('title','Country Name','trim|required');
            $this->form_validation->set_rules('url','URL Name','trim|required');
            
            if($this->form_validation->run() == FALSE)
            {
                $this->showForm();
            }
            else
            {

                $type = $this->input->post('type');
                $DataInfo = array(
                    'title'=>$this->input->post('title'),
                    'url'=>$this->input->post('url'),
                );

                if( !empty($_FILES["img_src"]["name"]) ){

                    $config['upload_path']          = $this->img_path;
                    $config['allowed_types']        = 'jpg|jpeg|png|gif';
                    
                    // $config['max_size']             = 1024;
                    $this->load->library('upload', $config);
                    if($this->upload->do_upload('img_src'))
                    {
                        $upload_data = $this->upload->data();
                        $filename = $upload_data['file_name']; 
                        $DataInfo['img_src'] = $filename;                         
                    }else{
                        $this->session->set_flashdata('error', 'Media Source not uploaded..!');
                        redirect(ADMIN_LINK.$this->url);                        
                    }
                }

                if($type == "add"){                    
                    $DataInfo['created_at'] = date('Y-m-d H:i:s');
                    $DataInfo['status'] = '1';
                    $result = $this->HWT->insert($this->table,$DataInfo);
                }
                if($type == "edit"){
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

    public function view($id) {
        
        if($this->isAdmin() == TRUE) { $this->loadThis(); } else
        {   
            $data['view'] = $this->HWT->get_one_row($this->table,"*",array($this->id=>$id,"isDelete"=>0));

            $data['MainTitle'] = $this->MainTitle;
            $data['tbl_id'] = $this->id;
            $data['url'] = $this->url; 

            $param['shortby'] = "job_id";
            $param['shortorder'] = "desc";
            $data['view_job'] = $this->HWT->get_hwt('job',"*",array('employer_id'=>$id,"isDelete"=>0),$param);

            $data['collection'] = $this->collection_data();
            
            $this->global['pageTitle'] = ' : View '.$data['MainTitle'];
            $this->loadViews(ADMIN.$this->folder."View", $this->global, $data, NULL);
        }   
    }

    public function collection_data() {
        $collection = array();
        /*Job Function */
        $job_function = $this->HWT->get_result("job_function","*",array("isDelete"=>0,"status"=>1));
        $collection['job_function'] = $job_function;

        /* Location */
        $location = $this->HWT->get_result("location","*",array("isDelete"=>0,"status"=>1));
        $collection['location'] = $location;

        /* Education */
        $education = $this->HWT->get_result("education","*",array("isDelete"=>0,"status"=>1));
        $collection['education'] = $education;

        /* Industry */
        $industry = $this->HWT->get_result("industry","*",array("isDelete"=>0,"status"=>1));
        $collection['industry'] = $industry;

        /* Counrty */
        $countries = $this->HWT->get_result("countries","*",array("1"=>"1"));
        $collection['countries'] = $countries;

        /* Designation Level */
        $designation_level = $this->HWT->get_result("designation_level","*",array("isDelete"=>0,"status"=>1));
        $collection['designation_level'] = $designation_level;

        /* job_type */
        $job_type = $this->HWT->get_result("job_type","*",array("isDelete"=>0,"status"=>1));
        $collection['job_type'] = $job_type;

        /* job_type */
        $salary = $this->HWT->get_result("salary","*",array("isDelete"=>0,"status"=>1));
        $collection['salary'] = $salary;

        /* category */
        $category = $this->HWT->get_result("category","*",array("isDelete"=>0,"status"=>1));
        $collection['category'] = $category;

        /* Experience in Year */
        $exe = 21;
        $exe_year = array();
        for ($exp_i=0; $exp_i < $exe; $exp_i++) { 
            $exe_year[] = $exp_i;
        }
        $collection['exp_year'] = $exe_year;

        /* Experience in Month */
        $exe_m = 12;
        $exe_month = array();
        for ($exp_m=0; $exp_m < $exe_m; $exp_m++) { 
            $exe_month[] = $exp_m;
        }
        $collection['exp_month'] = $exe_month;

        

        return $collection;
    }
   
}
?>