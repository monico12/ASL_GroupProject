<?php

class ProjectModel extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
    
    //adds new project
    //$data - array of project data: title, description, user id, task id
    function createProject($data)
    {
        $this->db->insert('projects', $data);
    }

    //deletes project
    //takes in a project id
    function deleteProject($id)
    {
        $this->db->delete('projects',array('id' => $id));
    }

    //updates project
    //$data - array of project data: title, description, user id, task id
    function updateProject($data)
    {
        $this->db-where('id', $data->id);
        $this->db-update('user', $data);
    }
    
}

?>