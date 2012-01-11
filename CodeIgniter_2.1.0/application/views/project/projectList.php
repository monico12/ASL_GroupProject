<?php
	$this->load->helper('url');
	$this->load->helper('form');
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
		echo form_open('projectController/deleteProject');

		foreach($list->result() as $row)
        { ?>			
			<li><a href="">
				<?php echo $row->title ?></a>
				<?php 
						//hidden form containing the projects id
						echo form_hidden('id', $row->id);
						echo form_submit('delete', 'Delete');
						//echo form_button($buttonData);
				?>
			</li><?php
		}?>
		</ul>
	<?php
		
	}

