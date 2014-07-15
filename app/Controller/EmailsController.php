<?php
App::uses('AppController', 'Controller');
//App::uses('CakeEmail', 'Network/Email');

/**
 * Emails Controller
 *
 * @property Email $Email
 * @property PaginatorComponent $Paginator
 */
class EmailsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	

//	public $components = array('Paginator', 'Email');
	
	public $components = array('Paginator');
	
 	public $paginate = array(
		'limit' => 50,
		'order' => array(
            'Email.id' => 'desc'
        )
	);
	
	
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Email->recursive = 0;
		$this->Paginator->settings = $this->paginate;
		$this->set('emails', $this->paginate());
	}

	
	
		
	
	// set the after screen - then save - ajax call
	public function savesubmit(){
		$this->autoRender = false;
		 if($this->request->is('POST')){ 
			 //
		 
			$this->Session->write('project.aftersave', 'sent');
//			$this->Session->write('brief.type', $this->name);
			$this->Session->write('brief.type', $this->params['controller']);
			$this->Session->write('brief.id', $this->Email->id);
			 
			 
			//echo 'aftersave';	
			 //$this->redirect(array('controller'=>'projects', 'action' => 'view',  $this->Session->read('project.id') ));

		 }		
	}
	
	
	
	
/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Email->exists($id)) {
			throw new NotFoundException(__('Invalid email'));
		}
		$options = array('conditions' => array('Email.' . $this->Email->primaryKey => $id));
		$this->set('email', $this->Email->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Email->create();
			if ($this->Email->save($this->request->data)) {
//				$this->Session->setFlash(__('The email has been saved'), 'flash/success');
//				$this->redirect(array('action' => 'index'));
				
				if( $this->Session->read('project.aftersave') == 'sent') { // if the Submit button has was pressed.
					$this->Session->write('project.aftersave', '');
					$this->Session->setFlash(__('Your Creative Brief has been submitted.'), 'flash/success');
					$this->redirect('/sents');
				} else {
					$this->Session->setFlash(__('The email has been saved'), 'flash/success');
					$this->redirect(array('controller'=>'projects', 'action' => 'view',  $this->Session->read('project.id') ));
				}
				
//
			} else {
				$this->Session->setFlash(__('The email could not be saved. Please, try again.'), 'flash/error');
			}
		}
		
		//$this->data['Email']['project_id'] = $this->Session->read('project.id');
		
		
		$projects = $this->Email->Project->find('list');
		$reviewers = $this->Email->Reviewer->find('list');
		$experts = $this->Email->Expert->find('list');
		$receivers = $this->Email->Receiver->find('list');
		$locations = $this->Email->Location->find('list');
//		$this->set(compact('reviewers', 'experts', 'receivers', 'locations'));
		$this->set(compact('projects', 'reviewers', 'experts', 'receivers', 'locations'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
        $this->Email->id = $id;
		if (!$this->Email->exists($id)) {
			throw new NotFoundException(__('Invalid email'));
		}
		
		// get & save - the name Project ID ...
//		$specificallyThisOne 	= $this->Email->find('first', array('conditions' => array("Project.id" => array($id))));
//		$pid	 				= $this->set('xdata', $specificallyThisOne['Project']['name_build']);
//		$this->Session->write('project.id', $specificallyThisOne['Email']['project_id']); 	
		
		
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Email->save($this->request->data)) {
//				$this->Session->setFlash(__('The email has been saved'), 'flash/success');
//				$this->redirect(array('action' => 'index'));
				if( $this->Session->read('project.aftersave') == 'sent') { // if the Submit button has was pressed.
					$this->Session->write('project.aftersave', '');
					$this->Session->setFlash(__('Your Creative Brief has been submitted!'), 'flash/success');
					$this->redirect('/sents');
				} else {
					$this->redirect(array('controller'=>'projects', 'action' => 'view',  $this->Session->read('project.id') ));
				}
				//
			
				//
			} else {
				$this->Session->setFlash(__('The email could not be saved. Please, try again.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('Email.' . $this->Email->primaryKey => $id));
			$this->request->data = $this->Email->find('first', $options);
		}
		$projects = $this->Email->Project->find('list');
		$reviewers = $this->Email->Reviewer->find('list');
		$experts = $this->Email->Expert->find('list');
		$receivers = $this->Email->Receiver->find('list');
		$locations = $this->Email->Location->find('list');
		$this->set(compact('projects', 'reviewers', 'experts', 'receivers', 'locations'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @throws MethodNotAllowedException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Email->id = $id;
		if (!$this->Email->exists()) {
			throw new NotFoundException(__('Invalid email'));
		}
		if ($this->Email->delete()) {
			$this->Session->setFlash(__('Email deleted'), 'flash/success');
			//$this->redirect(array('action' => 'index'));
			$this->redirect(array('controller'=>'projects', 'action' => 'view',  $this->Session->read('project.id') ));
		}
		$this->Session->setFlash(__('Email was not deleted'), 'flash/error');
		$this->redirect(array('action' => 'index'));
		$this->redirect(array('controller'=>'projects', 'action' => 'view',  $this->Session->read('project.id') ));
		
	}}
