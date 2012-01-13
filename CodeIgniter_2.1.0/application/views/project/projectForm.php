<?php
	$this->load->helper('form');
	
	echo "<h2>Create A New Project</h2>";
	
	echo "<div id='projectform'>";
	
	$descAtt = array('class' => 'descriptiontext', 'name' => 'description');
	$tittleAtt = array('class' => 'forminput', 'name' => 'title');
	$membersAtt = array('class' => 'forminput', 'name' => 'members');
	$btnAtt = array('class' => 'newbtn', 'id'=> 'formsubmit', 'name' => 'submit');


	$this->load->model('ProjectModel');
	$query = $this->ProjectModel->getAllUsers();
	//$row = $query->result();
	//$options = array();
	//var_dump($query->result());
	$userList = array();
	$i = 0;
	foreach($query->result() as $row)
	{
		$userList[$i] = $row->username;
		$i++;
	}
	//var_dump($query->result()->username);


	echo form_open('projectController/createProject');

	echo form_label('Title', 'title');
	echo "<br />";
	echo form_input($tittleAtt);
	
	echo "<br />";
	echo form_label('Description', 'description');
	echo "<br />";
	echo form_textarea($descAtt);

	echo "<br />";
	//echo form_label('Add Members', 'members');
	echo "<br />";
	//echo form_input($membersAtt);
		/*echo form_open('projectController/addMember');
		echo form_multiselect('members', $userList);

		echo form_submit('add', 'Add');
		echo form_close();*/
	echo form_submit($btnAtt, 'Submit');
	
	echo "</div>";