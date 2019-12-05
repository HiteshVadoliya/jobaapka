<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
require APPPATH . '/libraries/BaseController.php';
class CMS extends BaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->isLoggedIn();
    }

    /* About */
    public function about($id) {
        {   
            $data['type'] = "";
            $data['edit'] = $this->HWT->get_one_row("about","*",array("id"=>$id));
    
            $MainTitle = array("1"=>"About","2"=>"Privacy Policy","3"=>"Terms","4"=>"Service Contain","5"=>"Home Header Contain");
            $url = array("1"=>"about/".$id,"2"=>"privacy-policy/".$id,"3"=>"terms/".$id,"4"=>"services_contain/".$id,"5"=>"home_header/".$id);
            $data['MainTitle'] = $MainTitle[$id];
            $data['tbl_id'] = "id";
            $data['url'] = $url[$id]; 
            $this->global['pageTitle'] = ' : '.$data['MainTitle'];
            $this->loadViews(ADMIN."cms/about", $this->global, $data, NULL);
        }   
    }

    public function save_about()
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
                $DataInfo = array(
                    'title'=>$this->input->post('title'),
                    'descr'=>$this->input->post('descr'),
                );

                if($type == "add"){                    
                    $result = $this->HWT->insert("about",$DataInfo);
                }
                if($type == "edit"){
                    $editid = $this->input->post('editid'); 
                    $result = $this->HWT->update("about",$DataInfo,array("id"=>$editid));
                }
              
                if($result > 0)
                {
                    $this->session->set_flashdata('success', 'Details Add successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Something Went Wrong..!');
                }
                $url = array("1"=>"about/".$editid,"2"=>"privacy-policy/".$editid,"3"=>"terms/".$editid,"4"=>"services_contain/".$editid,"5"=>"home_header/".$editid);
                redirect(ADMIN_LINK.$url[$editid]);
            }
        }
    }

   
}
?>