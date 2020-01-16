<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
require APPPATH . '/libraries/BaseController.php';
class Plan extends BaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->isLoggedIn();
    }

    /* About */
    public function index($id="") {
        {   
            $data['type'] = "";
            $data['edit'] = $this->HWT->get_one_row("plan","*",array("id"=>"1"));
            $data['MainTitle'] = "Plan";
            $data['tbl_id'] = "id";
            $data['url'] = "plan"; 
            $this->global['pageTitle'] = ' : '.$data['MainTitle'];
            $this->loadViews(ADMIN."plan/plan", $this->global, $data, NULL);
        }   
    }

    public function save()
    {
        if($this->isAdmin() == TRUE) { $this->loadThis(); } else
        {
            $this->load->library('form_validation');
            $this->form_validation->set_rules('title','Title','trim|required');
            // $this->form_validation->set_rules('descr','Description','trim|required');
            
            if($this->form_validation->run() == FALSE)
            {
                $this->showForm();
            }
            else
            {
                $type = $this->input->post('type');
                $DataInfo = array(
                    'title'=>$this->input->post('title'),
                    // 'descr'=>$this->input->post('descr'),
                    'period'=>$this->input->post('period'),
                    // 'meta_descr'=>$this->input->post('meta_descr'),
                );

                if($type == "add"){                    
                    $result = $this->HWT->insert("plan",$DataInfo);
                }
                if($type == "edit"){
                    $editid = $this->input->post('editid'); 
                    $result = $this->HWT->update("plan",$DataInfo,array("id"=>$editid));
                }
              
                if($result > 0)
                {
                    $this->session->set_flashdata('success', 'Details Add successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Something Went Wrong..!');
                }
                // $url = array("1"=>"whyus/".$editid,"2"=>"about/".$editid,"3"=>"privacy-policy/".$editid,"4"=>"terms/".$editid);
                redirect(ADMIN_LINK.'plan/');
            }
        }
    }

   
}
?>