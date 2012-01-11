<?php
class TaskController extends CI_Controller {
	public function index()
	{
		
	}

	public function createTask()
	{
		$task = $this->input->post('task'); 
		$assigned = $this->input->post('assigned');
		$dueDate = $this->input->post('dueDate');

		$data = array(
				'task' => $task,
				'assigned' => $assigned,
				'dueDate' => $dueDate,

			);
		$dsn = 'mysql://root:root@localhost/aslGroupProject';
		$this->load->database($dsn);
		
		$this->load->model('TaskModel');
		$this->TaskModel->createTask($data);
		
		//needs project id
		//$query = $this->TaskModel->getAllTaskByProjectId();
				
		//$data['list'] = $query;
		//$this->load->view('project/taskList', $data);
	}

	public function deleteTask()
	{
		
	}

	public function updateTask()
	{
		
	}
}
	