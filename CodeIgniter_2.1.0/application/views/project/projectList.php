<?php
	$this->load->helper('url');
	$this->load->helper('form');
	
	echo form_open('projectController/projectForm');
	echo form_submit('newProject', 'New Project');
	echo form_close();
	
	if(isset($list))
	{
		?><ul>
		
		<?php

		foreach($list->result() as $row)
        { ?>
        	
        	<?=form_open('projectController/deleteProject');	?>		
			<li><a href="/ASL_GroupProject/CodeIgniter_2.1.0/index.php/projectController/viewTask/<?php echo $row->id ?>">
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

