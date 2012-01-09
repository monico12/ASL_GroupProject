<?php
	$this->load->helper('form');
	$this->load->library('session');
	
	echo form_open('userController/login');
	
	echo form_label('Username: ', 'username');
	echo form_input('username');

	echo form_label('Password: ', 'password');
	echo form_password('password');

	echo form_submit('login', 'Login');
?>