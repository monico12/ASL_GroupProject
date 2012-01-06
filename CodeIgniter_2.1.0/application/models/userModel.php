<?php

class UserModel extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    //gets users by
    function getUser($username)
    {
    	$query = $this->db->get_where('users', array('username' => $username));
        
        //var_dump($query->result());

    	//return $query->result();
        
        foreach($query->result() as $row)
        {
            echo $row->username." ";
        }
        
    }
    
    function getAll()
    {
        $query = $this->db->get('users');
        
        foreach($query->result() as $row)
        {
            echo $row->username." ";
        }
    }
    
}

?>