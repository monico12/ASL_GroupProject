<?php
	$this->load->helper('form');

	echo form_open('taskController/createTask');

	echo form_label('Task', 'task');
	echo form_input('task');

	echo form_label('Assigned', 'assigned');
	echo form_dropdown('assigned',array());

	echo form_label('Due Date', 'dueDate');
	echo form_input('dueDate');

	echo form_submit('addTask', 'Add Task');