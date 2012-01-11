<?php
    
    class Pages extends CI_Controller {

        public function __construct(){
	    
	    parent::__construct();
	    
	    $this->load->helper("url");	
	    
	    
	}


	public function view($page = 'landing')
	{
            if ( ! file_exists('application/views/pages/'.$page.'.php'))
            {
                // Whoops, we don't have a page for that!
                show_404();
            }
	
            $data['title'] = ucfirst($page); // Capitalize the first letter
	
	
            $this->load->view('templates/header', $data);
            $this->load->view('pages/'.$page, $data);
	}
    }
?>