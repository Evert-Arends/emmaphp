<?php

/**
 * Base controller of the EmmaPHP MVC Framework
 */
abstract class EmmaController {
    
    static $model;
    static $instance;
    
    protected $load;
    
    function __construct() {
        
        if( ! $_SESSION) 
            session_start();
            
        $_SESSION["controller"] = $_GET["c"];
        $this->load = Loader::$linkage;
        self::$instance =& $this;
        
    }
    
    static function init_model() {
        
        $model_name = Loader::$model_name;
        self::$instance->$model_name = Loader::$model;
        
    }
    
    abstract public function index();
    
    protected function show_404() {
        
        $this->load->view("fourohfour.php");
        
    }
    
}