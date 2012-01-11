<?php
	$this->load->helper('html');
	echo doctype('xhtml1-trans');	
	echo link_tag('http://fonts.googleapis.com/css?family=Overlock', 'stylesheet', 'text/css');
	echo link_tag(base_url().'/css/main.css', 'stylesheet', 'text/css');
	
	
	echo "<div id='header'><h1>Projetc Manager</h1>";
	
	
	//----------------------------LOGIN FORM-------------------------------------//
	echo "<div id='loginform'>";
	$error = $this->session->userdata('error');
	
	if($error == true)
	{
		echo "<p><span style='color:red;'>Wrong Username & Password</span></p>";
		$this->session->sess_destroy();
	};	

	$this->load->helper('form');
	

	$btnAtt = array('class' => 'gbutton', 'name' => 'login');
	
	echo form_open('userController/login');

	echo form_label('Username: ', 'username');
	echo form_input('username');

	echo form_label('Password: ', 'password');
	echo form_password('password');

	echo form_submit($btnAtt, 'Login');
	
	$string = "</div></div>";

	echo form_close($string);
