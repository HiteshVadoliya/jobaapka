<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
require APPPATH . '/libraries/BaseController.php';
class Content extends BaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->isLoggedIn();
    }

    /* About */
    public function content($id) {
        {   
            $data['type'] = "";
            $data['edit'] = $this->HWT->get_one_row("content","*",array("id"=>$id));
    
            $MainTitle = array("1"=>"Home Content");
            $url = array("1"=>"home_content/".$id);
            $data['MainTitle'] = $MainTitle[$id];
            $data['tbl_id'] = "id";
            $data['url'] = $url[$id]; 
            $this->global['pageTitle'] = ' : '.$data['MainTitle'];
            $this->loadViews(ADMIN."content/content", $this->global, $data, NULL);
        }   
    }

    public function save_content()
    {
        if($this->isAdmin() == TRUE) { $this->loadThis(); } else
        {
            $this->load->library('form_validation');
            $this->form_validation->set_rules('title','Title','trim|required');
            $this->form_validation->set_rules('descr','Description','trim|required');
            
            if($this->form_validation->run() == FALSE)
            {
                $this->showForm();
            }
            else
            {
                $type = $this->input->post('type');
                $editid = $this->input->post('editid'); 
                if($editid==1) {
                    $DataInfo = array(
                        'title'=>$this->input->post('title'),
                        'descr'=>$this->input->post('descr'),
                        'title_2'=>$this->input->post('title_2'),
                        'descr_2'=>$this->input->post('descr_2'),
                        'title_3'=>$this->input->post('title_3'),
                        'descr_3'=>$this->input->post('descr_3'),
                    );
                }

                if($type == "add"){                    
                    $result = $this->HWT->insert("content",$DataInfo);
                }
                if($type == "edit"){
                    $editid = $this->input->post('editid'); 
                    $result = $this->HWT->update("content",$DataInfo,array("id"=>$editid));
                }
              
                if($result > 0)
                {
                    $this->session->set_flashdata('success', 'Details Add successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Something Went Wrong..!');
                }
                $url = array("1"=>"home_content/".$editid);
                redirect(ADMIN_LINK.$url[$editid]);
            }
        }
    }

   
}
?>