<?php
App::uses('AppController', 'Controller');
/**
 * Viagems Controller
 *
 * @property Viagem $Viagem
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ViagemsController extends AppController {

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
		$this->Viagem->recursive = 0;
		$this->set('viagems', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Viagem->exists($id)) {
			throw new NotFoundException(__('Invalid viagem'));
		}
		$options = array('conditions' => array('Viagem.' . $this->Viagem->primaryKey => $id));
		$this->set('viagem', $this->Viagem->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Viagem->create();
			if ($this->Viagem->save($this->request->data)) {
				$this->Session->setFlash(__('The viagem has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The viagem could not be saved. Please, try again.'));
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
		if (!$this->Viagem->exists($id)) {
			throw new NotFoundException(__('Invalid viagem'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Viagem->save($this->request->data)) {
				$this->Session->setFlash(__('The viagem has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The viagem could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Viagem.' . $this->Viagem->primaryKey => $id));
			$this->request->data = $this->Viagem->find('first', $options);
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
		$this->Viagem->id = $id;
		if (!$this->Viagem->exists()) {
			throw new NotFoundException(__('Invalid viagem'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Viagem->delete()) {
			$this->Session->setFlash(__('The viagem has been deleted.'));
		} else {
			$this->Session->setFlash(__('The viagem could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Viagem->recursive = 0;
		$this->set('viagems', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Viagem->exists($id)) {
			throw new NotFoundException(__('Invalid viagem'));
		}
		$options = array('conditions' => array('Viagem.' . $this->Viagem->primaryKey => $id));
		$this->set('viagem', $this->Viagem->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Viagem->create();
			if ($this->Viagem->save($this->request->data)) {
				$this->Session->setFlash(__('The viagem has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The viagem could not be saved. Please, try again.'));
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
		if (!$this->Viagem->exists($id)) {
			throw new NotFoundException(__('Invalid viagem'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Viagem->save($this->request->data)) {
				$this->Session->setFlash(__('The viagem has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The viagem could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Viagem.' . $this->Viagem->primaryKey => $id));
			$this->request->data = $this->Viagem->find('first', $options);
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
		$this->Viagem->id = $id;
		if (!$this->Viagem->exists()) {
			throw new NotFoundException(__('Invalid viagem'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Viagem->delete()) {
			$this->Session->setFlash(__('The viagem has been deleted.'));
		} else {
			$this->Session->setFlash(__('The viagem could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
