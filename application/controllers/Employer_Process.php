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

    public function post_job() {
        $post = $this->input->post();

        $job_date               = date("Y-m-d",strtotime($post['job_date']));
        $job_date_expired       = date("Y-m-d",strtotime($post['job_date_expired']));
        $job_title              = $post['job_title'];
        $job_industry           = $post['job_industry'];
        if(isset($job_industry) && !empty($job_industry)) { $job_industry = implode(",", $job_industry); }
        
        $job_job_location = $post['job_job_location'];
        if(isset($job_job_location) && !empty($job_job_location)) { $job_job_location = implode(",", $job_job_location); }
        
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
            "job_job_location" => $job_job_location,
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

    function get_result( $rowno = 0 ) {

        $post = $this->input->post();


        $params = array();
        $rowperpage = LIMIT;
        if($rowno != 0){
            $rowno = ($rowno-1) * $rowperpage;
        } 

        $wh = array("isDelete"=>0,"status"=>1,"employer_id"=>$_SESSION[PREFIX.'id']);
        $tbl = array("job as job","hwt_user as u");
        $join = array('job.employer_id = u.id');
        $where_array = array(
            "job.isDelete"=>0,
            "job.status"=>1,
            "job.employer_id"=>$_SESSION[PREFIX.'id'],                
        );

        $res2 = $this->HWT->hwt_join_1(  $tbl,$join,$rows="*",$where_array,$params );
        
        $this->load->library ( 'pagination' );
        $config ['base_url'] =  base_url().'Employer_Process/get_result/';
        $config ['total_rows'] = count($res2);
        $config['use_page_numbers'] = TRUE;
        $config ['per_page'] = $rowperpage;
        $config ['num_links'] = 3;
        $config ['full_tag_open'] = '<nav><ul class="pagination">';
        $config ['full_tag_close'] = '</ul></nav>';
        $config ['first_tag_open'] = '<li class="page-item">';
        $config ['first_link'] = '<<';
        $config ['first_tag_close'] = '</li>';
        $config ['prev_link'] = '<';
        $config ['prev_tag_open'] = '<li class="page-item">';
        $config ['prev_tag_close'] = '</li>';
        $config ['next_link'] = '>';
        $config ['next_tag_open'] = '<li class="page-item">';
        $config ['next_tag_close'] = '</li>';
        $config ['cur_tag_open'] = '<li class="active"><a href="javascript:;">';
        $config ['cur_tag_close'] = '</a></li>';
        $config ['num_tag_open'] = '<li>';
        $config ['num_tag_close'] = '</li>';
        $config ['last_tag_open'] = '<li class="page-item">';
        $config ['last_link'] = '>>';
        $config ['last_tag_close'] = '</li>';

        $params['limit'] = array($rowno,$rowperpage); // $rowperpage;
        $res = $this->HWT->hwt_join_1(  $tbl,$join,$rows="*",$where_array,$params );


        $this->pagination->initialize($config);
        $data['page_link'] = $this->pagination->create_links( );
        $data['result'] = $res;
        $data['row'] = $rowno;

        $data['jobs'] = $res;
        //$data['searchParam'] = $search;
        //$data['area'] = $area;
        //$type = explode(',', $type);
        //$data['type'] = $type;
        //$data['findSchool'] = true;
        $data['no_of_item'] = count($res2);       
        
        // echo $this->db->last_query();
        $data['type'] = "";
        if(isset($post['type']) && $post['type']!='') {
            $data['type'] = "job_applicants";
        }
        $this->load->view(USER.'ajax/ajax',$data);
        
    }

    public function delete_job() {
        $post = $this->input->post();
        $response = array();
        $response['result'] = 0;
        if( !empty($post['did']) ) {
            $DataUpdate = array(
                "isDelete"=>1
            );
            $wh = array("job_id"=>$post['did']);
            $res = $this->HWT->update("job",$DataUpdate,$wh);
            $response['result'] = $res;
        }
        echo json_encode($response);
        die();
    }

    function get_result_applicant_list( $rowno = 0 ) {

        $post = $this->input->post();

        $params = array();
        $rowperpage = LIMIT;
        if($rowno != 0){
            $rowno = ($rowno-1) * $rowperpage;
        } 

        $wh = array("isDelete"=>0,"status"=>1,"applied_job !="=>"","type"=>"jobseeker");
        $res3 = $this->HWT->get_hwt( "hwt_user", "*", $wh, $params );
        $users_array = array();
        foreach ($res3 as $key => $value) {
            
            $check_in = explode(",", $value['applied_job']);
            if(in_array($post['job_view_id'], $check_in)) {
                if (($key = array_search($post['job_view_id'], $check_in)) !== false) {
                    $users_array[] = $value['id'];
                }
            }
        }

        
        $data['job_view_id'] = $post['job_view_id'];
        if(empty($users_array)) {
            $res2 = array();
        } else {
            $wh_2 = array("isDelete"=>0,"status"=>1);
            $param2['in_array'] = $users_array;
            $param2['in_array_field'] = "id";
            $res2 = $this->HWT->get_hwt("hwt_user", "*",$wh_2 ,$param2 );
        }
        
       
        $this->load->library ( 'pagination' );
        $config ['base_url'] =  base_url().'Employer_Process/get_result/';
        $config ['total_rows'] = count($res2);
        $config['use_page_numbers'] = TRUE;
        $config ['per_page'] = $rowperpage;
        $config ['num_links'] = 3;
        $config ['full_tag_open'] = '<nav><ul class="pagination">';
        $config ['full_tag_close'] = '</ul></nav>';
        $config ['first_tag_open'] = '<li class="page-item">';
        $config ['first_link'] = '<<';
        $config ['first_tag_close'] = '</li>';
        $config ['prev_link'] = '<';
        $config ['prev_tag_open'] = '<li class="page-item">';
        $config ['prev_tag_close'] = '</li>';
        $config ['next_link'] = '>';
        $config ['next_tag_open'] = '<li class="page-item">';
        $config ['next_tag_close'] = '</li>';
        $config ['cur_tag_open'] = '<li class="active"><a href="javascript:;">';
        $config ['cur_tag_close'] = '</a></li>';
        $config ['num_tag_open'] = '<li>';
        $config ['num_tag_close'] = '</li>';
        $config ['last_tag_open'] = '<li class="page-item">';
        $config ['last_link'] = '>>';
        $config ['last_tag_close'] = '</li>';

        $params['limit'] = array($rowno,$rowperpage); // $rowperpage;

        $wh_2 = array("isDelete"=>0,"status"=>1);
        $params['in_array'] = $users_array;
        $params['in_array_field'] = "id";

        if(empty($users_array)) {
            $res = array();
        } else {
            $wh_2 = array("isDelete"=>0,"status"=>1);
            $param2['in_array'] = $users_array;
            $param2['in_array_field'] = "id";
            $res = $this->HWT->get_hwt("hwt_user", "*",$wh_2 ,$params );
        }

        

        $this->pagination->initialize($config);
        $data['page_link'] = $this->pagination->create_links( );
        $data['result'] = $res;
        $data['row'] = $rowno;

        $data['users'] = $res;
        //$data['searchParam'] = $search;
        //$data['area'] = $area;
        //$type = explode(',', $type);
        //$data['type'] = $type;
        //$data['findSchool'] = true;
        $data['no_of_item'] = count($res2);       
        
        // echo $this->db->last_query();
        $this->load->view(USER.'ajax/ajax_applicant',$data);        
    }
}
