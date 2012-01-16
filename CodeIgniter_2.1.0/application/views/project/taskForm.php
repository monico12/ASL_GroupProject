<?php
	$this->load->helper('form');
	
	$taskAtt = array('class' => 'forminput', 'name' => 'task');
	$assignedAtt = array('class' => 'tforminput', 'name' => 'assigned');
	$dateAtt = array('class' => 'tforminput', 'name' => 'duedate');
	$btnAtt = array('class' => 'newbtn', 'name' => 'addtask');


	echo "<h2>Create A New Task</h2>";


	echo "<div id='taskform'>";

	echo form_open('taskController/createTask');

	echo form_label('Task', 'task');
	echo form_input($taskAtt);

	echo form_label('Assigned', 'assigned');
	echo form_input($assignedAtt);

	echo form_label('Due Date', 'dueDate');
	echo form_input($dateAtt);

	echo form_submit($btnAtt, 'Add Task');
	
	echo "</div>";