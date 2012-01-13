<?php
	$this->load->helper('url');
	$this->load->helper('form');
	
	
	if(isset($description))
	{
		?><div id='descriptionpanel'>
		
		<h2>Description</h2>
		<?php 
			echo "works";
			
			//echo $description->result()->description;
		 ?>
	</div>
	
	<?php }
	
	

