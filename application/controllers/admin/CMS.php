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
    
            $MainTitle = array("1"=>"Why Us","2"=>"About Us","3"=>"Privacy Policy","4"=>"Terms & Condition");
            $url = array("1"=>"whyus/".$id,"2"=>"about/".$id,"3"=>"privacy-policy/".$id,"4"=>"terms/".$id);
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
                    'meta_title'=>$this->input->post('meta_title'),
                    'meta_descr'=>$this->input->post('meta_descr'),
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
                $url = array("1"=>"whyus/".$editid,"2"=>"about/".$editid,"3"=>"privacy-policy/".$editid,"4"=>"terms/".$editid);
                redirect(ADMIN_LINK.$url[$editid]);
            }
        }
    }

   
}
?>