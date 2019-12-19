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
            $params['search_column'] = array("job_title");
        }

        $wh = array("isDelete"=>0,"status"=>1);
        $tbl = array("job as job","hwt_user as u");
        $join = array('job.employer_id = u.id');
        $where_array = array(
            "job.isDelete"=>0,
            "job.status"=>1,
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
        $this->load->view(USER.'ajax/ajax_list',$data);
        
    }


}
