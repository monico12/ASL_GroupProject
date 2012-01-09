<?php
class UserController extends CI_Controller {

	public function index()
	{
		$dsn = 'mysql://root:root@localhost/aslGroupProject';
		$this->load->database($dsn);
		
		
		$this->load->model('UserModel');
		//$test = $this->UserModel->getUser('admin');
		$this->load->view('header');

				
		
	}
	
	public function login()
	{
		
		$username = $this->input->post('username'); 
		$password = $this->input->post('password');
		//$enpassword = md5($password);
		$this->UserModel->getUser($username, $password);
		
		echo "This is working!";
		
	        //$this->session->set_userdata('username',$loggedUser);

		
	}
	
	public function logout()
	{
		$this->session->sess_destroy();

	}

}
?>