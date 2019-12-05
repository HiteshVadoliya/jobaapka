<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/libraries/FrontController.php';
class Workshop extends FrontController {

	public function index()
	{
		$data = array();
		$this->global['pageTitle'] = 'Workshop';
		$data['active_menu'] = "workshop";
                $data['hwt_workshop'] = $this->HWT->get_result("workshop","*",array("isDelete"=>0,"status"=>1));
                $data['hwt_workshop_slider'] = $this->HWT->get_result("workshop_slider","*",array("isDelete"=>0,"status"=>1));
		$this->loadViews(USER."workshop", $this->global, $data, NULL,NULL);
	}
}
