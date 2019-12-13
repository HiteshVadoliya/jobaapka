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
        $data['hwt_testimonial'] = $this->HWT->get_result("testimonial","*",$wh);
        $this->loadViews(USER."home", $this->global, $data, NULL,NULL);
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
        $this->global['pageTitle'] = 'signup';
        $data['active_menu'] = "signup";
        $data['signup_type'] = $type;
        $this->loadViews(USER."signup", $this->global, $data, NULL,NULL);
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
      $this->check_session();
      $data = array();
      $this->global['pageTitle'] = 'login';
      $data['active_menu'] = "login";
      $this->loadViews(USER."login", $this->global, $data, NULL,NULL);
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
        $data = array();
        $this->global['pageTitle'] = 'jobseeker';
        $data['active_menu'] = "jobseeker";
        $data['active_menu'] = $type;
        // $data['hwt_about'] = $this->HWT->get_one_row("about","*",array("id"=>1));
        if($type=="profile") {
            $this->loadViews(USER."jobseeker_profile", $this->global, $data, NULL,NULL);
        } else if($type=="contact") {
            $this->loadViews(USER."jobseeker_contact", $this->global, $data, NULL,NULL);
        } else if($type=="skill") {
            $this->loadViews(USER."jobseeker_skill", $this->global, $data, NULL,NULL);
        } else if($type=="jobalert") {
            $this->loadViews(USER."jobseeker_jobalert", $this->global, $data, NULL,NULL);
        } else if($type=="applied_job") {
            $this->loadViews(USER."jobseeker_applied_job", $this->global, $data, NULL,NULL);
        } else if($type=="shortlisted") {
            $this->loadViews(USER."jobseeker_shortlisted", $this->global, $data, NULL,NULL);
        } else if($type=="education") {
            $this->loadViews(USER."jobseeker_education", $this->global, $data, NULL,NULL);
        } else if($type=="dashboard") {
            $this->loadViews(USER."jobseeker_dashboard", $this->global, $data, NULL,NULL);
        } else if($type=="other") {
            $this->loadViews(USER."jobseeker_other", $this->global, $data, NULL,NULL);
        } 
    }


    public function employer( $type ) {
        $data = array();
        $this->global['pageTitle'] = 'employer';
        $data['active_menu'] = "employer";
        $data['active_menu'] = $type;
        // $data['hwt_about'] = $this->HWT->get_one_row("about","*",array("id"=>1));
        if($type=="profile") {
            $this->loadViews(USER."employer_profile", $this->global, $data, NULL,NULL);
        } else if($type=="postjob") {
            $this->loadViews(USER."employer_postjob", $this->global, $data, NULL,NULL);
        } else if($type=="jobslisted") {
            $this->loadViews(USER."employer_jobslisted", $this->global, $data, NULL,NULL);
        } else if($type=="jobalert") {
            $this->loadViews(USER."employer_jobalert", $this->global, $data, NULL,NULL);
        } else if($type=="shortlisted") {
            $this->loadViews(USER."employer_shortlisted", $this->global, $data, NULL,NULL);
        }  else if($type=="consultin") {
            $this->loadViews(USER."employer_consultin", $this->global, $data, NULL,NULL);
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

    
        /*

        <pre>Array
        (
            [type] => employer
            [company_name] => test
            [name] => Hitesh
            [email] => hmvadoliya.iipl2013@gmail.com
            [password] => asdf
            [c_password] => asdf
            [mobile] => asdf
            [industry] => Company industry
            [job_function] => Current job function
        )
        */
        
       
        /*echo "<pre>";
        print_r($post);
        die();*/

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
                    $_SESSION['SUCCESS'] = "Email verification is success";
                }
            } else {
                $_SESSION['FAIL'] = "You are already Verified..!";
            }
        } else {
            $_SESSION['FAIL'] = "Something Went Wrong..!";
        }
        redirect(base_url());
        die();
    }

    public function login_process() {
        $post = $this->input->post();

        $dup = $this->HWT->get_one_row("hwt_user","*",array("email"=>$post['email'],"password"=>md5($post['password'])));
        if($dup['status']!="0") {
            $_SESSION[PREFIX.'id'] = $dup['id'];
            $_SESSION[PREFIX.'name'] = $dup['fname'];
            $_SESSION[PREFIX.'type'] = $dup['type'];
            $_SESSION[PREFIX.'email'] = $dup['email'];
            $error_messages = 'Login Successfully';
            $return['error'] = "success";
            $return['error_msg'] = $error_messages;
            print json_encode($return);
            exit;
        } else {
            $error_messages = 'Verification is Pending';
            $return['error'] = "verification";
            $return['error_msg'] = $error_messages;
            print json_encode($return);
            exit;
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


}
