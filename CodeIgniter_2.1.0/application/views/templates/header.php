<?php
	$this->load->helper('html');
	echo doctype('xhtml1-trans');	
	echo link_tag('http://fonts.googleapis.com/css?family=Overlock', 'stylesheet', 'text/css');
	echo link_tag('/css/main.css', 'stylesheet', 'text/css');
	
	
	echo "<div id='header'><h1>Project  Manager</h1>";
	
	$this->session->set_userdata('loggedin', false);

?>
			
			
	
