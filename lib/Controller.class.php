<?php
/**
 * Base Controller class
 */
class Controller {
	
    protected $template;
    
	function __construct() {
		$this->template = new Template();
	}
    
    function index(){
        error_log("Controller[".get_called_class()."] index method is not defined");
    }
    
    protected function setView($folder,$file){
        $this->template->set($folder,$file);
    }
    protected function setVariable($key,$value){
        $this->template->setVariable($key,$value);
    }
    
    function __destruct(){
        $this->template->render();
    }
}

?>