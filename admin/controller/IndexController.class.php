<?php
/**
 * Site Index Controller
 */
class IndexController extends Controller {
	
	function __construct() {
		parent::__construct();
	}
    
    function index(){
        $u = User::getOne(array('username'=>'admin')); //Get one user with username==admin
        $this->setView('', 'main');
        $this->setVariable('testVar', $u->getFullname());
    }
   
}

?>