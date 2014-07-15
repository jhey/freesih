<?php
App::uses('AppController', 'Controller');
/**
 * Needies Controller
 *
 * @property Needy $Needy
 * @property PaginatorComponent $Paginator
 */


// bit.ly
include_once('bitly.php');

class NeediesController extends AppController {

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
            'Needy.id' => 'desc'
        )
	);
	
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Needy->recursive = 0;
		$this->Paginator->settings = $this->paginate;
		$this->set('needies', $this->paginate());
	}
	public function mod() {
		$this->Needy->recursive = 0;
		$this->Paginator->settings = $this->paginate;
		$this->set('needies', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Needy->exists($id)) {
			throw new NotFoundException(__('Invalid needy'));
		}
		
		$curr_dir 			= "freeish"; 
		$dyna_url 		= 'http://freeish.azurewebsites.net/needies/view/' . $id . '/';
//		$dyna_url 		= 'http://localhost:8888/' . $curr_dir . '/freebies/view/' . $id . '/';
//		$dyna_url 		= 'http://localhost:8888/' . $curr_dir . '/freeish/' . $var_project_id . '/';
  		
		$results = bitly_v3_shorten($dyna_url, 'bit.ly');
		$this->set('biturl', $results["url"]);
		$this->set('fulurl', $dyna_url);
		
		$options = array('conditions' => array('Needy.' . $this->Needy->primaryKey => $id));
		$this->set('needy', $this->Needy->find('first', $options));
	}

	
	public function confirmation($id = null) {
		if (!$this->Needy->exists($id)) {
			throw new NotFoundException(__('Invalid needy'));
		}
		
		$curr_dir 			= "freeish"; 
		$dyna_url 		= 'http://freeish.azurewebsites.net/needies/view/' . $id . '/';
//		$dyna_url 		= 'http://localhost:8888/' . $curr_dir . '/freebies/view/' . $id . '/';
//		$dyna_url 		= 'http://localhost:8888/' . $curr_dir . '/freeish/' . $var_project_id . '/';
  		
		$results = bitly_v3_shorten($dyna_url, 'bit.ly');
		$this->set('biturl', $results["url"]);
		$this->set('fulurl', $dyna_url);
		
		$options = array('conditions' => array('Needy.' . $this->Needy->primaryKey => $id));
		$this->set('needy', $this->Needy->find('first', $options));
	}
	
	
	
/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Needy->create();
			if ($this->Needy->save($this->request->data)) {
				$this->Session->setFlash(__('The needy has been saved'), 'flash/success');
//				$this->redirect(array('action' => 'index'));
				
				$this->redirect(array('controller'=>'needies', 'action' => 'confirmation',  $this->Needy->id ));
			} else {
				$this->Session->setFlash(__('The needy could not be saved. Please, try again.'), 'flash/error');
			}
		}
		$categories = $this->Needy->Category->find('list');
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
        $this->Needy->id = $id;
		if (!$this->Needy->exists($id)) {
			throw new NotFoundException(__('Invalid needy'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Needy->save($this->request->data)) {
				$this->Session->setFlash(__('The needy has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The needy could not be saved. Please, try again.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('Needy.' . $this->Needy->primaryKey => $id));
			$this->request->data = $this->Needy->find('first', $options);
		}
		$categories = $this->Needy->Category->find('list');
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
		$this->Needy->id = $id;
		if (!$this->Needy->exists()) {
			throw new NotFoundException(__('Invalid needy'));
		}
		if ($this->Needy->delete()) {
			$this->Session->setFlash(__('Needy deleted'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Needy was not deleted'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}}
