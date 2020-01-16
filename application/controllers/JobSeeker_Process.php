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


        $config['upload_path'] = IMG_PROFILE; 
        $path = IMG_PROFILE;
        if(!is_dir($path)) {
            mkdir($path);
        }
        $config['allowed_types'] = '*';  
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
        $jobseeker_tags = $post['jobseeker_tags'];
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
           'img_src' => $img_src,
           'jobseeker_tags' => $jobseeker_tags,
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

    public function add_shortlist() {
        $post = $this->input->post();

        $response = array();
        if(isset($_SESSION[PREFIX.'type'])) {
            $final_shortlist = "";
            $res = $this->HWT->get_one_row("hwt_user","shortlist",array("id"=>$_SESSION[PREFIX.'id']));
            $shortlist = $res['shortlist'];

            $action = "Add";
            if(empty($shortlist)) {
                $final_shortlist = $post['jobid'];
            } else {

                $check_in = explode(",", $res['shortlist']);
                if(in_array($post['jobid'], $check_in)) {
                    $action = "Remove";
                    if (($key = array_search($post['jobid'], $check_in)) !== false) {
                        unset($check_in[$key]);
                    }
                    $final_shortlist = implode(",", $check_in);
                } else {
                    $final_shortlist = $shortlist.",".$post['jobid'];
                }
            }


            $DataUpdate = array(
                "shortlist" => $final_shortlist
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

    function get_result_shortlist( $rowno = 0 ) {

        $params = array();
        $rowperpage = LIMIT;
        if($rowno != 0){
            $rowno = ($rowno-1) * $rowperpage;
        } 

        $user_data = $this->HWT->get_one_row("hwt_user","shortlist",array("id"=>$_SESSION[PREFIX.'id']));

        if($user_data['shortlist']!='') {
            $shortlist_data = $user_data['shortlist'];
            $shortlist_data = explode(",", $shortlist_data);            
        } else {
            $shortlist_data = array("");
        }
       
        $param['in_array'] = $shortlist_data; 
        $param['in_array_field'] = 'job_id'; 
        $res2 = $this->HWT->get_hwt("job","*",array("isDelete"=>0,"status"=>1,"job_expire"=>0), $param );

      /*  echo $this->db->last_query();
        die();*/
        $this->load->library ( 'pagination' );
        $config ['base_url'] =  base_url().'JobSeeker_Process/get_result_shortlist/';
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

        $param['limit'] = array($rowno,$rowperpage); // $rowperpage;
        $res = $this->HWT->get_hwt("job","*",array("isDelete"=>0,"status"=>1,"job_expire"=>0), $param );

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
        $data['no_of_item'] = count($res);       
        /*echo "<pre>";
        print_r($res);
        die();*/
        // echo $this->db->last_query();
        if($user_data['shortlist']!='') {
            $this->load->view(USER.'ajax/ajax_shortlist',$data);
        } else {
            $data['jobs'] = array();
            $this->load->view(USER.'ajax/ajax_shortlist',$data);
        }
        
    }

    public function delete_shortlist() {
        $post = $this->input->post();
        $response = array();
        $response['result'] = 0;
        if( !empty($post['jobid']) ) {

            $user_data = $this->HWT->get_one_row("hwt_user","*",array("id"=>$_SESSION[PREFIX.'id']));
            $final_shortlist = $user_data['shortlist'];
            $check_in = explode(",", $user_data['shortlist']);
            if(in_array($post['jobid'], $check_in)) {
                if (($key = array_search($post['jobid'], $check_in)) !== false) {
                    unset($check_in[$key]);
                }
                $final_shortlist = implode(",", $check_in);
            }
           
            
            $DataUpdate = array(
                "shortlist"=>$final_shortlist
            );
            $wh = array("id"=>$_SESSION[PREFIX.'id']);
            $res = $this->HWT->update("hwt_user",$DataUpdate,$wh);
            $response['result'] = $res;
        }
        echo json_encode($response);
        die();
    }

    function get_result_applied_job( $rowno = 0 ) {

        $params = array();
        $rowperpage = LIMIT;
        if($rowno != 0){
            $rowno = ($rowno-1) * $rowperpage;
        } 

        $user_data = $this->HWT->get_one_row("hwt_user","applied_job",array("id"=>$_SESSION[PREFIX.'id']));

        if($user_data['applied_job']!='') {
            $applied_job_data = $user_data['applied_job'];
            $applied_job_data = explode(",", $applied_job_data);            
        } else {
            $applied_job_data = array("");
        }
       
        $param['in_array'] = $applied_job_data; 
        $param['in_array_field'] = 'job_id'; 
        $res2 = $this->HWT->get_hwt("job","*",array("isDelete"=>0,"status"=>1,"job_expire"=>0), $param );

        $this->load->library ( 'pagination' );
        $config ['base_url'] =  base_url().'JobSeeker_Process/get_result_applied_job/';
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

        $param['limit'] = array($rowno,$rowperpage); // $rowperpage;
        $res = $this->HWT->get_hwt("job","*",array("isDelete"=>0,"status"=>1,"job_expire"=>0), $param );

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
        $data['no_of_item'] = count($res);       
        /*echo "<pre>";
        print_r($res);
        die();*/
        // echo $this->db->last_query();
        if($user_data['applied_job']!='') {
            $this->load->view(USER.'ajax/ajax_applied_job',$data);
        } else {
            $data['jobs'] = array();
            $this->load->view(USER.'ajax/ajax_applied_job',$data);
        }
        
    }

    public function delete_appliedjob() {
        $post = $this->input->post();
        $response = array();
        $response['result'] = 0;
        if( !empty($post['jobid']) ) {

            $user_data = $this->HWT->get_one_row("hwt_user","*",array("id"=>$_SESSION[PREFIX.'id']));
            $final_applied_job = $user_data['applied_job'];
            $check_in = explode(",", $user_data['applied_job']);
            if(in_array($post['jobid'], $check_in)) {
                if (($key = array_search($post['jobid'], $check_in)) !== false) {
                    unset($check_in[$key]);
                }
                $final_applied_job = implode(",", $check_in);
            }
           
            
            $DataUpdate = array(
                "applied_job"=>$final_applied_job
            );
            $wh = array("id"=>$_SESSION[PREFIX.'id']);
            $res = $this->HWT->update("hwt_user",$DataUpdate,$wh);
            $response['result'] = $res;
        }
        echo json_encode($response);
        die();
    }

    public function education() {
        $post = $this->input->post();
        $action = "insert";
        $res = $this->HWT->get_one_row("jobseeker_edu","*",array("jobseeker_id"=>$_SESSION[PREFIX.'id']));
        if($res) {
            $action = "update";
        }
        $action;

        $post_graduation        = $post['post_graduation'];
        $graduation             = $post['graduation'];
        $other                  = $post['other'];
        
        $DataUpdate = array(
           'post_graduation' => $post_graduation,
           'graduation' => $graduation,
           'other' => $other,
        );
        if($action=="insert") {
            $DataUpdate['jobseeker_id'] = $_SESSION[PREFIX.'id'];
            $this->HWT->insert("jobseeker_edu",$DataUpdate);
            $response = array();
        } else {
            $wh = array("jobseeker_id"=>$_SESSION[PREFIX.'id']);
            $this->HWT->update("jobseeker_edu",$DataUpdate,$wh);
            $response = array();
        }

        $response['msg'] = "Update Successfully";
        $response['response'] = 1;
        echo json_encode($response);
        die();
    }

    public function history() {
        $post = $this->input->post();


        $history = json_encode($post['history']);
        
        $DataUpdate = array(
            "history" => $history,
        );
        $wh = array("id"=>$_SESSION[PREFIX.'id']);
        $this->HWT->update("hwt_user",$DataUpdate,$wh);
        $response = array();

        $response['msg'] = "Update Successfully";
        $response['response'] = 1;
        echo json_encode($response);
        die();
    }

    public function post()
    {
        $data = $_POST['image'];

        $imageName = $_SESSION[PREFIX.'name'].'_'.$_SESSION[PREFIX.'id'].'.png';
     
        list($type, $data) = explode(';', $data);
        list(, $data)      = explode(',', $data);

        $DataUpdate = array(
            'img_src'=>$imageName,
        );
        $wh = array("id"=>$_SESSION[PREFIX.'id']);
        $this->HWT->update("hwt_user",$DataUpdate,$wh);
     
        $data = base64_decode($data);

        if($_SESSION[PREFIX.'type']=='employer') {

        file_put_contents(IMG_COMPANY_LOGO.$imageName, $data);
        } else {

        file_put_contents(IMG_SRC.'profile/'.$imageName, $data);
        }
        

     
        echo 'done';
    }

    function get_result_job_alert( $rowno = 0 ) {

        $params = array();
        $rowperpage = LIMIT;
        if($rowno != 0){
            $rowno = ($rowno-1) * $rowperpage;
        } 

        $user_data = $this->HWT->get_one_row("jobseeker_skill","*",array("jobseeker_id"=>$_SESSION[PREFIX.'id']));

        /*echo "<pre>";
        print_r($user_data);
        echo "</pre>";*/

        $job_industry           = $user_data['industry'];
        if(isset($job_industry) && !empty($job_industry)) { }
        
        $where = array("isDelete"=>0,"status"=>1,"job_expire"=>0);
        $ind_result = array();
        if(!empty($job_industry)) {
            $ind_array = explode(",", $job_industry);
            foreach ($ind_array as $ind_key => $ind_value) {
                $ind_result_hwt = $this->HWT->hwt_idin( "job", "job_id", $where, "job_industry", $ind_value );

                if($ind_result_hwt) {
                    $output_ind = $this->HWT->hwt_idin_result( "job", "*", $where, "job_industry", $ind_value );
                    if(!empty($output_ind)) {
                        foreach ($output_ind as $o_key => $o_value) {
                            $ind_result[] = $o_value['job_id'];
                        }
                    }
                }
            }
        }

        $ind_result = array_unique($ind_result);

        $job_job_location = $user_data['location'];
        if(isset($job_job_location) && !empty($job_job_location)) {  }
        $job_result = array();
        $where = array("isDelete"=>0,"status"=>1,"job_expire"=>0);
        if(!empty($job_job_location)) {
            $job_array = explode(",", $job_job_location);
            foreach ($job_array as $job_key => $job_value) {
                $job_result_hwt = $this->HWT->hwt_idin( "job", "job_id", $where, "job_job_location", $job_value );
                if($job_result_hwt) {
                    $output_job = $this->HWT->hwt_idin_result( "job", "*", $where, "job_job_location", $job_value );
                    if(!empty($output_job)) {
                        foreach ($output_job as $j_key => $j_value) {
                            $job_result[] = $j_value['job_id'];
                        }
                    }
                }
            }
        }

        $final_result = array_intersect($ind_result,$job_result);


        $job_job_function = $user_data['job_function'];
        if(isset($job_job_function) && !empty($job_job_function)) {  }
        
        $fun_result = array();
        $where = array("isDelete"=>0,"status"=>1,"job_expire"=>0);
        if(!empty($job_job_function)) {
            $fun_array = explode(",", $job_job_function);
            foreach ($fun_array as $fun_key => $fun_value) {
                $fun_result_hwt = $this->HWT->hwt_idin( "job", "job_id", $where, "job_job_function", $fun_value );
                if($fun_result_hwt) {
                    $output_fun = $this->HWT->hwt_idin_result( "job", "*", $where, "job_job_function", $fun_value );
                    if(!empty($output_fun)) {
                        foreach ($output_fun as $f_key => $f_value) {
                            $fun_result[] = $f_value['job_id'];
                        }
                    }
                }
            }
        }

        $final_result = array_intersect($final_result,$fun_result);


        $jobseeker_tags = $user_data['jobseeker_tags'];
        if(isset($jobseeker_tags) && !empty($jobseeker_tags)) {  }
        
        $tag_result = array();
        $where = array("isDelete"=>0,"status"=>1,"job_expire"=>0);
        if(!empty($jobseeker_tags)) {
            $fun_array = explode(",", $jobseeker_tags);
            foreach ($fun_array as $fun_key => $fun_value) {
                $fun_result_hwt = $this->HWT->get_hwt("job","*",$where);
                if($fun_result_hwt) {
                    foreach ($fun_result_hwt as $j_key => $j_value) {
                        $employer_tags = $j_value['employer_tags'];
                        if($employer_tags) {
                            $employer_tags_array = explode(",", $employer_tags);
                            foreach ($employer_tags_array as $tag_key => $tag_value) {
                                //echo $tag_value."=".$fun_value."=".$j_value['job_id'];
                                if($tag_value==$fun_value) {
                                    $tag_result[] = $j_value['job_id'];
                                }
                            }
                        }
                    }
                }
            }
        }

        $final_result = array_intersect($final_result,$tag_result);

        /*echo "<pre>";
        print_r($final_result);
        echo "</pre>";*/
        

        if($final_result!='') {
            $alert_job = $final_result;
            // $alert_job = explode(",", $alert_job);            
        } else {
            $alert_job = array("");
        }
       
        $param['in_array'] = $alert_job; 
        $param['in_array_field'] = 'job_id'; 
        $res2 = $this->HWT->get_hwt("job","*",array("isDelete"=>0,"status"=>1,"job_expire"=>0), $param );

        

        $this->load->library ( 'pagination' );
        $config ['base_url'] =  base_url().'JobSeeker_Process/get_result_job_alert/';
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

        $param['limit'] = array($rowno,$rowperpage); // $rowperpage;
        $res = $this->HWT->get_hwt("job","*",array("isDelete"=>0,"status"=>1,"job_expire"=>0), $param );

        /*echo $this->db->last_query();
        die();*/

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
        $data['no_of_item'] = count($res);       
        /*echo "<pre>";
        print_r($res);
        die();*/
        // echo $this->db->last_query();
        if($final_result!='') {
            $this->load->view(USER.'ajax/ajax_alert_job',$data);
        } else {
            $data['jobs'] = array();
            $this->load->view(USER.'ajax/ajax_alert_job',$data);
        }
        
    }
    
}
