<?php

/**
 * Default Controller of the EmmaPHP MVC Framework
 */
class IndexController extends EmmaController
{

    public function index ()
    {

	   	$this->page ();
// 	   	Core::getRekt();
    	
    }
    
    public function page ($page = "welcome")
    {
        
        if ( ! file_exists ("views/pages/" . $page . ".php"))
        {
            
            $this->show_404 ();
            
        }
        else
        {
            
            $this->load->view ("templates/header.php");
            $this->load->view ("pages/" . $page . ".php");
            $this->load->view ("templates/footer.php");
            
        }
        
    }

}