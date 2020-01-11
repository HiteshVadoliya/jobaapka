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
    public function send_mail_to_jobseeker( $post ) {
        /*echo "<pre>";
        print_r($post);
        echo "</pre>";*/

        $job_industry           = $post['job_industry'];
        if(isset($job_industry) && !empty($job_industry)) { $job_industry = implode(",", $job_industry); }
        
        $where = array("1"=>"1");
        $ind_result = array();
        if(!empty($job_industry)) {
            $ind_array = explode(",", $job_industry);
            foreach ($ind_array as $ind_key => $ind_value) {
                $ind_result_hwt = $this->HWT->hwt_idin( "jobseeker_skill", "industry", $where, "industry", $ind_value );
                if($ind_result_hwt) {
                    $output_ind = $this->HWT->hwt_idin_result( "jobseeker_skill", "*", $where, "industry", $ind_value );
                    if(!empty($output_ind)) {
                        foreach ($output_ind as $o_key => $o_value) {
                            $ind_result[] = $o_value['jobseeker_id'];
                        }
                    }
                }
            }
        }
        
        $ind_result = array_unique($ind_result);

        
        $job_job_location = $post['job_job_location'];
        if(isset($job_job_location) && !empty($job_job_location)) { $job_job_location = implode(",", $job_job_location); }
        $job_result = array();
        $where = array("1"=>"1");
        if(!empty($job_job_location)) {
            $job_array = explode(",", $job_job_location);
            foreach ($job_array as $job_key => $job_value) {
                $job_result_hwt = $this->HWT->hwt_idin( "jobseeker_skill", "location", $where, "location", $job_value );
                if($job_result_hwt) {
                    $output_job = $this->HWT->hwt_idin_result( "jobseeker_skill", "*", $where, "location", $job_value );
                    if(!empty($output_job)) {
                        foreach ($output_job as $j_key => $j_value) {
                            $job_result[] = $j_value['jobseeker_id'];
                        }
                    }
                }
            }
        }

        $final_result = array_intersect($ind_result,$job_result);

        $job_job_function = $post['job_job_function'];
        if(isset($job_job_function) && !empty($job_job_function)) { $job_job_function = implode(",", $job_job_function); }
        
        $fun_result = array();
        $where = array("1"=>"1");
        if(!empty($job_job_function)) {
            $fun_array = explode(",", $job_job_function);
            foreach ($fun_array as $fun_key => $fun_value) {
                $fun_result_hwt = $this->HWT->hwt_idin( "jobseeker_skill", "job_function", $where, "job_function", $fun_value );
                if($fun_result_hwt) {
                    $output_fun = $this->HWT->hwt_idin_result( "jobseeker_skill", "*", $where, "job_function", $fun_value );
                    if(!empty($output_fun)) {
                        foreach ($output_fun as $f_key => $f_value) {
                            $fun_result[] = $f_value['jobseeker_id'];
                        }
                    }
                }
            }
        }

        $final_result = array_intersect($final_result,$fun_result);

        $mail_data = array();
        $sitesetting = $this->SiteSetting_model->getSiteSetting();
        $mail_data['site_logo'] = $sitesetting[0]->site_logo;
        $mail_data['site_name'] = $sitesetting[0]->site_name;
        $mail_data['address'] = $sitesetting[0]->address;
        $from_email = FROM_EMAIL;
        
        $subject = 'New Job Posted match your skills';

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
              '.nl2br($post['job_title']).'
            </td>
             <td class="content-cell" align="left" style="box-sizing: border-box; font-family: Arial, sans-serif; padding: 5px; word-break: break-word;">
              <a href="'.base_url("view_job/".$post['last_id']).'">Click Here</a>
            </td>
          </tr>';
        $inner_html .= '</table><br/>';

        $mail_data['inner_html'] = $inner_html;

        
        
        
        /*$mail_data_send['to_email'] = FROM_EMAIL;
        $mail_data_send['subject'] = $subject;
        $mail_data_send['body'] = $message;
        $mail_result = $this->HWT->hwt_send_mail($mail_data_send);*/


        if(!empty($final_result)) {
            foreach ($final_result as $fin_key => $jobseeker_id) {
                $mail_list =  $this->HWT->get_one_row("hwt_user","email,fname",array("isDelete"=>0,"status"=>1,"id"=>$jobseeker_id));
                
                if(!empty($mail_list['email'])) {
                    $mail_data['user_name'] = $mail_list['fname'];
                    $email = $mail_list['email'];
                    $message = $this->load->view(USER.'mail_template/job_alert_to_jobseeker', $mail_data, TRUE);
                    $mail_data_send['to_email'] = FROM_EMAIL;
                    $mail_data_send['subject'] = $subject;
                    $mail_data_send['body'] = $message;
                    $mail_result = $this->HWT->hwt_send_mail($mail_data_send);
                }
            }
        }

        //die();



        /*$job_education = $post['job_education'];
        if(isset($job_education) && !empty($job_education)) { $job_education = implode(",", $job_education); }

        $edu_result = array();
        $where = array("1"=>"1");
        if(!empty($job_education)) {
            $edu_array = explode(",", $job_education);
            foreach ($edu_array as $edu_key => $edu_value) {
                $fun_result_hwt = $this->HWT->hwt_idin( "jobseeker_skill", "job_function", $where, "job_function", $edu_value );
                if($fun_result_hwt) {
                    $output_fun = $this->HWT->hwt_idin_result( "jobseeker_skill", "*", $where, "job_function", $edu_value );
                    $fun_result[] = $output_fun[0]['jobseeker_id'];
                }
            }
        }*/

        
    }

    public function send_mail_to_employer($post){

        /*echo "<pre>";
        print_r($post);
        echo "</pre>";*/

        $job_industry           = $post['job_industry'];
        if(isset($job_industry) && !empty($job_industry)) { $job_industry = implode(",", $job_industry); }
        
        $where = array("1"=>"1");
        $ind_result = array();
        if(!empty($job_industry)) {
            $ind_array = explode(",", $job_industry);
            foreach ($ind_array as $ind_key => $ind_value) {
                $ind_result_hwt = $this->HWT->hwt_idin( "job", "job_industry", $where, "job_industry", $ind_value );
                if($ind_result_hwt) {
                    $output_ind = $this->HWT->hwt_idin_result( "job", "*", $where, "job_industry", $ind_value );
                    if(!empty($output_ind)) {
                        foreach ($output_ind as $o_key => $o_value) {
                            $ind_result[] = $o_value['employer_id'];
                        }
                    }
                }
            }
        }

        
        $ind_result = array_unique($ind_result);
        
        
        $job_job_location = $post['job_job_location'];
        if(isset($job_job_location) && !empty($job_job_location)) { $job_job_location = implode(",", $job_job_location); }
        $job_result = array();
        $where = array("1"=>"1");
        if(!empty($job_job_location)) {
            $job_array = explode(",", $job_job_location);
            foreach ($job_array as $job_key => $job_value) {
                $job_result_hwt = $this->HWT->hwt_idin( "job", "job_job_location", $where, "job_job_location", $job_value );
                if($job_result_hwt) {
                    $output_job = $this->HWT->hwt_idin_result( "job", "*", $where, "job_job_location", $job_value );
                    if(!empty($output_job)) {
                        foreach ($output_job as $b_key => $b_value) {
                            $job_result[] = $b_value['employer_id'];
                        }
                    }
                }
            }
        }


        $final_result = array_intersect($ind_result,$job_result);
        

        $job_job_function = $post['job_job_function'];
        if(isset($job_job_function) && !empty($job_job_function)) { $job_job_function = implode(",", $job_job_function); }
        
        $fun_result = array();
        $where = array("1"=>"1");
        if(!empty($job_job_function)) {
            $fun_array = explode(",", $job_job_function);
            foreach ($fun_array as $fun_key => $fun_value) {
                $fun_result_hwt = $this->HWT->hwt_idin( "job", "job_job_function", $where, "job_job_function", $fun_value );
                if($fun_result_hwt) {
                    $output_fun = $this->HWT->hwt_idin_result( "job", "*", $where, "job_job_function", $fun_value );
                    if(!empty($output_fun)) {
                        foreach ($output_fun as $f_key => $f_value) {
                            $fun_result[] = $f_value['employer_id'];
                        }
                    }
                }
            }
        }

        $final_result = array_intersect($final_result,$fun_result);


        $mail_data = array();
        $sitesetting = $this->SiteSetting_model->getSiteSetting();
        $mail_data['site_logo'] = $sitesetting[0]->site_logo;
        $mail_data['site_name'] = $sitesetting[0]->site_name;
        $mail_data['address'] = $sitesetting[0]->address;
        $from_email = FROM_EMAIL;
        
        $subject = 'Same job posted';

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
              '.nl2br($post['job_title']).'
            </td>
             <td class="content-cell" align="left" style="box-sizing: border-box; font-family: Arial, sans-serif; padding: 5px; word-break: break-word;">
              <a href="'.base_url("view_job/".$post['last_id']).'">Click Here</a>
            </td>
          </tr>';
        $inner_html .= '</table><br/>';

        $mail_data['inner_html'] = $inner_html;

        
        
        
        /*$mail_data_send['to_email'] = FROM_EMAIL;
        $mail_data_send['subject'] = $subject;
        $mail_data_send['body'] = $message;
        $mail_result = $this->HWT->hwt_send_mail($mail_data_send);*/


        if(!empty($final_result)) {
            foreach ($final_result as $fin_key => $jobseeker_id) {
                $mail_list =  $this->HWT->get_one_row("hwt_user","email,fname",array("isDelete"=>0,"status"=>1,"id"=>$jobseeker_id));
                
                if(!empty($mail_list['email'])) {
                    $mail_data['user_name'] = $mail_list['fname'];
                    $email = $mail_list['email'];
                    echo $message = $this->load->view(USER.'mail_template/job_alert_to_jobseeker', $mail_data, TRUE);
                    $mail_data_send['to_email'] = FROM_EMAIL;
                    $mail_data_send['subject'] = $subject;
                    $mail_data_send['body'] = $message;
                    $mail_result = $this->HWT->hwt_send_mail($mail_data_send);
                }
            }
        }
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
        $employer_tags          = $post['employer_tags'];

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
            "employer_tags" => $employer_tags,
        );

        $response = array();

        if($action=='add') {
            $res = $this->HWT->insert("job",$AllData);
            if($res) {
                $post['last_id'] = $res;
                $this->send_mail_to_jobseeker( $post );
                $this->send_mail_to_employer( $post );
                $response['error'] = $res;
                $response['message'] = "Your Job has been posted successfully";
            } else {
                $response['error'] = $res;
                $response['message'] = "Something Went Wrong";
            }
        } else {
            $res = $this->HWT->update("job",$AllData,array("job_id"=>$post['editid'],"employer_id"=>$_SESSION[PREFIX.'id']));
            $response['error'] = 1;
            $response['message'] = "Your Job has been Updated successfully";
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

    public function delete_job_without_registration() {
        $post = $this->input->post();
        $response = array();
        $response['result'] = 0;
        if( !empty($post['did']) ) {
            $DataUpdate = array(
                "isDelete"=>1
            );
            $wh = array("id"=>$post['did']);
            $res = $this->HWT->update("apply_job_without_login",$DataUpdate,$wh);
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
    /* Employer Alert List */
    function get_result_employer( $rowno = 0 ) {

        $post = $this->input->post();

        $frm_data =  explode("&", $post['frm_data']);
        
        $job_title          = explode("=", $frm_data[0])[1];
        $job_job_location   = explode("=", $frm_data[1])[1];
        $job_exp_year       = explode("=", $frm_data[2])[1];
        $job_exp_month      = explode("=", $frm_data[3])[1];



        $c_where = " AND `employer_id` != ".$_SESSION[PREFIX.'id'];
        //$c_where = "";
        if( !empty($job_title) ) {
            $c_where .= " AND `job_title` LIKE '%".$job_title."%' ";    
        }

        $query = "SELECT * FROM job WHERE 1=1 ".$c_where;

        $r = $this->HWT->hwt_custom( $query );

        $employer_ids = array();
        if(!empty($r)) {
            foreach ($r as $r_key => $r_value) {
                $employer_ids[] = $r_value['employer_id'];
            }
        }

        $params = array();
        $rowperpage = LIMIT;
        if($rowno != 0){
            $rowno = ($rowno-1) * $rowperpage;
        } 

        $wh = array("isDelete"=>0,"status"=>1);
        $tbl = array("job as job","hwt_user as u");
        $join = array('job.employer_id = u.id');
        $where_array = array(
            "job.isDelete"=>0,
            "job.status"=>1,
        );

        if(!empty($employer_ids)) {
            $params['in_array'] = $employer_ids;
            $params['in_array_field'] = "u.id";
            $params['groupby'] = "u.id";
        }

        $res2 = $this->HWT->hwt_join_1(  $tbl,$join,$rows="*",$where_array,$params );
        
        
        $this->load->library ( 'pagination' );
        $config ['base_url'] =  base_url().'Employer_Process/get_result_employer/';
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
        $data['no_of_item'] = count($res2);       
        
        // echo $this->db->last_query();
        $data['type'] = "";
        
        if(empty($employer_ids)) {
            $data['jobs'] = array();
        }
        $this->load->view(USER.'ajax/ajax_alert_employer_list',$data);
        
    }

    function get_employer_jobs( $rowno = 0 ) {

        $post = $this->input->post();
        $employer_id = $post['employer_id'];
        $params = array();
        $rowperpage = LIMIT;
        if($rowno != 0){
            $rowno = ($rowno-1) * $rowperpage;
        } 

        $wh = array("isDelete"=>0,"status"=>1,"id"=>$employer_id);
        $tbl = array("job as job","hwt_user as u");
        $join = array('job.employer_id = u.id');
        $where_array = array(
            "job.isDelete"=>0,
            "job.status"=>1,
            "job.employer_id"=>$employer_id,
        );

        $res2 = $this->HWT->hwt_join_1(  $tbl,$join,$rows="*",$where_array,$params );
        
        
        $this->load->library ( 'pagination' );
        $config ['base_url'] =  base_url().'Employer_Process/get_employer_jobs/';
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
        $data['no_of_item'] = count($res2);       
        
        // echo $this->db->last_query();
        $data['type'] = "";
        
        $this->load->view(USER.'ajax/ajax_alert_employer_jobs',$data);
        
    }

    public function add_shortlist() {
        $post = $this->input->post();

        
        $response = array();
        if(isset($_SESSION[PREFIX.'type'])) {
            $final_shortlist = "";
            $res = $this->HWT->get_one_row("hwt_user","shortlist_employer",array("id"=>$_SESSION[PREFIX.'id']));
            $shortlist_employer = $res['shortlist_employer'];

            $action = "Add";
            if(empty($shortlist_employer)) {
                $final_shortlist = $post['empid'];
            } else {

                $check_in = explode(",", $res['shortlist_employer']);
                if(in_array($post['empid'], $check_in)) {
                    $action = "Remove";
                    if (($key = array_search($post['empid'], $check_in)) !== false) {
                        unset($check_in[$key]);
                    }
                    $final_shortlist = implode(",", $check_in);
                } else {
                    $final_shortlist = $shortlist_employer.",".$post['empid'];
                }
            }


            $DataUpdate = array(
                "shortlist_employer" => $final_shortlist
            );
            $wh = array("id"=>$_SESSION[PREFIX.'id']);
            $output = $this->HWT->update("hwt_user",$DataUpdate,$wh);
            
            $response['result_type'] = $action;
            $response['result'] = $output;
            $response['message'] = " Shortlist ".$action.' Successfully';
        } else {
            $response['result'] = 0;
            $response['message'] = 'Please Login';
        }
        echo json_encode($response);
        die();
    }

    function get_shortlisted_employer( $rowno = 0 ) {

        $post = $this->input->post();
        
        $user_data = $this->HWT->get_one_row("hwt_user","shortlist_employer",array("id"=>$_SESSION[PREFIX.'id']));

        if($user_data['shortlist_employer']!='') {
            $shortlist_data = $user_data['shortlist_employer'];
            $shortlist_data = explode(",", $shortlist_data);            
        } else {
            $shortlist_data = array("");
        }
        
        // $res2 = $this->HWT->get_hwt("job","*",array("isDelete"=>0,"status"=>1), $param );

        // ----------------
        $params = array();
        $rowperpage = LIMIT;
        if($rowno != 0){
            $rowno = ($rowno-1) * $rowperpage;
        } 

        $wh = array("isDelete"=>0,"status"=>1);
        $tbl = array("job as job","hwt_user as u");
        $join = array('job.employer_id = u.id');
        $where_array = array(
            "job.isDelete"=>0,
            "job.status"=>1,
        );

        $params['in_array'] = $shortlist_data; 
        $params['in_array_field'] = 'id'; 
        $params['groupby'] = 'employer_id'; 

        $res2 = $this->HWT->hwt_join_1(  $tbl,$join,$rows="*",$where_array,$params );
        
        
        $this->load->library ( 'pagination' );
        $config ['base_url'] =  base_url().'Employer_Process/get_shortlisted_employer/';
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
        $data['no_of_item'] = count($res2);       
        
        // echo $this->db->last_query();
        $data['type'] = "";
        
        $this->load->view(USER.'ajax/ajax_shortlisted_employer',$data);
        
    }

    public function delete_shortlist() {
        $post = $this->input->post();
        $response = array();
        $response['result'] = 0;
        if( !empty($post['empid']) ) {

            $user_data = $this->HWT->get_one_row("hwt_user","*",array("id"=>$_SESSION[PREFIX.'id']));
            $final_shortlist = $user_data['shortlist_employer'];
            $check_in = explode(",", $user_data['shortlist_employer']);
            if(in_array($post['empid'], $check_in)) {
                if (($key = array_search($post['empid'], $check_in)) !== false) {
                    unset($check_in[$key]);
                }
                $final_shortlist = implode(",", $check_in);
            }
           
            
            $DataUpdate = array(
                "shortlist_employer"=>$final_shortlist
            );
            $wh = array("id"=>$_SESSION[PREFIX.'id']);
            $res = $this->HWT->update("hwt_user",$DataUpdate,$wh);
            $response['result'] = $res;
        }
        echo json_encode($response);
        die();
    }
    /* Employer Alert List */

    public function consultin() {
        $post = $this->input->post();

        $action = "insert";
        /*$res = $this->HWT->get_one_row("jobseeker_skill","*",array("jobseeker_id"=>$_SESSION[PREFIX.'id']));
        if($res) {
            $action = "update";
        }
        $action;*/

        $con_contact            = $post['con_contact'];
        $con_email              = $post['con_email'];
        $con_mobile             = $post['con_mobile'];
        $con_company_name       = $post['con_company_name'];
        $con_problem            = $post['con_problem'];
        $con_appointment        = $post['con_appointment'];
        $con_office_address     = $post['con_office_address'];
        $con_appointment_time   = $post['con_appointment_time'];
        $con_other              = $post['con_other'];

        
        $DataUpdate = array(
           'con_contact' => $con_contact,
           'con_email' => $con_email,
           'con_mobile' => $con_mobile,
           'con_company_name' => $con_company_name,
           'con_problem' => $con_problem,
           'con_appointment' => $con_appointment,
           'con_office_address' => $con_office_address,
           'con_appointment_time' => $con_appointment_time,
           'con_other' => $con_other,
        );
        if($action=="insert") {
            $DataUpdate['employer_id'] = $_SESSION[PREFIX.'id'];
            $this->HWT->insert("consultin",$DataUpdate);
            $response = array();
        } else {
            /*$wh = array("jobseeker_id"=>$_SESSION[PREFIX.'id']);
            $this->HWT->update("jobseeker_skill",$DataUpdate,$wh);
            $response = array();*/
        }
       

        $response['msg'] = "Send Successfully";
        $response['response'] = 1;
        echo json_encode($response);
        die();
    }

    /*without registration*/
    function get_result_without_registration( $rowno = 0 ) {

        $post = $this->input->post();


        $params = array();
        $rowperpage = LIMIT;
        if($rowno != 0){
            $rowno = ($rowno-1) * $rowperpage;
        } 

        $wh = array("isDelete"=>0,"status"=>1,"employer_id"=>$_SESSION[PREFIX.'id']);
        $tbl = array("job as job","apply_job_without_login as u","hwt_user as user");
        $join = array('job.employer_id = u.employer_id','user.id=u.employer_id');
        $where_array = array(
            "job.isDelete"=>0,
            "job.status"=>1,
            "u.isDelete"=>0,
            "job.employer_id"=>$_SESSION[PREFIX.'id'],                
        );
        $params['groupby'] = "u.job_id";
        $rows = "*,u.job_id as without_job_id ";
        $res2 = $this->HWT->hwt_join_1(  $tbl,$join,$rows,$where_array,$params );
        
       /* echo $this->db->last_query();
        echo "<pre>";
        print_r($res2);
        die();*/
        
        $this->load->library ( 'pagination' );
        $config ['base_url'] =  base_url().'Employer_Process/get_result_without_registration/';
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
        $res = $this->HWT->hwt_join_1(  $tbl,$join,$rows,$where_array,$params );


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
            $data['type'] = "job_list";
        }
        $this->load->view(USER.'ajax/ajax_job_list_without_registration',$data);
        
    }

    function get_result_jobseeker_list_without_registration( $rowno = 0 ) {

        $post = $this->input->post();

        $params = array();
        $rowperpage = LIMIT;
        if($rowno != 0){
            $rowno = ($rowno-1) * $rowperpage;
        } 

        $wh_2 = array("isDelete"=>0,"job_id"=>$post['job_view_id'],'employer_id'=>$_SESSION[PREFIX.'id']);
        $res2 = $this->HWT->get_hwt("apply_job_without_login", "*",$wh_2 );   
       
        $this->load->library ( 'pagination' );
        $config ['base_url'] =  base_url().'Employer_Process/get_result_jobseeker_list_without_registration/';
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

        $wh_2 = array("isDelete"=>0,"job_id"=>$post['job_view_id'],'employer_id'=>$_SESSION[PREFIX.'id']);
        $res = $this->HWT->get_hwt("apply_job_without_login", "*",$wh_2 ); 
        
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
        $this->load->view(USER.'ajax/ajax_applicant_without_registration',$data);        
    }
    /*without registration*/

}
