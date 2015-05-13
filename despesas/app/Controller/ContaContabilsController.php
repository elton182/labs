<?php
App::uses('AppController', 'Controller');
/**
 * ContaContabils Controller
 *
 * @property ContaContabil $ContaContabil
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ContaContabilsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ContaContabil->recursive = 0;
		$this->set('contaContabils', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ContaContabil->exists($id)) {
			throw new NotFoundException(__('Invalid conta contabil'));
		}
		$options = array('conditions' => array('ContaContabil.' . $this->ContaContabil->primaryKey => $id));
		$this->set('contaContabil', $this->ContaContabil->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ContaContabil->create();
			if ($this->ContaContabil->save($this->request->data)) {
				$this->Session->setFlash(__('The conta contabil has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The conta contabil could not be saved. Please, try again.'));
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
		if (!$this->ContaContabil->exists($id)) {
			throw new NotFoundException(__('Invalid conta contabil'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ContaContabil->save($this->request->data)) {
				$this->Session->setFlash(__('The conta contabil has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The conta contabil could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ContaContabil.' . $this->ContaContabil->primaryKey => $id));
			$this->request->data = $this->ContaContabil->find('first', $options);
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
		$this->ContaContabil->id = $id;
		if (!$this->ContaContabil->exists()) {
			throw new NotFoundException(__('Invalid conta contabil'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ContaContabil->delete()) {
			$this->Session->setFlash(__('The conta contabil has been deleted.'));
		} else {
			$this->Session->setFlash(__('The conta contabil could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->ContaContabil->recursive = 0;
		$this->set('contaContabils', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->ContaContabil->exists($id)) {
			throw new NotFoundException(__('Invalid conta contabil'));
		}
		$options = array('conditions' => array('ContaContabil.' . $this->ContaContabil->primaryKey => $id));
		$this->set('contaContabil', $this->ContaContabil->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->ContaContabil->create();
			if ($this->ContaContabil->save($this->request->data)) {
				$this->Session->setFlash(__('The conta contabil has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The conta contabil could not be saved. Please, try again.'));
			}
		}
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->ContaContabil->exists($id)) {
			throw new NotFoundException(__('Invalid conta contabil'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ContaContabil->save($this->request->data)) {
				$this->Session->setFlash(__('The conta contabil has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The conta contabil could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ContaContabil.' . $this->ContaContabil->primaryKey => $id));
			$this->request->data = $this->ContaContabil->find('first', $options);
		}
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->ContaContabil->id = $id;
		if (!$this->ContaContabil->exists()) {
			throw new NotFoundException(__('Invalid conta contabil'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ContaContabil->delete()) {
			$this->Session->setFlash(__('The conta contabil has been deleted.'));
		} else {
			$this->Session->setFlash(__('The conta contabil could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
