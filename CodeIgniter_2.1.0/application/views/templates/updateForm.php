<?php
	$this->load->helper('form');
	
	foreach ($query->result() as $r) {
	
		$taskAtt = array('class' => 'forminput', 'name' => 'task', 'value' => $r->task);
		$assignedAtt = array('class' => 'tforminput', 'name' => 'assigned', 'value' => $r->assigned);
		$dateAtt = array('class' => 'tforminput', 'name' => 'duedate', 'value' => $r->duedate);
		$hiddenAtt = array('id' => $r->id);
		$btnAtt = array('class' => 'newbtn', 'name' => 'addtask');

	}
	echo "<h2>Update Task</h2>";


	echo "<div id='taskform'>";

	echo form_open('taskController/updateTask');
	echo form_hidden($hiddenAtt);

	echo form_label('Task', 'task');
	echo form_input($taskAtt);

	echo form_label('Assigned', 'assigned');
	//echo form_dropdown('assigned',array());
	echo form_input($assignedAtt);

	echo form_label('Due Date', 'dueDate');
	echo form_input($dateAtt);

	echo form_submit($btnAtt, 'Add Task');
	
	echo "</div>";