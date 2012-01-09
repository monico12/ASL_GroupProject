<?php
class ProjectController extends CI_Controller {

	public function index()
	{
		
		$this->load->model('ProjectModel');
		$this->load->view('project/projectForm');		
	}

	public function createProject()
	{
		$title = $this->input->post('title'); 
		$description = $this->input->post('description');

		$data = array(
				'title' => $title,
				'description' => $description,
				'user_id' => 1
			);
		$dsn = 'mysql://root:root@localhost/aslGroupProject';
		$this->load->database($dsn);
		
		$this->load->model('ProjectModel');
		$this->ProjectModel->createProject($data);

		$query = $this->ProjectModel->getProjectsByUserId(1);
		//echo $query;
		
		$this->load->view('project/projectList', $query);
	}

}
?>