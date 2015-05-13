<?php
App::uses('AppController', 'Controller');
/**
 * CentroCustos Controller
 *
 * @property CentroCusto $CentroCusto
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class CentroCustosController extends AppController {

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
		$this->CentroCusto->recursive = 0;
		$this->set('centroCustos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CentroCusto->exists($id)) {
			throw new NotFoundException(__('Invalid centro custo'));
		}
		$options = array('conditions' => array('CentroCusto.' . $this->CentroCusto->primaryKey => $id));
		$this->set('centroCusto', $this->CentroCusto->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CentroCusto->create();
			if ($this->CentroCusto->save($this->request->data)) {
				$this->Session->setFlash(__('The centro custo has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The centro custo could not be saved. Please, try again.'));
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
		if (!$this->CentroCusto->exists($id)) {
			throw new NotFoundException(__('Invalid centro custo'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->CentroCusto->save($this->request->data)) {
				$this->Session->setFlash(__('The centro custo has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The centro custo could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CentroCusto.' . $this->CentroCusto->primaryKey => $id));
			$this->request->data = $this->CentroCusto->find('first', $options);
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
		$this->CentroCusto->id = $id;
		if (!$this->CentroCusto->exists()) {
			throw new NotFoundException(__('Invalid centro custo'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->CentroCusto->delete()) {
			$this->Session->setFlash(__('The centro custo has been deleted.'));
		} else {
			$this->Session->setFlash(__('The centro custo could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->CentroCusto->recursive = 0;
		$this->set('centroCustos', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->CentroCusto->exists($id)) {
			throw new NotFoundException(__('Invalid centro custo'));
		}
		$options = array('conditions' => array('CentroCusto.' . $this->CentroCusto->primaryKey => $id));
		$this->set('centroCusto', $this->CentroCusto->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->CentroCusto->create();
			if ($this->CentroCusto->save($this->request->data)) {
				$this->Session->setFlash(__('The centro custo has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The centro custo could not be saved. Please, try again.'));
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
		if (!$this->CentroCusto->exists($id)) {
			throw new NotFoundException(__('Invalid centro custo'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->CentroCusto->save($this->request->data)) {
				$this->Session->setFlash(__('The centro custo has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The centro custo could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CentroCusto.' . $this->CentroCusto->primaryKey => $id));
			$this->request->data = $this->CentroCusto->find('first', $options);
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
		$this->CentroCusto->id = $id;
		if (!$this->CentroCusto->exists()) {
			throw new NotFoundException(__('Invalid centro custo'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->CentroCusto->delete()) {
			$this->Session->setFlash(__('The centro custo has been deleted.'));
		} else {
			$this->Session->setFlash(__('The centro custo could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
