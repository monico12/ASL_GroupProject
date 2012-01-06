<h1>Landing Page</h1>
<?php
	$this->load->helper('form');
	echo form_label('Username: ', 'username');
	echo form_input('username');

	echo form_label('Password: ', 'password');
	echo form_password('password');

	echo form_submit('login', 'Login');