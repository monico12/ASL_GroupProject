<?php

class UserModel extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    //gets users by username
    function getUser($username, $password)
    {
    	$query = $this->db->get_where('users', array('username' => $username, 'password' => $password));
        
        //var_dump($query->result());

    	//return $query->result();
        
        
        foreach ($query->result() as $row)
        {
            echo $row->username;
        }
        
        
    }
    
    //gets all users
    function getAll()
    {
        $query = $this->db->get('users');
        
        foreach($query->result() as $row)
        {
            echo $row->username." ";
        }
    }

    //adds new user
    //$data - array of the users data: first & last name, password, email and username
    function createUser($data)
    {
        $this->db->insert('users', $data);
    }

    //updates user information
    function updateUser($data)
    {
        $this->db->where('id', $data->id);
        $this->db->update('users', $data); 
    }
    
}

?>