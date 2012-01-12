<?php

	$this->load->helper('form');

	echo "<div id='signupform'>";

	echo form_open('userController/signup');

	echo form_label('First Name: ', 'firstname');
	echo form_input('firstname');

	echo form_label('Last Name: ', 'lastname');
	echo form_input('lastname');

	echo form_label('Email: ', 'email');
	echo form_input('email');

	echo form_label('Username: ', 'username');
	echo form_input('username');

	echo form_label('Password: ', 'password');
	echo form_password('password');

	echo form_label('Re-type Password: ', 'repassword');
	echo form_password('repassword');

	$btnAtt = array('class' => 'signupBtn', 'name' => 'signup');
	echo form_submit($btnAtt, 'Sign Up');

	$string = "</div></div>";

	echo form_close($string);






