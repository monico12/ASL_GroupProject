<?php
class UserController extends CI_Controller {

	public function index()
	{
		$this->load->view('landing/landing');
		$dsn = 'mysql://root:root@localhost/aslGroupProject';
		$this->load->database($dsn);
	}

}
?>