<?php
class ProjectController extends CI_Controller {

	function __construct()
    {

        parent::__construct();
        $this->load->helper('url');
    	$loggedUser = $this->session->userdata('username');
		$data['welcome'] = "Welcome $loggedUser";
		$this->load->view('templates/header');
		$this->load->view('templates/userHeader', $data);    
    }

	public function index()
	{
		//$this->load->model('ProjectModel');
		//$this->load->view('project/projectForm');
		//$this->load->view()	
	}

	public function createProject()
	{
		$title = $this->input->post('title'); 
		$description = $this->input->post('description');

		$data = array(
				'title' => $title,
				'description' => $description,
				'user_id' => $this->session->userdata('userID')
			);
			$userID = $this->session->userdata('userID');
			echo "works";
		$dsn = 'mysql://root:root@localhost/aslGroupProject';
		$this->load->database($dsn);
		
		$this->load->model('ProjectModel');
		$this->ProjectModel->createProject($data);

		$query = $this->ProjectModel->getProjectsByUserId($userID);
		
		$data['list'] = $query;
		$this->load->view('project/projectList', $data);
	}

	public function deleteProject()
	{
		$this->load->helper('url');
		$id = $this->input->post('id');

		//$dsn = 'mysql://root:root@localhost/aslGroupProject';
		//$this->load->database($dsn);

		$this->load->model('ProjectModel');
		$this->ProjectModel->deleteProject($id);

		//$query = $this->ProjectModel->getProjectsByUserId(1);
		
		//$data['list'] = $query;
		//$this->load->view('project/projectList', $data);
		//redirect('/projectController/createProject/', 'refresh');
	}

	public function updateProject()
	{
		
	}

}
?>