<?php
App::uses('AppController', 'Controller');
/**
 * Freebies Controller
 *
 * @property Freeby $Freeby
 * @property PaginatorComponent $Paginator
 */


// bit.ly
include_once('bitly.php');

class FreebiesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $helpers = array('Facebook.Facebook');
	public $components = array('Paginator');
 	public $paginate = array(
		'limit' => 10,
		'order' => array(
            'Freeby.id' => 'desc'
        )
	);
	
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Freeby->recursive = 0;
		$this->Paginator->settings = $this->paginate;
		$this->set('freebies', $this->paginate());
	}
	public function mod() {
		$this->Freeby->recursive = 0;
		$this->Paginator->settings = $this->paginate;
		$this->set('freebies', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Freeby->exists($id)) {
			throw new NotFoundException(__('Invalid freeby'));
		}
		
		//GET URL
		
		$curr_dir 			= "freeish"; 
		$dyna_url 		= 'http://freeish.azurewebsites.net/freebies/view/' . $id . '/';
//		$dyna_url 		= 'http://localhost:8888/' . $curr_dir . '/freebies/view/' . $id . '/';
//		$dyna_url 		= 'http://localhost:8888/' . $curr_dir . '/freeish/' . $var_project_id . '/';
  		
		$results = bitly_v3_shorten($dyna_url, 'bit.ly');
		$this->set('biturl', $results["url"]);
		$this->set('fulurl', $dyna_url);
		
		$options = array('conditions' => array('Freeby.' . $this->Freeby->primaryKey => $id));
		$this->set('freeby', $this->Freeby->find('first', $options));
	}
	
	
	public function confirmation($id = null) {
		if (!$this->Freeby->exists($id)) {
			throw new NotFoundException(__('Invalid freeby'));
		}
		
		//GET URL
		
		$curr_dir 			= "freeish"; 
		$dyna_url 		= 'http://freeish.azurewebsites.net/freebies/view/' . $id . '/';
//		$dyna_url 		= 'http://localhost:8888/' . $curr_dir . '/freebies/view/' . $id . '/';
//		$dyna_url 		= 'http://localhost:8888/' . $curr_dir . '/freeish/' . $var_project_id . '/';
  		
		$results = bitly_v3_shorten($dyna_url, 'bit.ly');
		$this->set('biturl', $results["url"]);
		$this->set('fulurl', $dyna_url);
		
		
		$options = array('conditions' => array('Freeby.' . $this->Freeby->primaryKey => $id));
		$this->set('freeby', $this->Freeby->find('first', $options));
		
		
	}

	

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Freeby->create();
			if ($this->Freeby->save($this->request->data)) {
				$this->Session->setFlash(__('The freeby has been saved'), 'flash/success');
//				$this->redirect(array('action' => 'index'));
//				$this->redirect(array('controller'=>'freebies', 'action' => 'view',  $this->Freeby->id ));
				$this->redirect(array('controller'=>'freebies', 'action' => 'confirmation',  $this->Freeby->id ));
	
			} else {
				$this->Session->setFlash(__('The freeby could not be saved. Please, try again.'), 'flash/error');
			}
		}
		$categories = $this->Freeby->Category->find('list');
		$this->set(compact('categories'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
        $this->Freeby->id = $id;
		if (!$this->Freeby->exists($id)) {
			throw new NotFoundException(__('Invalid freeby'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Freeby->save($this->request->data)) {
				$this->Session->setFlash(__('The freeby has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The freeby could not be saved. Please, try again.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('Freeby.' . $this->Freeby->primaryKey => $id));
			$this->request->data = $this->Freeby->find('first', $options);
		}
		$categories = $this->Freeby->Category->find('list');
		$this->set(compact('categories'));
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
		$this->Freeby->id = $id;
		if (!$this->Freeby->exists()) {
			throw new NotFoundException(__('Invalid freeby'));
		}
		if ($this->Freeby->delete()) {
			$this->Session->setFlash(__('Freeby deleted'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Freeby was not deleted'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}}
