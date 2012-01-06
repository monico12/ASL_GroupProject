<?php
class UserController extends CI_Controller {

	public function index()
	{
		$dsn = 'mysql://root:root@localhost/aslGroupProject';
		$this->load->database($dsn);
		
		
		$this->load->model('UserModel');
		$test = $this->UserModel->getUser('admin');
				
		
	}

}
?>