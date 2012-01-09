<?php
class UserController extends CI_Controller {

	public function index()
	{
				
		
	}
	
	public function login()
	{
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->helper('array');

		
		$username = $this->input->post('username'); 
		$password = $this->input->post('password');
		//$enpassword = md5($password);
		
		$dsn = 'mysql://root:root@localhost/aslGroupProject';
		$this->load->database($dsn);
		
		$this->load->model('UserModel');
		
		$q = $this->UserModel->getUser($username, $password);
		
		if ($q->num_rows() > 0) {
			
			$loggedUser = $q->row()->username;
			
			$this->session->set_userdata('username',$loggedUser);
			
			$data['welcome'] = "Welcome $loggedUser";
			$this->load->view('templates/userHeader', $data);
		}else{
			$data["error"] = "Wrong Username and Password";
			redirect('', 'refresh');			
		}
		
	}
	
	public function logout()
	{
		$this->load->helper('url');
		$this->load->library('session');
		redirect('', 'refresh');

		$this->session->sess_destroy();
	}

}
?>