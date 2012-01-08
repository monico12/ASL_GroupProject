<?php

class TaskModel extends CI_Model {

	//constructor
    function __construct()
    {
        parent::__construct();
    }
    
    //gets
    function getAllTaskByUser($id)
    {
    	
    }
    
    //creates a new task
    //$data - array of task data: assigned id, progress, due date, task
    function createTask($data)
    {
    	$this->db->insert('tasks', $data);
    }
}

?>