<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/libraries/FrontController.php';
class Employer_Process extends FrontController {
    public function profile() {
        $post = $this->input->post();
        
        $config['upload_path'] = IMG_COMPANY_LOGO; 
        $path = IMG_COMPANY_LOGO;
        if(!is_dir($path)) {
            mkdir($path);
        }
        $config['allowed_types'] = 'jpg|jpeg|png|gif';  
        $this->load->library('upload', $config); 
        $img_src = $post['img_src_old']; 
       
        if($_FILES['img_src']['name']!='') {
            if(!$this->upload->do_upload('img_src'))  
            {  
                $error =  $this->upload->display_errors(); 
                echo json_encode(array('msg' => $error, 'success' => false));
            } else {
                $data = $this->upload->data();
                $img_src = $data['file_name'];
            } 
        }
        
        $DataUpdate = array(
        	'fname' => $post['fname'],
            'mobile' => $post['mobile'],
            'company_name' => $post['company_name'],
            'industry' => $post['industry'],
            'job_location' => $post['location'],
            'img_src' => $img_src,
        );
        $wh = array("id"=>$_SESSION[PREFIX.'id']);
        $this->HWT->update("hwt_user",$DataUpdate,$wh);
        $response = array();

        $response['msg'] = "Update Successfully";
        $response['img_src'] = base_url().IMG_COMPANY_LOGO.$img_src;
        $response['response'] = 1;
        echo json_encode($response);
        die();
    }

    public function password() {
        $post = $this->input->post();
        $res = $this->HWT->get_one_row("hwt_user","*",array("id"=>$_SESSION[PREFIX.'id'],"password"=>md5($post['curr_password'])));
        
        if(!$res) {
            $response['msg'] = "Current Password not matched..";
            $response['response'] = 1;
            echo json_encode($response);
            die();
        } else {
            $DataUpdate = array(
               'password' => md5($post['password']),
               'pass_txt' => $post['password'],             
            );
            $this->HWT->update("hwt_user",$DataUpdate,array("id"=>$_SESSION[PREFIX.'id']));
        }
        $response = array();
        
        $response['msg'] = "New Password set Successfully";
        $response['response'] = 1;
        echo json_encode($response);
        die();
    }
}
