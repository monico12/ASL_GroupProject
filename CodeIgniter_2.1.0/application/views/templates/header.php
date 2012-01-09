<?php
	$error = $this->session->userdata('error');
	
	if($error == true)
	{
		echo "<p><span style='color:red;'>Wrong Username & Password</span></p>";
		$this->session->sess_destroy();

		
	};	

	$this->load->helper('form');
	echo form_open('userController/login');

	echo form_label('Username: ', 'username');
	echo form_input('username');

	echo form_label('Password: ', 'password');
	echo form_password('password');

	echo form_submit('login', 'Login');