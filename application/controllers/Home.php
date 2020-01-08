<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/libraries/FrontController.php';
class Home extends FrontController {

	public function index()
	{
		$data = array();
		$this->global['pageTitle'] = 'Home';
		$data['active_menu'] = "home";
        $wh = array("isDelete"=>0,"status"=>1);
        $data['hwt_slider'] = $this->HWT->get_result("slider","*",$wh);
        $data['hwt_industry'] = $this->HWT->get_result("industry","*",$wh);
        $params['limit'] = array("0","18");
        $data['hwt_industry'] = $this->HWT->get_hwt("industry","*",$wh,$params);
        $data['hwt_testimonial'] = $this->HWT->get_result("testimonial","*",$wh);

        $params['limit'] = array("0","4");
        $params['shortby'] = 'id';
        $params['shortorder'] = 'DESC';
        $wh['type'] = 'employer';
        $data['hwt_employer'] = $this->HWT->get_hwt("hwt_user","*",$wh,$params);



        $wh['type'] = 'jobseeker';

        $wh = array("isDelete"=>0,"status"=>1);
        $tbl = array("job as job","hwt_user as u");
        $join = array('job.employer_id = u.id');
        $where_array = array(
            "job.isDelete"=>0,
            "job.status"=>1,
        );
        $data['hwt_jobseeker'] = $this->HWT->hwt_join_1($tbl,$join,"*",$where_array ,$params);
        
        $this->loadViews(USER."home", $this->global, $data, NULL,NULL);
	}

    public function industry(){
        $data = array();
        $wh = array("isDelete"=>0,"status"=>1);
        $data['hwt_industry'] = $this->HWT->get_hwt("industry","*",$wh);
        $this->global['pageTitle'] = 'industry';
        $data['active_menu'] = "industry";
        $this->loadViews(USER."industry", $this->global, $data, NULL,NULL);
    }

    public function choose_signup() {
        $this->check_session();
        $data = array();
        $this->global['pageTitle'] = 'choose_signup';
        $data['active_menu'] = "signup";
        $this->loadViews(USER."choose_signup", $this->global, $data, NULL,NULL);
    }
    public function signup( $type = 'jobseeker' ) {
        $this->check_session();
        $data = array();

        $data['collection'] = $this->collection_data();

        /*echo "<pre>";
        print_r($data['collection']);
        die();*/
        
        /*Login With Facebook */
        $this->load->library('facebook');
          $userData = array();
          if($this->facebook->is_authenticated()){
              $userProfile = $this->facebook->request('get', '/me?fields=id,first_name,last_name,email,gender,locale,picture');
              // echo "<pre>";
              $this->login_with_facebook($userProfile);
              // print_r($userProfile);
              die;
          }
          else
          {
              $data['authUrl'] =  $this->facebook->login_url();
          }
        /*Login With Facebook */

        $this->global['pageTitle'] = 'signup';
        $data['active_menu'] = "signup";
        $data['signup_type'] = $type;
        $this->loadViews(USER."signup", $this->global, $data, NULL,NULL);
    }

    public function collection_data() {
        $collection = array();
        /*Job Function */
        $job_function = $this->HWT->get_result("job_function","*",array("isDelete"=>0,"status"=>1));
        $collection['job_function'] = $job_function;

        /* Location */
        $location = $this->HWT->get_result("location","*",array("isDelete"=>0,"status"=>1));
        $collection['location'] = $location;

        /* Education */
        $education = $this->HWT->get_result("education","*",array("isDelete"=>0,"status"=>1));
        $collection['education'] = $education;

        /* Industry */
        $industry = $this->HWT->get_result("industry","*",array("isDelete"=>0,"status"=>1));
        $collection['industry'] = $industry;

        /* Counrty */
        $countries = $this->HWT->get_result("countries","*",array("1"=>"1"));
        $collection['countries'] = $countries;

        /* Designation Level */
        $designation_level = $this->HWT->get_result("designation_level","*",array("isDelete"=>0,"status"=>1));
        $collection['designation_level'] = $designation_level;

        /* job_type */
        $job_type = $this->HWT->get_result("job_type","*",array("isDelete"=>0,"status"=>1));
        $collection['job_type'] = $job_type;

        /* job_type */
        $salary = $this->HWT->get_result("salary","*",array("isDelete"=>0,"status"=>1));
        $collection['salary'] = $salary;

        /* category */
        $category = $this->HWT->get_result("category","*",array("isDelete"=>0,"status"=>1));
        $collection['category'] = $category;

        /* Experience in Year */
        $exe = 21;
        $exe_year = array();
        for ($exp_i=0; $exp_i < $exe; $exp_i++) { 
            $exe_year[] = $exp_i;
        }
        $collection['exp_year'] = $exe_year;

        /* Experience in Month */
        $exe_m = 12;
        $exe_month = array();
        for ($exp_m=0; $exp_m < $exe_m; $exp_m++) { 
            $exe_month[] = $exp_m;
        }
        $collection['exp_month'] = $exe_month;

        

        return $collection;
    }

    public function policy( ) {
        $data = array();
        $this->global['pageTitle'] = 'policy';
        $data['active_menu'] = "policy";
        $data['hwt_policy'] = $this->HWT->get_one_row("about","*",array("id"=>3));
        $this->loadViews(USER."policy", $this->global, $data, NULL,NULL);
    }
    public function terms( ) {
        $data = array();
        $this->global['pageTitle'] = 'terms';
        $data['active_menu'] = "terms";
        $data['hwt_terms'] = $this->HWT->get_one_row("about","*",array("id"=>4));
        $this->loadViews(USER."terms", $this->global, $data, NULL,NULL);
    }

    public function login() {

      //$this->check_session();
      $data = array();
      /*Login With Facebook */
      $this->load->library('facebook');
        $userData = array();
        if($this->facebook->is_authenticated()){
            $userProfile = $this->facebook->request('get', '/me?fields=id,first_name,last_name,email,gender,locale,picture');
            // echo "<pre>";
            $this->login_with_facebook($userProfile);
            // print_r($userProfile);
            die;
        }
        else
        {
            $data['authUrl'] =  $this->facebook->login_url();
        }
      /*Login With Facebook */

      $this->load->library('google');
      $data['google_login_url']=$this->google->get_login_url();


      $this->global['pageTitle'] = 'login';
      $data['active_menu'] = "login";
      $this->loadViews(USER."login", $this->global, $data, NULL,NULL);
    }

    public function login_with_google( ) {
        require_once APPPATH.'third_party/src/Google_Client.php';
        require_once APPPATH.'third_party/src/contrib/Google_Oauth2Service.php';

        $clientId = '500258887489-7heulp5g02fpbnbimkdpeouj1sb3amb0.apps.googleusercontent.com'; //Google client ID
        $clientSecret = 'X0GWTJ0ChkTSSrBIiRVGXtf7'; //Google client secret
        $redirectURL = base_url() . 'Home/login_with_google/';
        // $redirectURL = base_url() . 'Login/google_login/';
        
        //Call Google API
        $gClient = new Google_Client();
        $gClient->setApplicationName('Login');
        $gClient->setClientId($clientId);
        $gClient->setClientSecret($clientSecret);
        $gClient->setRedirectUri($redirectURL);
        $google_oauthV2 = new Google_Oauth2Service($gClient);
        
        if(isset($_GET['code']))
        {
            $gClient->authenticate($_GET['code']);
            $_SESSION['token'] = $gClient->getAccessToken();
            header('Location: ' . filter_var($redirectURL, FILTER_SANITIZE_URL));
        }

        if (isset($_SESSION['token'])) 
        {
            $gClient->setAccessToken($_SESSION['token']);
        }
        
        if ($gClient->getAccessToken()) {
            $userProfile = $google_oauthV2->userinfo->get();
            // echo "<pre>";
            // print_r($userProfile);
            $this->login_with_facebook( $userProfile , "google" );
            die;
        } 
        else 
        {
            $url = $gClient->createAuthUrl();
            header("Location: $url");
            exit;
        }
    }

    public function login_with_facebook( $data , $type = "FB" ) {

        if($type=="google") {
            $id             = $data['id'];
            $first_name     = $data['name'];
            $last_name      = $data['last_name'];
            $email          = $data['email'];
            $picture          = $data['picture'];
            $data_insert = array(
                "fname"=> $first_name,
                "email"=> $email,
                "gid"=> $id,
                "type"=> "jobseeker",
            );
        } else {
            $id             = $data['id'];
            $first_name     = $data['first_name'];
            $last_name      = $data['last_name'];
            $email          = $data['email'];
            $data_insert = array(
                "fname"=> $first_name." ".$last_name,
                "email"=> $email,
                "fbid"=> $id,
                "type"=> "jobseeker",
            );
        }

        $res = $this->HWT->get_one_row("hwt_user","*",array("email"=>$email));
        if($res) {
            $this->HWT->update("hwt_user",$data_insert,array("email"=>$email));
        } else {
            $this->HWT->insert("hwt_user",$data_insert);
        }

        $dup = $this->HWT->get_one_row("hwt_user","*",array("email"=>$email));

        $_SESSION[PREFIX.'id'] = $dup['id'];
        $_SESSION[PREFIX.'name'] = $dup['fname'];
        $_SESSION[PREFIX.'type'] = $dup['type'];
        $_SESSION[PREFIX.'email'] = $dup['email'];
        $login_with = "Facebook ";
        if($type=='google') { $login_with = "Google "; }
        $_SESSION['SUCCESS'] = $login_with. "login Successfully";
        redirect(base_url());

    }

    

    public function about() {
        $data = array();
        $this->global['pageTitle'] = 'About';
        $data['active_menu'] = "about";
        $data['hwt_about'] = $this->HWT->get_one_row("about","*",array("id"=>2));
        $data['hwt_our_clients'] = $this->HWT->get_result("our_clients","*",array("isDelete"=>0,"status"=>1));
        $this->loadViews(USER."about", $this->global, $data, NULL,NULL);
    }

    public function whyus() {
        $data = array();
        $this->global['pageTitle'] = 'whyus';
        $data['active_menu'] = "whyus";
        $data['hwt_whyus'] = $this->HWT->get_one_row("about","*",array("id"=>1));
        $data['hwt_our_clients'] = $this->HWT->get_result("our_clients","*",array("isDelete"=>0,"status"=>1));
        $this->loadViews(USER."whyus", $this->global, $data, NULL,NULL);
    }

    public function jobseeker( $type ) {
       
        $this->check_jobseeker();
        $data = array();
        $this->global['pageTitle'] = 'jobseeker';
        $data['active_menu'] = "jobseeker";
        $data['active_menu'] = $type;
        $data['collection'] = $this->collection_data();
        $data['jobseeker_data'] = $this->HWT->get_one_row("hwt_user","*",array("isDelete"=>0,"status"=>1,"id"=>$_SESSION[PREFIX.'id']));
        if($type=="profile") {
            $this->loadViews(USER."jobseeker_profile", $this->global, $data, NULL,NULL);
        } else if($type=="contact") {            
            $this->loadViews(USER."jobseeker_contact", $this->global, $data, NULL,NULL);
        } else if($type=="skill") {
            $data['skill'] = $this->HWT->get_one_row("jobseeker_skill","*",array("jobseeker_id"=>$_SESSION[PREFIX.'id']));
            $this->loadViews(USER."jobseeker_skill", $this->global, $data, NULL,NULL);
        } else if($type=="jobalert") {
            $this->loadViews(USER."jobseeker_jobalert", $this->global, $data, NULL,NULL);
        } else if($type=="applied_job") {
            $this->loadViews(USER."jobseeker_applied_job", $this->global, $data, NULL,NULL);
        } else if($type=="shortlisted") {
            $this->loadViews(USER."jobseeker_shortlisted", $this->global, $data, NULL,NULL);
        } else if($type=="education") {

            $data['edu'] = $this->HWT->get_one_row("jobseeker_edu","*",array("jobseeker_id"=>$_SESSION[PREFIX.'id']));

            $this->loadViews(USER."jobseeker_education", $this->global, $data, NULL,NULL);
        } else if($type=="dashboard") {
            $this->loadViews(USER."jobseeker_dashboard", $this->global, $data, NULL,NULL);
        } else if($type=="other") {
            $data['other'] = $this->HWT->get_one_row("jobseeker_other","*",array("jobseeker_id"=>$_SESSION[PREFIX.'id']));
            $this->loadViews(USER."jobseeker_other", $this->global, $data, NULL,NULL);
        } else if($type=="change_password") {
            $this->loadViews(USER."jobseeker_password", $this->global, $data, NULL,NULL);
        } else if($type=="history") {
            $this->loadViews(USER."jobseeker_history", $this->global, $data, NULL,NULL);
        } 
    }

    function check_jobseeker () {
        if(isset( $_SESSION[PREFIX.'type'] ) && $_SESSION[PREFIX.'type'] == 'jobseeker') {
            return true;
        } else {
            $_SESSION['FAIL'] = "Unauthorization Found";
            redirect(base_url());
        }
    }

    function check_employer () {
        if(isset( $_SESSION[PREFIX.'type'] ) && $_SESSION[PREFIX.'type'] == 'employer') {
            return true;
        } else {
            $_SESSION['FAIL'] = "Unauthorization Found";
            redirect(base_url());
        }
    }


    public function employer( $type , $editid = '' ) {

        if($type!="employer_profile_view") {
            $this->check_employer();
        }
        $data = array();
        $this->global['pageTitle'] = 'employer';
        $data['active_menu'] = "employer";
        $data['active_menu'] = $type;
        
        $data['collection'] = $this->collection_data();
        $data['employer'] = $this->HWT->get_one_row("hwt_user","*",array("id"=>$_SESSION[PREFIX.'id'],"isDelete"=>0,"status"=>1));
        if($type=="profile") {
            $this->loadViews(USER."employer_profile", $this->global, $data, NULL,NULL);
        } else if($type=="postjob") {
            $data['edit'] = array();
            if(isset($editid) && $editid != '' ) {
                $job_res = $this->HWT->get_one_row("job","*",array("employer_id"=>$_SESSION[PREFIX.'id'],'isDelete'=>0, 'status'=>1 ));
                if( !empty($job_res) ) {
                    $data['edit'] = $job_res;
                }
            }
            
            $this->loadViews(USER."employer_postjob", $this->global, $data, NULL,NULL);
            
        } else if($type=="jobslisted") {
            $wh = array("isDelete"=>0,"status"=>1,"employer_id"=>$_SESSION[PREFIX.'id']);
            $tbl = array("job as job","hwt_user as u");
            $join = array('job.employer_id = u.id');
            $where_array = array(
                "job.isDelete"=>0,
                "job.status"=>1,
                "job.employer_id"=>$_SESSION[PREFIX.'id'],                
            );


            $data['jobs'] = $this->HWT->hwt_join_1(  $tbl,$join,$rows="*",$where_array,$param = array() );
           
            $this->loadViews(USER."employer_jobslisted", $this->global, $data, NULL,NULL);
        } else if($type=="jobalert") {
            $this->loadViews(USER."employer_jobalert", $this->global, $data, NULL,NULL);
        } else if($type=="shortlisted") {
            $this->loadViews(USER."employer_shortlisted", $this->global, $data, NULL,NULL);
        }  else if($type=="consultin") {
            $this->loadViews(USER."employer_consultin", $this->global, $data, NULL,NULL);
        }  else if($type=="change_password") {
            $this->loadViews(USER."employer_password", $this->global, $data, NULL,NULL);
        } else if($type=="applicants") {
            $data['job_view_id'] = "";
            if(isset($editid) && $editid != '' ) {
                $data['job_view_id'] = $editid;
            }
            $this->loadViews(USER."employer_applicants", $this->global, $data, NULL,NULL);
        } else if($type=="alertlist") {
            $data['job_view_id'] = "";
            if(isset($editid) && $editid != '' ) {
                $data['job_view_id'] = $editid;
            }
            $this->loadViews(USER."employer_alertlist", $this->global, $data, NULL,NULL);
        } else if($type=="employer_profile_view") {

            $data['employer'] = $this->HWT->get_one_row("hwt_user","*",array("id"=>$editid,"isDelete"=>0,"status"=>1));

            $this->loadViews(USER."employer_profile_view", $this->global, $data, NULL,NULL);
        } else if($type=="view_employer_jobs") {
            $data['employer_id'] = $editid;
           $this->loadViews(USER."view_employer_jobs", $this->global, $data, NULL,NULL);
        }
    }

    public function contact() {
        $data = array();
        $this->global['pageTitle'] = 'contact';
        $data['active_menu'] = "contact";
        $this->loadViews(USER."contact", $this->global, $data, NULL,NULL);
    }

    public function contact_send() {
		$post = $this->input->post();

       /*
        echo "<pre>";
        print_r($post);
        die();*/


        $this->form_validation->set_rules('fname', 'First Name', 'trim|required');
        $this->form_validation->set_rules('subject', 'Subject', 'trim|required');
        //$this->form_validation->set_rules('contact', 'contact Name', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required');
        // $this->form_validation->set_rules('lname', 'Last Name', 'trim|required');
		//$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('descr', 'Description ', 'trim|required');

        if ($this->form_validation->run()) {

        	$Data = array(
        		"fname" => $post['fname'],
                "subject" => $post['subject'],
        		"email" => $post['email'],
        		"descr" => $post['descr'],
        	);
        	$this->HWT->insert("inquiry",$Data);


        	$mail_data = array();
        	$sitesetting = $this->SiteSetting_model->getSiteSetting();
        	$mail_data['site_logo'] = $sitesetting[0]->site_logo;
        	$mail_data['site_name'] = $sitesetting[0]->site_name;
        	$mail_data['address'] = $sitesetting[0]->address;
        	$from_email = FROM_EMAIL;
        	$mail_data['user_name'] = $post['fname'];
        	$email = $post['email'];
        	$mail_data['email'] = $email;
        	$mail_data['descr'] = $post['descr'];
        	// $subject = $post['subject'];
        	$subject = $post['subject'];
        	$message = $this->load->view(USER.'mail_template/contact', $mail_data, TRUE);
            
        	$mail_data_send['to_email'] = FROM_EMAIL;
        	$mail_data_send['subject'] = $subject;
        	$mail_data_send['body'] = $message;
        	$mail_result = $this->HWT->hwt_send_mail($mail_data_send);

        	if($mail_result) {
        		$return['error'] = "Success";
        	} else {
        		$return['error'] = "NotAdded";
        	}
        	print json_encode($return);
        	exit;


        } else {
        	$error_messages = $this->form_validation->error_array();
        	$return['error'] = "ValidationError";
        	$return['error_msg'] = $error_messages;
        	print json_encode($return);
        	exit;
        }
	}

    public function register_process() {
        $post = $this->input->post();
        $dup = $this->HWT->get_one_row("hwt_user","*",array("email"=>$post['email']));
        if($dup['id']) {
            $error_messages = 'This email is already registered';
            $return['error'] = "Already";
            $return['error_msg'] = $error_messages;
            print json_encode($return);
            exit;
        }

    
        $type = $post['type'];


        $this->form_validation->set_rules('type', 'Missing', 'trim|required');
        $this->form_validation->set_rules('name', ' Name', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|is_unique[hwt_user.email]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        $this->form_validation->set_rules('mobile', 'Mobile', 'trim|required');
        if($type=='jobseeker') {
            $this->form_validation->set_rules('job_location', 'Job Location', 'trim|required');
            $this->form_validation->set_rules('exp_year', 'Year of Experience', 'trim|required');
            $this->form_validation->set_rules('exp_month', 'Month of Experience', 'trim|required');
        } else {
            $this->form_validation->set_rules('company_name', 'Company name', 'trim|required');
            $this->form_validation->set_rules('industry', 'Industry', 'trim|required');
            $this->form_validation->set_rules('job_function', 'Job', 'trim|required');
        }
       

        if ($this->form_validation->run()) {
            $rand = rand(9,999999);
            $Data = array(
                "type" => $post['type'],
                "fname" => $post['name'],
                "email" => $post['email'],
                "password" => md5($post['password']),
                "pass_txt" => $post['password'],
                "mobile" => $post['mobile'],

                "job_location" => isset($post['job_location']) ? $post['job_location'] : '',
                "exp_year" => isset($post['exp_year']) ? $post['exp_year'] : '',
                "exp_month" => isset($post['exp_month']) ? $post['exp_month'] : '',
                
                "company_name" => isset($post['company_name']) ? $post['company_name'] : '',
                "industry" => isset($post['industry']) ? $post['industry'] : '',
                "job_function" => isset($post['job_function']) ? $post['job_function'] : '',

                "status" => 0,
                "verify_string" => $rand,
            );
            $this->HWT->insert("hwt_user",$Data);

            
            $mail_data = array();
            $sitesetting = $this->SiteSetting_model->getSiteSetting();
            $mail_data['site_logo'] = $sitesetting[0]->site_logo;
            $mail_data['site_name'] = $sitesetting[0]->site_name;
            $mail_data['address'] = $sitesetting[0]->address;
            $from_email = FROM_EMAIL;
            $mail_data['user_name'] = $post['name'];
            $email = $post['email'];
            $mail_data['email'] = $email;
            $mail_data['url'] = base_url('confirm_registration/').base64_encode($email).'/'.$rand;
            $subject = "Registration Process";
            $message = $this->load->view(USER.'mail_template/registration_mail', $mail_data, TRUE);
            $mail_data_send['to_email'] = $email;
            $mail_data_send['subject'] = $subject;
            $mail_data_send['body'] = $message;
            $mail_result = $this->HWT->hwt_send_mail($mail_data_send);

            if($mail_result) {
                $return['result'] = "success";
            } else {
                $return['result'] = "NotAdded";
            }
            print json_encode($return);
            exit;
        } else {
            $error_messages = $this->form_validation->error_array();
            $return['result'] = "ValidationError";
            $return['error_msg'] = $error_messages;
            print json_encode($return);
            exit;
        }
    }

    public function confirm_registration ( $mail , $rand  ) {
        if($mail!='') {
            $res = $this->HWT->get_one_row("hwt_user","*",array("email"=>base64_decode($mail),"verify_string"=>$rand));

            if($res['verify_string']!="") {

                if($res['status']==1) {
                    $_SESSION['SUCCESS'] = "Your email is already confirmed";
                } else {
                    $data = array(
                        "status"=>1,
                        "verify_string"=>"",
                    );
                    $this->HWT->update("hwt_user",$data,array("email"=>base64_decode($mail)));
                    $_SESSION['SUCCESS'] = "Email verification is Successfully complete";
                }
            } else {
                $_SESSION['FAIL'] = "Email verification is pending. Please confirm your email..!";
            }
        } else {
            $_SESSION['FAIL'] = "Something Went Wrong..!";
        }
        redirect(base_url('login/'));
        die();
    }

    public function login_process() {
        $post = $this->input->post();

        $dup = $this->HWT->get_one_row("hwt_user","*",array("email"=>$post['email'],"password"=>md5($post['password'])));
        
        if(empty($dup)) {
            $return['error'] = "not_in";
            $return['error_msg'] = 'Your Email is not registered with us';
            print json_encode($return);
            exit;
        } else {
            if($dup['status']!="0") {
                $_SESSION[PREFIX.'id'] = $dup['id'];
                $_SESSION[PREFIX.'name'] = $dup['fname'];
                $_SESSION[PREFIX.'type'] = $dup['type'];
                $_SESSION[PREFIX.'email'] = $dup['email'];
                $error_messages = 'Login Successfully';
                $return['error'] = "success";
                $return['type'] = $dup['type'];
                $return['error_msg'] = $error_messages;
                print json_encode($return);
                exit;
            } else {
                $error_messages = 'Email Verification is Pending';
                $return['error'] = "verification";
                $return['error_msg'] = $error_messages;
                print json_encode($return);
                exit;
            }
        }
    }

    function logout() {
        unset($_SESSION[PREFIX.'id']);
        unset($_SESSION[PREFIX.'name']);
        unset($_SESSION[PREFIX.'fname']);
        unset($_SESSION[PREFIX.'type']);
        $this->session->sess_destroy();
        $_SESSION['SUCCESS'] = "Logout Successfully";
        redirect(base_url());
    }
    function check_session( ) {
        if(isset($_SESSION[PREFIX.'id']) && !empty($_SESSION[PREFIX.'id'])) {
            $_SESSION['FAIL'] ="Something Went Wrong..!";
            redirect(base_url());
            die();
        } else {
            return true;
        }

    }

    function forgot_password() {
        $this->check_session();
        $data = array();
        $this->global['pageTitle'] = 'forgot_password';
        $data['active_menu'] = "forgot_password";
        $this->loadViews(USER."forgot_password", $this->global, $data, NULL,NULL);
    }

    public function forgot_process() {
        $post = $this->input->post();
        $dup = $this->HWT->get_one_row("hwt_user","*",array("email"=>$post['email']));
        if($dup['id']) {
            $rand = rand(9,999999);

            $data_update = array(
                "verify_string"=>$rand,
            );
            $this->HWT->update("hwt_user",$data_update,array("email"=>$post['email']));

            $mail_data = array();
            $sitesetting = $this->SiteSetting_model->getSiteSetting();
            $mail_data['site_logo'] = $sitesetting[0]->site_logo;
            $mail_data['site_name'] = $sitesetting[0]->site_name;
            $mail_data['address'] = $sitesetting[0]->address;
            $from_email = FROM_EMAIL;
            $mail_data['user_name'] = $dup['fname'];
            $email = $dup['email'];
            $mail_data['email'] = $email;
            $mail_data['url'] = base_url('set-new-password/').base64_encode($email).'/'.$rand;
            $subject = "Reset Password";
            echo $message = $this->load->view(USER.'mail_template/forgot_mail', $mail_data, TRUE);
            die();
            $mail_data_send['to_email'] = $email;
            $mail_data_send['subject'] = $subject;
            $mail_data_send['body'] = $message;
            $mail_result = $this->HWT->hwt_send_mail($mail_data_send);

            if($mail_result) {
                $return['error'] = "Success";
                $return['error_msg'] = "Mail Send Successfully";
            } else {
                $return['error'] = "NotAdded";
                $return['error_msg'] = "Something Went Wrong..!";
            }
            print json_encode($return);
            exit;
        } else {
            $error_messages = 'This email is not registered with us';
            $return['error'] = "not_registered";
            $return['error_msg'] = $error_messages;
            print json_encode($return);
            exit;
        }

    }

    function set_new_password( $email, $rand ) {
        $check = $this->HWT->get_one_row("hwt_user","*",array("email"=>base64_decode($email),"verify_string"=>$rand));
        if($check['id']) {
            $this->check_session();
            $data = array();
            $this->global['pageTitle'] = 'set_new_password';
            $data['active_menu'] = "set_new_password";
            $data['email'] = $email;
            $data['verify_string'] = $rand;
            $this->loadViews(USER."set_new_password", $this->global, $data, NULL,NULL);
        } else {
            $_SESSION['FAIL'] = "Something Went Wrong";
            redirect(base_url());
        }
    }

    function set_new_password_process() {
        $post = $this->input->post();

        $dup = $this->HWT->get_one_row("hwt_user","*",array("email"=>$post['email'],"verify_string"=>$post['verify_string']));
        if($dup['status']!="0") {
            
            $data_update = array(
                "password"=>md5($post['password']),
                "pass_txt"=>$post['password'],
                "verify_string"=>'',
            );
            $res = $this->HWT->update("hwt_user",$data_update,array("email"=>base64_decode($post['email']),"verify_string"=>$post['verify_string']));
            if($res) {
                $error_messages = 'New Password Successfully';
                $return['error'] = "success";
                $return['error_msg'] = $error_messages;
                print json_encode($return);
                exit;
            } else {
                $error_messages = 'Something Went Wrong';
                $return['error'] = "wrong";
                $return['error_msg'] = $error_messages;
                print json_encode($return);
                exit; 
            }

        } else {
            $error_messages = 'Verification is Pending';
            $return['error'] = "wrong";
            $return['error_msg'] = $error_messages;
            print json_encode($return);
            exit;
        }
    }


    public function job_list( $data = "" ) {
        
        $post = $this->input->get();
        
        $data = array();
        $data['search'] = $post;
        $this->global['pageTitle'] = 'job_list';
        $data['active_menu'] = "job_list";
        
        $data['collection'] = $this->collection_data();
        
        $wh = array("isDelete"=>0,"status"=>1,"employer_id"=>$_SESSION[PREFIX.'id']);
        $tbl = array("job as job","hwt_user as u");
        $join = array('job.employer_id = u.id');
        $where_array = array(
            "job.isDelete"=>0,
            "job.status"=>1,
            "job.employer_id"=>$_SESSION[PREFIX.'id'],                
        );


        $data['jobs'] = $this->HWT->hwt_join_1(  $tbl,$join,$rows="*",$where_array,$param = array() );
        
        $this->loadViews(USER."job_list", $this->global, $data, NULL,NULL);
    }

    public function view_job( $job_id ) {

        $data = array();
        $this->global['pageTitle'] = 'view_job';
        $data['active_menu'] = "view_job";
        
        $data['collection'] = $this->collection_data();
        
        $tbl = array("job as job","hwt_user as u");
        $join = array('job.employer_id = u.id');
        $where_array = array(
            "job.isDelete"=>0,
            "job.status"=>1,
            "job.job_id"=>$job_id,
        );


        /* shortlist */
        $res_shorlist =$this->HWT->hwt_idin("hwt_user","*",array("id"=>$_SESSION[PREFIX.'id']),"shortlist",$job_id);
        $data['shortlist_active'] = ($res_shorlist) ? 'shortlist_active': '';
        /* shortlist */

        



        $result = $this->HWT->hwt_join_1(  $tbl,$join,$rows="*",$where_array,$param = array() );
        $data['jobs'] = $result[0];
        $this->loadViews(USER."view_job", $this->global, $data, NULL,NULL);
    }

    public function view_jobseeker( $id ) {
        $data = array();
        $this->global['pageTitle'] = '';
        $data['collection'] = $this->collection_data();
        $data['active_menu'] = "";
        $data['jobseeker_data'] = $this->HWT->get_one_row("hwt_user","*",array("id"=>$id));
        $data['skill'] = $this->HWT->get_one_row("jobseeker_skill","*",array("jobseeker_id"=>$id));
        $this->loadViews(USER."view_jobseeker", $this->global, $data, NULL,NULL);        
    }

    public function apply_without_registration( $job_id ) {

         $data = array();
        $this->global['pageTitle'] = 'view_job';
        $data['active_menu'] = "view_job";
        
        $data['collection'] = $this->collection_data();
        
        $tbl = array("job as job","hwt_user as u");
        $join = array('job.employer_id = u.id');
        $where_array = array(
            "job.isDelete"=>0,
            "job.status"=>1,
            "job.job_id"=>$job_id,
        );

        $result = $this->HWT->hwt_join_1(  $tbl,$join,$rows="*",$where_array,$param = array() );
        $data['jobs'] = $result[0];
        $data['job_id'] = $job_id;
        $this->loadViews(USER."apply_job_without_registration", $this->global, $data, NULL,NULL); 
    }

    public function subscription() {
        $post = $this->input->post();
        $response = array();

        $email = $post['news_email'];

        $res = $this->HWT->get_column("newsletter","title",array("isDelete"=>0,"title"=>$email));
        
        if($res=='') {
            $DataInsert = array(
                "title" => $email
            );
            $this->HWT->insert("newsletter",$DataInsert);
            $response['result'] = true;
            $response['message'] = "subscription Successfully";
        } else {
            $response['result'] = false;
            $response['message'] = "this email is already subscribe";
        }
        echo json_encode($response);
        die();
    } 


}
