<?php

class UserModel extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    //gets users by username
    function getUser($username, $password)
    {
       
        $query = $this->db->query("select * from users where username = '$username' and password = '$password'");
        
        
        return $query;

        
    }
    
    //gets all users
    function getAll()
    {
        $query = $this->db->query('SELECT id, username FROM users');
        
        return $query;
        //foreach($query->result() as $row)
        //{
        //    return $row->username;
        //}
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