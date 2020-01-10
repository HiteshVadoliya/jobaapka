<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/libraries/FrontController.php';
class JobSeeker_Process extends FrontController {
    public function profile() {
        $post = $this->input->post();

        /*$config['upload_path'] = IMG_PROFILE; 
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
        }*/

        $DataUpdate = array(
        	"fname" => $post['fname'],
        	"mobile" => $post['mobile'],
            // 'img_src' => $img_src,
        );
        $wh = array("id"=>$_SESSION[PREFIX.'id']);
        $this->HWT->update("hwt_user",$DataUpdate,$wh);
        $response = array();

        $response['msg'] = "Update Successfully";
        // $response['img_src'] = base_url().IMG_PROFILE.$img_src;
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
        $res2 = $this->HWT->get_hwt("job","*",array("isDelete"=>0,"status"=>1), $param );

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
        $res = $this->HWT->get_hwt("job","*",array("isDelete"=>0,"status"=>1), $param );

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
        $res2 = $this->HWT->get_hwt("job","*",array("isDelete"=>0,"status"=>1), $param );

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
        $res = $this->HWT->get_hwt("job","*",array("isDelete"=>0,"status"=>1), $param );

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
    
}
