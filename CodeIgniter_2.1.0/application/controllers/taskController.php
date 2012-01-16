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
		$this->load->library('form_validation');

		//$this->form_validation->set_rules('task', 'Task', 'alpha_numeric|min_length[3]|max_length[20]');
		//$this->form_validation->set_rules('assigned', 'Assigned', 'alpha_numeric|min_length[3]|max_length[50]');
		//$this->form_validation->set_rules('date', 'Date', 'required');
		
		//if($this->form_validation->run() == TRUE)
		if($this->input->post('task') != '' && $this->input->post('assigned')!= '')
		{
			$task = $this->input->post('task');
			$assigned = $this->input->post('assigned');
			$dueDate = $this->input->post('duedate');

			$data = array(
				'task' => $task,
				'assigned' => $assigned,
				'duedate' => $dueDate,
				'project_id' => $this->session->userdata('projectID')

			);

			$this->load->model('TaskModel');
			$this->TaskModel->createTask($data);
			
			redirect('projectController/viewTask/'.$this->session->userdata('projectID'), 'refresh');
		}else{
			redirect('projectController/viewTask/'.$this->session->userdata('projectID'), 'refresh');
		}
		
		//needs project id
		//$query = $this->TaskModel->getAllTaskByProjectId();
				
		//$data['list'] = $query;
		//$this->load->view('project/taskList', $data);
	}

	public function deleteTask()
	{
		$id = $this->uri->segment(3);
		//echo $id;
		$this->load->model('TaskModel');
		$this->TaskModel->deleteTask($id);
		
		redirect('projectController/viewTask/'.$this->session->userdata('projectID'), 'refresh');
	}

	public function updateTask()
	{

		$task = $this->input->post('task');
		$assigned = $this->input->post('assigned');
		$dueDate = $this->input->post('duedate');
		$id = $this->input->post('id');
		
		$data = array(
				'task' => $task,
				'assigned' => $assigned,
				'duedate' => $dueDate,
				'id' => $id

			);
		$this->load->model('TaskModel');
		$this->TaskModel->updateTask($data);
		redirect('projectController/viewTask/'.$this->session->userdata('projectID'), 'refresh');
		//echo $id;


		//$data = array(
		//		'task' => $task,
		//		'assigned' => $assigned,
		//		'duedate' => $dueDate,
		//		'id' => $id

		//	);

		

	}


}
	