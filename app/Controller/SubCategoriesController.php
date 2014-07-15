<?php
App::uses('AppController', 'Controller');
/**
 * SubCategories Controller
 *
 * @property SubCategory $SubCategory
 * @property PaginatorComponent $Paginator
 */
class SubCategoriesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->SubCategory->recursive = 0;
		$this->set('subCategories', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->SubCategory->exists($id)) {
			throw new NotFoundException(__('Invalid sub category'));
		}
		$options = array('conditions' => array('SubCategory.' . $this->SubCategory->primaryKey => $id));
		$this->set('subCategory', $this->SubCategory->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->SubCategory->create();
			if ($this->SubCategory->save($this->request->data)) {
				$this->Session->setFlash(__('The sub category has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sub category could not be saved. Please, try again.'), 'flash/error');
			}
		}
		$categories = $this->SubCategory->Category->find('list');
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
        $this->SubCategory->id = $id;
		if (!$this->SubCategory->exists($id)) {
			throw new NotFoundException(__('Invalid sub category'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->SubCategory->save($this->request->data)) {
				$this->Session->setFlash(__('The sub category has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sub category could not be saved. Please, try again.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('SubCategory.' . $this->SubCategory->primaryKey => $id));
			$this->request->data = $this->SubCategory->find('first', $options);
		}
		$categories = $this->SubCategory->Category->find('list');
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
		$this->SubCategory->id = $id;
		if (!$this->SubCategory->exists()) {
			throw new NotFoundException(__('Invalid sub category'));
		}
		if ($this->SubCategory->delete()) {
			$this->Session->setFlash(__('Sub category deleted'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Sub category was not deleted'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}}
