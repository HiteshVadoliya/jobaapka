<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/libraries/FrontController.php';
class Home extends FrontController {

	public function index()
	{
		$data = array();
		$this->global['pageTitle'] = 'Home';
		$data['active_menu'] = "home";
		$this->loadViews(USER."home", $this->global, $data, NULL,NULL);
	}

    public function choose_signup() {
        $data = array();
        $this->global['pageTitle'] = 'choose_signup';
        $data['active_menu'] = "signup";
        $this->loadViews(USER."choose_signup", $this->global, $data, NULL,NULL);
    }
    public function signup( $type = 'jobseeker' ) {
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
        $this->loadViews(USER."policy", $this->global, $data, NULL,NULL);
    }
    public function terms( ) {
        $data = array();
        $this->global['pageTitle'] = 'terms';
        $data['active_menu'] = "terms";
        $this->loadViews(USER."terms", $this->global, $data, NULL,NULL);
    }

    public function login() {
       $data = array();
      $this->global['pageTitle'] = 'login';
      $data['active_menu'] = "login";
      $this->loadViews(USER."login", $this->global, $data, NULL,NULL);
    }

    public function about() {
        $data = array();
        $this->global['pageTitle'] = 'About';
        $data['active_menu'] = "about";
        $data['hwt_about'] = $this->HWT->get_one_row("about","*",array("id"=>1));
        $this->loadViews(USER."about", $this->global, $data, NULL,NULL);
    }

    public function whyus() {
        $data = array();
        $this->global['pageTitle'] = 'whyus';
        $data['active_menu'] = "whyus";
        // $data['hwt_about'] = $this->HWT->get_one_row("about","*",array("id"=>1));
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

        /*echo "<pre>";
        print_r($post);
        die();*/


        $this->form_validation->set_rules('fname', 'First Name', 'trim|required');
        $this->form_validation->set_rules('contact', 'contact Name', 'trim|required');
        // $this->form_validation->set_rules('lname', 'Last Name', 'trim|required');
		//$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('message', 'Message ', 'trim|required');

        if ($this->form_validation->run()) {

        	$Data = array(
        		"fname" => $post['fname'],
                "contact" => $post['contact'],
        		// "lname" => $post['lname'],
        		"email" => $post['email'],
        		"descr" => $post['message'],
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
        	$mail_data['descr'] = $post['message'];
        	// $subject = $post['subject'];
        	$subject = 'Inquiry Form';
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
}
