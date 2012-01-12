<?php
class TaskController extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$dsn = 'mysql://root:root@localhost/aslGroupProject';
		$this->load->database($dsn);
		$this->load->model('TaskModel');
		$this->load->helper('url');

	}
	
	public function getTask()
	{
		
	}
	
	public function createTask()
	{
		
		$task = $this->input->post('task');
		$assigned = $this->input->post('assigned');
		$dueDate = $this->input->post('dueDate');


		$data = array(
				'task' => $task,
				'assigned_id' => $assigned,
				'duedate' => $dueDate,
				'project_id' => $this->session->userdata('projectID')

			);
		
		
		$this->load->model('TaskModel');
		$this->TaskModel->createTask($data);
		
		redirect('projectController/viewTask/'.$this->session->userdata('projectID'), 'refresh');

		
		//needs project id
		//$query = $this->TaskModel->getAllTaskByProjectId();
				
		//$data['list'] = $query;
		//$this->load->view('project/taskList', $data);
	}

	public function deleteTask()
	{
		$id = $this->input->post('id');
		$this->load->model('TaskModel');
		$this->TaskModel->deleteTask($id);

		redirect('projectController/viewTask/'.$this->session->userdata('projectID'), 'refresh');
	}

	public function updateTask()
	{
		
	}


}
	