<?php
App::uses('AppController', 'Controller');
/** Urls Controller
 *
 * @property Url $Url
 * @property PaginatorComponent $Paginator
 */


// bit.ly
include_once('bitly.php');


class UrlsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');
 	public $paginate = array(
		'limit' => 10,
		'order' => array(
            'Url.id' => 'desc'
        )
	);
	
	
	
	
	public function get_employee_list($department_id){
		$types = bitly_v3_shorten($department_id, 'bit.ly');
		return $types["url"];
		//var_dump($types);
	}
		
	// CONVERT TO BITLY
	public function get_bits(){
		$this->autoRender = false;
		 if($this->request->is('POST')){
			 //echo $this->request->data;
			$jurl = $this->request->data('value_to_send');
			echo $this->get_employee_list($jurl);	

		 }
		
	}
	
	/*
	 if ($this->request->data['type_1']) {
				$jurl = "http://www.yahoo.com/news";
				echo $this->get_employee_list($jurl);
			 } else {
				$jurl = $this->request->data('value_to_send');
				echo $this->get_employee_list($jurl);	
			}
			*/
	
		public function get_fake_bits(){
		$this->autoRender = false;
		 if($this->request->is('POST')){
			$xurl = "http://www.msn.com/news";
			echo $this->get_employee_list($xurl);
			 //
			 
			 //echo $this->request;
				 
			 /*
			 
			  if( $this->params['form']['task'] == 'prev' ) {

        $this->Redirect( $prev_page ); 

        exit(); 

    } else if ( $this->params['form']['task'] == 'next' ) {

        $this->Redirect( $next_page ); exit(); 

    }
			 
			 
			 
			 if ($this->request->data['type_1']) {
				$xurl = "http://www.yahoo.com/news";
				echo $this->get_employee_list($xurl);
			 } else {
				$xurl = "http://www.facebook.com";
				echo $this->get_employee_list($xurl);	
			}
			 */
			 
		 }
		
	}
	
	
	
	
/* index method  */
public function index() {
		$this->Url->recursive = 0;
		$this->Paginator->settings = $this->paginate;
		$this->set('urls', $this->paginate());
	}

/* view method
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
public function view($id = null) {
		if (!$this->Url->exists($id)) {
			throw new NotFoundException(__('Invalid url'));
		}
		$options = array('conditions' => array('Url.' . $this->Url->primaryKey => $id));
		$this->set('url', $this->Url->find('first', $options));
	}

/* add method */
public function add() {
		/*
		if ($this->request->is('get')) {
			if (isset($this->request->data['type_1'])) {
				 //
				$jurl = "http://www.jhey.com";
			 	return $this->get_employee_list($jurl);
				// yes button was clicked
			} else if (isset($this->request->data['type_2'])) {
				echo 'reg2';
				// no button was clicked
			}	
		} 
		
		if ($this->request->is('POST')) {
			$this->render();
		}
		*/
		if ($this->request->is('post')) {
			$this->Url->create();
			if ($this->Url->save($this->request->data)) {
				$this->Session->setFlash(__('The url has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The url could not be saved. Please, try again.'), 'flash/error');
			}
		}
		$sources = $this->Url->Source->find('list');
		$media = $this->Url->Media->find('list');
		$types = $this->Url->Type->find('list');
		$this->set(compact('sources', 'media', 'types'));
		
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
        $this->Url->id = $id;
		if (!$this->Url->exists($id)) {
			throw new NotFoundException(__('Invalid url'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Url->save($this->request->data)) {
				$this->Session->setFlash(__('The url has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The url could not be saved. Please, try again.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('Url.' . $this->Url->primaryKey => $id));
			$this->request->data = $this->Url->find('first', $options);
		}
		$sources = $this->Url->Source->find('list');
		$media = $this->Url->Media->find('list');
		$types = $this->Url->Type->find('list');
		$this->set(compact('sources', 'media', 'types'));
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
		$this->Url->id = $id;
		if (!$this->Url->exists()) {
			throw new NotFoundException(__('Invalid url'));
		}
		if ($this->Url->delete()) {
			$this->Session->setFlash(__('Url deleted'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Url was not deleted'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}}
