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
		$data['welcome'] = "Welcome $loggedUser";
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
		
		var_dump($result);
		
		foreach($q->result() as $r)
		{
			//echo $r->id;
			//echo $r->username;
			//$array = array($r->username);
		};
		
		//var_dump($array);
		
		$options["test"] = array(
                  'small'  => 'Small Shirt',
                  'med'    => 'Medium Shirt',
                  'large'   => 'Large Shirt',
                  'xlarge' => 'Extra Large Shirt',
                );
		
		
		
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
		$this->ProjectModel->createProject($data);
		
		redirect('projectController/viewProjects', 'refresh');

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
		$this->load->view('project/projectList', $data);
	}

	public function viewTask()
	{

		$this->viewProjects();
		$projectId = $this->uri->segment(3);

		$this->load->model('TaskModel');
		$query = $this->TaskModel->getAllTaskByProjectId($projectId);

		//echo $query->result();
		var_dump($query->result());
		
		$data['id'] = $query->result();

		$this->load->view('project/taskList', $data);
	}

}
?>