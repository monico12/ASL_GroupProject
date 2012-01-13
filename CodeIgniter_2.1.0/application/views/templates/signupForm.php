<?php

	$this->load->helper('form');

	echo "<div id='signupform'>";
	
	$inputAttFname = array('class'=> 'forminput', 'name' => 'firstname');
	$inputAttLname = array('class'=> 'forminput', 'name' => 'lastname');
	$inputAttEmail = array('class'=> 'forminput', 'name' => 'email');
	$inputAttUname = array('class'=> 'forminput', 'name' => 'username');
	$inputAttPass = array('class'=> 'forminput', 'name' => 'password');
	$inputAttRePass = array('class'=> 'forminput', 'name' => 'repassword');
	


	echo form_open('userController/signup');

	echo form_label('First Name: ', 'firstname');
	echo form_input($inputAttFname);

	echo form_label('Last Name: ', 'lastname');
	echo form_input($inputAttLname);

	echo form_label('Email: ', 'email');
	echo form_input($inputAttEmail);

	echo form_label('Username: ', 'username');
	echo form_input($inputAttUname);

	echo form_label('Password: ', 'password');
	echo form_password($inputAttPass);

	echo form_label('Re-type Password: ', 'repassword');
	echo form_password($inputAttRePass);

	$btnAtt = array('class' => 'newbtn', 'name' => 'signup', 'id' => 'signup');
	echo form_submit($btnAtt, 'Sign Up');

	$string = "</div></div>";

	echo form_close($string);






