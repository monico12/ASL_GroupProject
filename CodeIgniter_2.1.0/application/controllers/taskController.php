<?php
class TaskController extends CI_Controller {
	public function index()
	{
		
	}

	public function createTask()
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
		
		$data['list'] = $query;
		$this->load->view('project/projectList', $data);
	}
}
	