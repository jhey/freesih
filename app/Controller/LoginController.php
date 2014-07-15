<?php
App::uses('AppController', 'Controller');
/** Urls Controller
 *
 * @property Url $Url
 * @property PaginatorComponent $Paginator
 */




class LoginController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');


	
	
	public function index() {
		//
	}

	public function view($id = null) {
		//
	}

	
	    function registration(){
      if($user = $this->Connect->registrationData()){
        //We have a registered user, look at it and do something with it.
        print_r($user);
      }
    }

	

}
