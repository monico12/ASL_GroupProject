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
	
	echo form_open('userController/login');

	echo form_label('Username: ', 'username');
	echo form_input('username');

	echo form_label('Password: ', 'password');
	echo form_password('password');

	echo form_submit($btnAtt, 'Login');
	
	$string = "</div></div>";

	echo form_close($string);

?>