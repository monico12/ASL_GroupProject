<?php
	$this->load->library('session'); 
		

	$this->load->helper('form');
	echo form_open('userController/login');

	echo form_label('Username: ', 'username');
	echo form_input('username');

	echo form_label('Password: ', 'password');
	echo form_password('password');

	echo form_submit('login', 'Login');