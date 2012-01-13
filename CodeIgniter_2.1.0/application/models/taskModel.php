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
    	//$this->db-where('id', $data->id);
    	//$this->db-where('tasks', $data);
        //echo $data->id;
        //$data = array(
          //     'title' => $title,
            //   'name' => $name,
              // 'date' => $date
            //);
            //var_dump($data["id"]);
        $this->db->where('id', $data["id"]);
        $this->db->update('tasks', $data); 
        //$this->db->query("update tasks set assigned = array, duedate = '{$duedate}', task = '{$task}' where id = $id");
    }

    function getTaskById($id)
    {
        $query = $this->db->query("select * from tasks where id = '$id'");
        return $query;   
    }
}

?>