<?php
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
	$inputAttUser = array('class'=> 'logininput', 'name' => 'username');
	$inputAttPass = array('class'=> 'logininput', 'name' => 'password');
	
	echo form_open('userController/login');

	echo form_label('Username: ', 'username');
	echo form_input($inputAttUser);

	echo form_label('Password: ', 'password');
	echo form_password($inputAttPass);

	echo form_submit($btnAtt, 'Login');
	
	echo form_close();

	echo "</div>";
	echo "</div>";
?>