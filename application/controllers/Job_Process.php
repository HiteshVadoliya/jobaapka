<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/libraries/FrontController.php';
class Job_Process extends FrontController {
    
    function get_result( $rowno = 0 ) {

        $post = $this->input->post();

        $post = json_decode($post['search'],true);
        

        $params = array();
        $rowperpage = LIMIT;
        if($rowno != 0){
            $rowno = ($rowno-1) * $rowperpage;
        } 

        if(isset($post) && !empty($post['q']) ) {
            $params['search'] = $post['q'];
            $params['search_column'] = array("job_title","company_name");
        }

        $wh = array("isDelete"=>0,"status"=>1);
        $tbl = array("job as job","hwt_user as u");
        $join = array('job.employer_id = u.id');
        $where_array = array(
            "job.isDelete"=>0,
            "job.status"=>1,
        );

        $res2 = $this->HWT->hwt_join_1(  $tbl,$join,$rows="*",$where_array,$params );
        /*echo $this->db->last_query();
        die();*/
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
        $this->load->view(USER.'ajax/ajax_list',$data);
        
    }

    public function apply_job() {
        $post = $this->input->post();
        $response = array();
        if(isset($_SESSION[PREFIX.'type'])) {
            $final_applylist = "";
            $res = $this->HWT->get_one_row("hwt_user","applied_job",array("id"=>$_SESSION[PREFIX.'id']));
            $applied_job = $res['applied_job'];

            $action = "Add";
            if(empty($applied_job)) {
                $final_applylist = $post['jobid'];
            } else {

                $check_in = explode(",", $res['applied_job']);
                if(in_array($post['jobid'], $check_in)) {
                    if (($key = array_search($post['jobid'], $check_in)) !== false) {
                        //unset($check_in[$key]);
                        $action = "already";
                    }
                    $final_applylist = $applied_job;
                } else {
                    $action = "Add";
                    $final_applylist = $applied_job.",".$post['jobid'];
                }
            }


            $DataUpdate = array(
                "applied_job" => $final_applylist
            );
            $wh = array("id"=>$_SESSION[PREFIX.'id']);
            $output = $this->HWT->update("hwt_user",$DataUpdate,$wh);
            
            $response['result_type'] = $action;
            $response['result'] = $output;
            $response['message'] = 'Apply Successfully';
        } else {
            $response['result'] = 0;
            $response['message'] = 'Please Login';
        }
        echo json_encode($response);
        die();
    }

    public function apply_job_without_registration()  {
        $post = $this->input->post();


        $config['upload_path'] = IMG_PROFILE; 
        $path = IMG_PROFILE;
        if(!is_dir($path)) {
            mkdir($path);
        }
        $config['allowed_types'] = '*';  
        $this->load->library('upload', $config); 
        $img_src = "";
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

        $location = ($post['location']) ? $post['location'] : '';
        if(isset($location) && !empty($location)) { $location = implode(",", $location); }

        $res_data =  $this->HWT->get_one_row("job","employer_id",array("job_id"=>$post['job_id']));
        $employer_id = $res_data['employer_id'];
        
        $DataUpdate = array(
            "name"          => $post['name'],
            "email"         => $post['email'],
            "mobile"        => $post['mobile'],
            "exp_year"      => $post['exp_year'],
            "exp_month"     => $post['exp_month'],
            "details"       => $post['details'],
            "location"       => $location,
            "employer_id"       => $employer_id,
            'img_src'       => $img_src,
        );
        $res = $this->HWT->insert("apply_job_without_login",$DataUpdate);
        $response = array();

        if($res) {
            $response['msg'] = "Applied Successfully Successfully";
            $response['response'] = 1;
        } else {
            $response['msg'] = "Something went wrong..!";
            $response['response'] = 0;            
        }
        echo json_encode($response);
        die();
    }



}
