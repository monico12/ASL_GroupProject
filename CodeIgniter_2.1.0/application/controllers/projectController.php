<?php
class ProjectController extends CI_Controller {

	function __construct()
    {

        parent::__construct();
        $dsn = 'mysql://root:root@localhost/aslGroupProject';
		$this->load->database($dsn);
        $this->load->model('ProjectModel');
        $this->load->helper('url');
    	$loggedUser = $this->session->userdata('username');
		$data['welcome'] = "Welcome $loggedUser!";
		$this->load->view('templates/header');
		$this->load->view('templates/userHeader', $data);    
    }

	public function projectForm()
	{
		$this->viewProjects();
		$this->load->model('UserModel');
		$q =  $this->UserModel->getAll();

		//echo $q->result();
		
		$result = $q->result();
		
		//var_dump($result);
		
		foreach($q->result() as $r)
		{
			//echo $r->id;
			//echo $r->username;
			//$array = array($r->username);
		};
		
		//var_dump($array);
		
	
		
		
		
		$data["membersList"] = $result;
		
		
		$this->load->view('project/projectForm', $data);
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

		$this->load->library('form_validation');

		$this->form_validation->set_rules('title', 'Title', 'alpha_numeric|min_length[3]|max_length[20]');
		$this->form_validation->set_rules('description', 'Description', 'alpha_numeric|min_length[3]|max_length[50]');

		if($this->form_validation->run() == TRUE)
		{
			//echo "works";
			$this->ProjectModel->createProject($data);
		
			redirect('projectController/viewProjects', 'refresh');
		}
		else{
			//echo "doesnt";
			redirect('projectController/viewProjects', 'refresh');	
		}

	}

	public function addMembers()
	{
	
	}

	public function deleteProject()
	{
		/*$this->load->helper('url');
		$id = $this->input->post('id');
		echo $id;
		

		$this->load->model('ProjectModel');
		$this->ProjectModel->deleteProject($id);

		//$query = $this->ProjectModel->getProjectsByUserId(1);
		
		//$data['list'] = $query;
		//$this->load->view('project/projectList', $data);
		//redirect('/projectController/createProject/', 'refresh');*/
		
		$id = $this->input->post('id');

		$this->load->model('ProjectModel');
		$this->ProjectModel->deleteProject($id);

		redirect('projectController/viewProjects', 'refresh');
	}

	public function updateProject()
	{
		
	}

	public function viewProjects()
	{
		$userID = $this->session->userdata('userID');
		$query = $this->ProjectModel->getProjectsByUserId($userID);
		
		$data['list'] = $query;
		
		$this->session->set_userdata('projectList', $data);
		
		$this->load->view('project/projectList', $this->session->userdata('projectList'));
		
		$this->checkLogin();
	}

	public function viewTask()
	{
		$this->viewProjects();
		$projectId = $this->uri->segment(3);
		$this->session->set_userdata('projectID', $projectId);
		
		$this->load->model('ProjectModel');
		
		$descquery = $this->ProjectModel->getProject($this->session->userdata('projectID'));
		
		$this->load->model('TaskModel');
		$query = $this->TaskModel->getAllTaskByProjectId($projectId);

		//echo $query->result();
		//var_dump($query->result());
		
		$data = array('id' => $query->result(), 'desc' => $descquery->result());
		
		$this->load->view('project/taskList', $data);
	}

	public function updateTask()
	{
		$this->viewProjects();
		$id = $this->input->post('id');
		$this->load->model('TaskModel');
		$query = $this->TaskModel->getTaskById($id);

		$data['query'] = $query;
		$this->load->view('templates/updateForm', $data);

	}
	
	public function addTaskForm()
	{
		$this->viewProjects();

		$this->load->view('project/taskForm');
		//$this->viewTask();
	}
	
	public function checkLogin()
	{
		
		if($this->session->userdata('gooduser') == true){
			
			//echo "Good User";
			//$this->viewProjects();
		
		}else{
			//echo "Bad User";
			redirect('', 'refresh');
		}
	}

}
?>