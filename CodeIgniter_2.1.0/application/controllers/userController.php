<?php
class UserController extends CI_Controller {

	function __construct()
    {

        parent::__construct();
        $dsn = 'mysql://root:root@localhost/aslGroupProject';
		$this->load->database($dsn);
        $this->load->model('UserModel');
        $this->load->helper('url');
        $this->load->helper('array');


    	    
    }

	public function index()
	{
			
	}
	
	public function signup()
	{
		
		$firstname = $this->input->post('firstname');
		$lastname = $this->input->post('lastname');
		$email = $this->input->post('email');
		$username = $this->input->post('username'); 
		$password = $this->input->post('password');
		$repassword = $this->input->post('repassword');
		//$enpassword = md5($password);

		$userData = array(
				'username' => $username,
				'password' => $password,
				'email' => $email,
				'first_name' => $firstname,
				'last_name' => $lastname
			);

		$this->load->library('form_validation');

		$this->form_validation->set_rules('firstname', 'First Name', 'required|alpha|min_length[2]|max_length[20]');
		$this->form_validation->set_rules('lastname', 'Last Name', 'required|alpha|min_length[2]|max_length[20]');
		$this->form_validation->set_rules('username', 'Username', 'required|alpha_dash|min_length[3]|max_length[20]|is_unique[users.username]');
		$this->form_validation->set_rules('password', 'Password', 'required|matches[repassword]');
		$this->form_validation->set_rules('repassword', 'Password Confirmation', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
		
		if($this->form_validation->run() == TRUE)
		{
			$this->UserModel->createUser($userData);
			
			$q = $this->UserModel->getUser($username, $password);
		
			if($q->num_rows() > 0) {
			
				$loggedUser = $q->row()->username;
				$loggedUserId = $q->row()->id;

				$this->session->set_userdata('username',$loggedUser);
				$this->session->set_userdata('userID', $loggedUserId);
				$this->session->set_userdata('loggedin', true);
			
				redirect('projectController/viewProjects');
			}
		}
		else
		{
			$this->session->set_userdata('error', true);
			redirect('', 'refresh');
		}

		/*if($password == $repassword)
		{
			$this->UserModel->createUser($userData);
			
			$q = $this->UserModel->getUser($username, $password);
		
			if($q->num_rows() > 0) {
			
				$loggedUser = $q->row()->username;
				$loggedUserId = $q->row()->id;

				$this->session->set_userdata('username',$loggedUser);
				$this->session->set_userdata('userID', $loggedUserId);
				$this->session->set_userdata('loggedin', true);
			
				redirect('projectController/viewProjects');
			}
		}
		else
		{
			$this->session->set_userdata('error', true);
			redirect('', 'refresh');
		}*/

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
		
		$this->load->library('form_validation');

		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if($this->form_validation->run() == TRUE)
		{
			if($q->num_rows() > 0) {
				$loggedUser = $q->row()->username;
				$loggedUserId = $q->row()->id;
				$gooduser = TRUE;

				$this->session->set_userdata('username',$loggedUser);
				$this->session->set_userdata('userID', $loggedUserId);
				$this->session->set_userdata('gooduser', true);
				
				
				//echo $this->session->userdata('gooduser');
				redirect('projectController/checkLogin');
			}
			
		}else{
				$this->session->set_userdata('error', true);
				$this->session->se_userdata('gooduser', false);
				redirect('', 'refresh');
			}
		
	}
	
	public function logout()
	{
		$this->load->helper('url');
		$this->session->set_userdata('error', false);
		$this->session->set_userdata('gooduser', false);
		
				
		$this->session->sess_destroy();
		redirect('', 'refresh');


	}
	



}
?>