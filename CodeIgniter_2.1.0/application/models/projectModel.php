<?php

class ProjectModel extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
    
    //gets all projects by user_id
    //$user_id
    function getProjectsByUserId($user_id)
    {
        $query = $this->db->get_where('projects', array('user_id' => $user_id));
        return $query;
    }
    
    function getProject($projectId)
    {
        $query = $this->db->query("Select description from projects where id = '$projectId'");
        
        return $query;
    }

    //adds new project
    //$data - array of project data: title, description, user id
    function createProject($data)
    {
        $this->db->insert('projects', $data);
    }

    //deletes project
    //takes in a project id
    function deleteProject($id)
    {
        //$this->db->delete('projects',array('id' => $id));
        $this->db->where('id', $id);
        $this->db->delete('projects'); 
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