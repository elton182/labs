<?php
App::uses('AppController', 'Controller');
/**
 * Entries Controller
 *
 * @property Entry $Entry
 * @property PaginatorComponent $Paginator
 */
class EntriesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');
	var $name = 'Entry';
	var $belongsTo = array('User' => array (
			'className' => 'User',
			'conditions' => ,
			'order' => ,
			'foreignKey' => 'user_id')
		);

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Entry->recursive = 0;
		$this->set('entries', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Entry->exists($id)) {
			throw new NotFoundException(__('Invalid entry'));
		}
		$options = array('conditions' => array('Entry.' . $this->Entry->primaryKey => $id));
		$this->set('entry', $this->Entry->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Entry->create();
			if ($this->Entry->save($this->request->data)) {
				$this->Session->setFlash(__('The entry has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The entry could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Entry->exists($id)) {
			throw new NotFoundException(__('Invalid entry'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Entry->save($this->request->data)) {
				$this->Session->setFlash(__('The entry has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The entry could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Entry.' . $this->Entry->primaryKey => $id));
			$this->request->data = $this->Entry->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Entry->id = $id;
		if (!$this->Entry->exists()) {
			throw new NotFoundException(__('Invalid entry'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Entry->delete()) {
			$this->Session->setFlash(__('The entry has been deleted.'));
		} else {
			$this->Session->setFlash(__('The entry could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
