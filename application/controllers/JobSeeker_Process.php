<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/libraries/FrontController.php';
class JobSeeker_Process extends FrontController {
    public function profile() {
        $post = $this->input->post();

        $config['upload_path'] = IMG_PROFILE; 
        $path = IMG_PROFILE;
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
        	"fname" => $post['fname'],
        	"mobile" => $post['mobile'],
            'img_src' => $img_src,
        );
        $wh = array("id"=>$_SESSION[PREFIX.'id']);
        $this->HWT->update("hwt_user",$DataUpdate,$wh);
        $response = array();

        $response['msg'] = "Update Successfully";
        $response['img_src'] = base_url().IMG_PROFILE.$img_src;
        $response['response'] = 1;
        echo json_encode($response);
        die();
    }

    public function contact() {
        $post = $this->input->post();
        
        $DataUpdate = array(
        	"mobile" => $post['mobile'],
        	"email" => $post['email'],
        	"country_id" => $post['country_id'],
        	"city" => $post['city'],
        	"zip" => $post['zip'],
        	"address" => $post['address'],
        );
        $wh = array("id"=>$_SESSION[PREFIX.'id']);
        $this->HWT->update("hwt_user",$DataUpdate,$wh);
        $response = array();

        $response['msg'] = "Update Successfully";
        $response['response'] = 1;
        echo json_encode($response);
        die();
    }

    public function skill() {
        $post = $this->input->post();
        $action = "insert";
        $res = $this->HWT->get_one_row("jobseeker_skill","*",array("jobseeker_id"=>$_SESSION[PREFIX.'id']));
        if($res) {
            $action = "update";
        }
        $action;

        $title = $post['title'];
        $skill = $post['skill'];
        $exp_year = $post['exp_year'];
        $exp_month = $post['exp_month'];
        $designation = $post['designation'];
        if(isset($designation) && !empty($designation)) { $designation = implode(",", $designation); }

        $job_type = $post['job_type'];
        if(isset($job_type) && !empty($job_type)) { $job_type = implode(",", $job_type); }
        
        $salary = $post['salary'];
        if(isset($salary) && !empty($salary)) { $salary = implode(",", $salary); }
        
        $job_function = $post['job_function'];
        if(isset($job_function) && !empty($job_function)) { $job_function = implode(",", $job_function); }
        $location = $post['location'];
        if(isset($location) && !empty($location)) { $location = implode(",", $location); }
        $industry = $post['industry'];
        if(isset($industry) && !empty($industry)) { $industry = implode(",", $industry); }
        $category = $post['category'];
        if(isset($category) && !empty($category)) { $category = implode(",", $category); }
        
        $DataUpdate = array(
           'title' => $title,
           'skill' => $skill,
           'exp_year' => $exp_year,
           'exp_month' => $exp_month,
           'designation' => $designation,
           'job_type' => $job_type,
           'salary' => $salary,
           'job_function' => $job_function,
           'location' => $location,
           'industry' => $industry,
           'category' => $category,
        );
        if($action=="insert") {
            $DataUpdate['jobseeker_id'] = $_SESSION[PREFIX.'id'];
            $this->HWT->insert("jobseeker_skill",$DataUpdate);
            $response = array();
        } else {
            $wh = array("jobseeker_id"=>$_SESSION[PREFIX.'id']);
            $this->HWT->update("jobseeker_skill",$DataUpdate,$wh);
            $response = array();
        }

        $response['msg'] = "Update Successfully";
        $response['response'] = 1;
        echo json_encode($response);
        die();
    }


    public function other() {
        $post = $this->input->post();
        $action = "insert";
        $res = $this->HWT->get_one_row("jobseeker_other","*",array("jobseeker_id"=>$_SESSION[PREFIX.'id']));
        if($res) {
            $action = "update";
        }
        $action;

        $specific_role = $post['specific_role'];
        $project = $post['project'];
        $achivement = $post['achivement'];
        $awards = $post['awards'];
        
        $DataUpdate = array(
           'specific_role' => $specific_role,
           'project' => $project,
           'achivement' => $achivement,
           'awards' => $awards,
        );
        if($action=="insert") {
            $DataUpdate['jobseeker_id'] = $_SESSION[PREFIX.'id'];
            $this->HWT->insert("jobseeker_other",$DataUpdate);
            $response = array();
        } else {
            $wh = array("jobseeker_id"=>$_SESSION[PREFIX.'id']);
            $this->HWT->update("jobseeker_other",$DataUpdate,$wh);
            $response = array();
        }

        $response['msg'] = "Update Successfully";
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

    public function post_job() {
        $post = $this->input->post();


        $job_date               = $post['job_date'];
        $job_date_expired       = $post['job_date_expired'];
        $job_title              = $post['job_title'];
        $job_industry           = $post['job_industry'];
        if(isset($job_industry) && !empty($job_industry)) { $job_industry = implode(",", $job_industry); }
        
        $job_location = $post['job_location'];
        if(isset($job_location) && !empty($job_location)) { $job_location = implode(",", $job_location); }
        
        $job_job_function = $post['job_job_function'];
        if(isset($job_job_function) && !empty($job_job_function)) { $job_job_function = implode(",", $job_job_function); }
        
        $job_education = $post['job_education'];
        if(isset($job_education) && !empty($job_education)) { $job_education = implode(",", $job_education); }
       
        $job_exp_year           = $post['job_exp_year'];
        $job_exp_month          = $post['job_exp_month'];
        $job_salary             = $post['job_salary'];
        $job_skill              = $post['job_skill'];
        $job_additional_skill   = $post['job_additional_skill'];
        $job_descr              = $post['job_descr'];
        $job_additional_role    = $post['job_additional_role'];

        $action = $post['action'];

        $AllData = array(
            "employer_id" => $_SESSION[PREFIX.'id'],
            "job_date" => $job_date,
            "job_date_expired" => $job_date_expired,
            "job_title" => $job_title,
            "job_industry" => $job_industry,
            "job_location" => $job_location,
            "job_job_function" => $job_job_function,
            "job_education" => $job_education,
            "job_exp_year" => $job_exp_year,
            "job_exp_month" => $job_exp_month,
            "job_salary" => $job_salary,
            "job_skill" => $job_skill,
            "job_additional_skill" => $job_additional_skill,
            "job_descr" => $job_descr,
            "job_additional_role" => $job_additional_role,
        );

        $response = array();

        if($action=='add') {
            $res = $this->HWT->insert("job",$AllData);
            if($res) {
                $response['error'] = $res;
                $response['message'] = "Job Added Successfully";
            } else {
                $response['error'] = $res;
                $response['message'] = "Something Went Wrong";
            }
        } else {
            $res = $this->HWT->update("job",$AllData,array("job_id"=>$post['editid'],"employer_id"=>$_SESSION[PREFIX.'id']));
            $response['error'] = 1;
            $response['message'] = "Job Updated Successfully";
        }
        
        echo json_encode($response);
        die();
    }
}
