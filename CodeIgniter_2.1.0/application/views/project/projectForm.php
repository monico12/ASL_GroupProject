<?php
	$this->load->helper('form');

	echo form_open('projectController/createProject');

	echo form_label('Title', 'title');
	echo form_input('title');

	echo form_label('Description', 'description');
	echo form_textarea('description');

	echo form_label('Add Members', 'members');
	echo form_input('members');

	echo form_button('add', 'Add');

	echo form_submit('submit', 'Submit');