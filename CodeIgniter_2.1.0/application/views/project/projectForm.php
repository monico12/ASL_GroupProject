<?php
	$this->load->helper('form');
	
	echo "<h2>Create A New Project</h2>";
	
	echo "<div id='projectform'>";
	
	$descAtt = array('class' => 'descriptiontext', 'name' => 'description');
	$tittleAtt = array('class' => 'forminput', 'name' => 'title');
	$membersAtt = array('class' => 'forminput', 'name' => 'members');




	echo form_open('projectController/createProject');

	echo form_label('Title', 'title');
	echo "<br />";
	echo form_input($tittleAtt);
	
	echo "<br />";
	echo form_label('Description', 'description');
	echo "<br />";
	echo form_textarea($descAtt);

	echo "<br />";
	echo form_label('Add Members', 'members');
	echo "<br />";
	echo form_input($membersAtt);

	echo form_button('add', 'Add');

	echo form_submit('submit', 'Submit');
	
	echo "</div>";