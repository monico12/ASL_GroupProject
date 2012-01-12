<?php

class TaskModel extends CI_Model {

	//constructor
    function __construct()
    {
        parent::__construct();
    }
    
    //gets all task
    function getAllTaskByProjectId($id)
    {
        echo "works";
    	//$query = $this->db->get_where('tasks', array('projectid' => $id));
    	$query = $this->db->query("select * from tasks where project_id = '$id'");
        return $query;
    }
    
    //creates a new task
    //$data - array of task data: assigned id, progress, due date, task
    function createTask($data)
    {
    	$this->db->insert('tasks', $data);
    }

    //deletes a task by task id
    function deleteTask($id)
    {
    	$this->db->delete('tasks', array('id' => $id));
    }

    //updates task
    //$data - array of task data: id, assigned id, progress, due date, task
    function updateTask($data)
    {
    	$this->db-where('id', $data->id);
    	$this->db-where('tasks', $data);
    }
}

?>