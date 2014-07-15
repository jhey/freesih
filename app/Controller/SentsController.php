<?php
App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');

/** Urls Controller
 *
 * @property Url $Url
 * @property PaginatorComponent $Paginator
 */




class SentsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Email');
	
	
	public function index() {
		
//		$Email = new CakeEmail('smtp');
//		$Email->to('jrodriguez01@pros.com');
//		$Email->subject('TEST: Automagically generated email');
//		$Email->replyTo('julior@gmail.com');
//		$Email->from ('julior@gmail.com');
//		$Email->send();

		//$aMsg = "Thank you LORUM IPSUM!";
			
        $Email = new CakeEmail('smtp');
       	$Email->to('jrodriguez01@pros.com');
        $Email->emailFormat('html');
		
	
		
		$var_project_id 	= $this->Session->read('project.id');
		$var_project_name 	= $this->Session->read('project.name');
		$var_brief_id		= $this->Session->read('brief.id');
		$var_brief_type		= $this->Session->read('brief.type');
		$var_brief_name		= $this->Session->read('brief.name');
		
		//
		$curr_dir 			= "cake_pb"; // Localhost
//		$curr_dir 			= "";		// Azure
		
//  		$activate_url 		= 'http://' . env('SERVER_NAME') . $curr_dir . '/projects/view/' . $var_project_id . '/';
		
  		$activate_url 		= 'http://localhost:8888/' . $curr_dir . '/projects/view/' . $var_project_id . '/';
  		//$sub_url 			= 'http://localhost:8888/' . $curr_dir . '/' . $var_brief_type . '/edit/' . $var_brief_id . '/';
	
		http://localhost:8888/cake_PB/emails/edit/65
		
        $Email->template('default')->viewVars( array(
			'activate_url' => $activate_url,
			'var_brief_name' => $var_brief_name,
			'var_project_name' => $var_project_name,
			
		));
		
		
        $Email->subject('Automagically generated email');
		$Email->replyTo('julior@gmail.com');
		$Email->from ('julior@gmail.com');
        $Email->send();

		
		
		/*
	

		$this->Email->delivery = 'smtp';
		$this->Email->from = 'julior@gmail.com';
		$this->Email->to = 'jrodriguez01@pros.com';
		$this->set('name', 'Recipient Name');
		$this->Email->subject = '[PROS PB] - XYZ submitted';
		$this->Email->template = 'default';
		$this->Email->sendAs = 'html';
		$this->Email->send();
		*/

		
	}

	public function view($id = null) {
		//
	}


	

}
