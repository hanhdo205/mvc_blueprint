<?php
/**
 * Site Login Controller
 */
class LoginController extends Controller {
	
	function __construct() {
		parent::__construct();
	}
	
	function index(){
        $this->setView('', 'login');
		if(!empty($_POST)) {
			if(!empty($_POST['username']) && !empty($_POST['password'])) {
				$u = User::getOne(array('username'=>$_POST['username'], 'password'=>md5($_POST['password'])));
				if($u->getId()) {
					$this->setVariable('username', $u->getFullname());
				} else {
					$this->setVariable('error', T_('Check your information !'));
				}
			} else {
				$this->setVariable('error', T_('Fill in the fields please !'));
			}
		}
    }
   
}

?>