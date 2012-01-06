<?php
class Landing extends CI_Controller {

	public function index()
	{
		$this->load->view('landing/landing');
		//$this->load->database();
	}

}
?>