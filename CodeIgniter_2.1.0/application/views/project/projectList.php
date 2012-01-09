<?php
	$this->load->helper('url');
	if(isset($list))
	{
		$projectList = array();
		$i = 0;
		?><ul>
		<?php
		foreach($list->result() as $row)
        {

            //echo $row->title;
            //echo $row->description;
            //$projectList[$i] = $row->title;
            //$i++;
            //echo anchor('', $row->title);
			?>
			<li><a href="">
				<?php echo $row->title ?>
			</a></li><?php
		}?>
	</ul>
<?php
	}



	$this->load->helper('html');
	//$this->load->controller('projectController');


	//$projectList = array();

	

	//echo anchor('#', ul($projectList, 'projectList'));

