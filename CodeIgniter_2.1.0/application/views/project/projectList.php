<?php
	$this->load->helper('url');
	$this->load->helper('form');
	
	echo form_open('projectController/projectForm');
	echo form_submit('newProject', 'New Project');
	echo form_close();
	
	//echo $this->session-
	if(isset($list))
	{
		$projectList = array();
		$i = 0;
		?><ul>
		
		<?php
		//$buttonData = array(
    	//	'id' => 'delete',
    	//	'value' => 'true',
    	//	'type' => 'button',
    	//	'content' => 'Delete'
		//);
		

		foreach($list->result() as $row)
        { ?>
        	<?=form_open('projectController/deleteProject');	?>		
			<li><a href="<?php echo $row->id ?>">
				<?php echo $row->title ?></a>
				<?php 
						
						//hidden form containing the projects id
						echo form_hidden('id', $row->id);
						echo form_submit('delete', 'Delete');
						//echo form_button($buttonData);

				?>
			</li><?php echo form_close();
		}?>
		</ul>
	<?php
		
	}

