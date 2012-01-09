<?php
class UserController extends CI_Controller {

	public function index()
	{
				
		
	}
	
	public function login()
	{
		$this->load->helper('url');
		$this->load->helper('array');

		
		$username = $this->input->post('username'); 
		$password = $this->input->post('password');
		//$enpassword = md5($password);
		
		$dsn = 'mysql://root:root@localhost/aslGroupProject';
		$this->load->database($dsn);
		
		$this->load->model('UserModel');
		
		$q = $this->UserModel->getUser($username, $password);
		
		if($q->num_rows() > 0) {
			
			$loggedUser = $q->row()->username;
			$loggedUserId = $q->row()->id;

			$this->session->set_userdata('username',$loggedUser);
			$this->session->set_userdata('userID', $loggedUserId);
			
			$userdata['welcome'] = "Welcome $loggedUser";
			
			$this->load->view('templates/userHeader', $data);
			//$this->load->view('templates/projectPanel', $loggedUserId);
		}else{
			
			$this->session->set_userdata('error', true);
			
			redirect('', 'refresh');			
		}
	}
	
	public function logout()
	{
		$this->load->helper('url');
		$this->session->set_userdata('error', false);

		redirect('', 'refresh');


		$this->session->sess_destroy();
	}

}
?>