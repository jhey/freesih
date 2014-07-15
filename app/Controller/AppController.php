<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
	
	
	public $theme = "Cakestrap";
	
	var $helpers = array(
		'Form', 
		'Time', 
		'Html', 
		'Session', 
		'Js', 
		'Authake.Authake',
		'Facebook.Facebook',
	);
	
	
//	
//    var $components = array(
//		'Session',
//		'RequestHandler', 
//		'Authake.Authake',
//	);	
//	
//    var $components = array(
//		'Session',
//		'RequestHandler', 
//		'Authake.Authake',
//		'DebugKit.Toolbar',
//		'Facebook.Connect'
//	);	
//	
	 var $components = array(
		'Session',
		'RequestHandler', 
		'Authake.Authake',
		'Facebook.Connect'
	);
	
	var $counter = 0;
	
    function beforeFilter(){
        $this->auth();
    }
	
    private function auth(){
        Configure::write('Authake.useDefaultLayout', true);
		//
		// relocate?....
		$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
		$this->Authake->setPreviousUrl($actual_link);
		//
		
		//$this->Session->write('Auth.redirect', 'http://www.yahoo.com');
		$this->Authake->beforeFilter($this);
    }


	public function index() { 
		//$this->layout = 'default_small_ad';
	}

	public function components() {}

	public function base_css() {}

	public function javascript() {}
	
}



