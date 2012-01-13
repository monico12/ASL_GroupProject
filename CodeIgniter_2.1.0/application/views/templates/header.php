<?php
	$this->load->helper('html');
	echo doctype('xhtml1-trans');
	echo "<title>TooDoo - Project Manager</title>";
	echo "	<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />";
	echo link_tag('http://fonts.googleapis.com/css?family=Questrial', 'stylesheet', 'text/css');
	echo link_tag('/css/main.css', 'stylesheet', 'text/css');
	
	echo "<body>";
	echo "<div id='header'><h1 id='logo'>TooDoo</h1>";
	
	$this->session->set_userdata('loggedin', false);

?>
			
			
	
