<?php
/**
 * Site Logout Controller
 */
class LogoutController extends Controller {
	
	function __construct() {
		parent::__construct();
	}
	
	function index(){
        $this->setView('', 'logout');
		if(isset($_GET['token']) && $_GET['token'] == md5("signout" . date("dmH"))) {
			$this->setVariable('logged', true);
		}
    }
   
}

?>