<?php
App::uses('AppController', 'Controller');
/**
 * Projetos Controller
 *
 * @property Projeto $Projeto
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ProjetosController extends AppController {

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
		$this->Projeto->recursive = 0;
		$this->set('projetos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Projeto->exists($id)) {
			throw new NotFoundException(__('Invalid projeto'));
		}
		$options = array('conditions' => array('Projeto.' . $this->Projeto->primaryKey => $id));
		$this->set('projeto', $this->Projeto->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Projeto->create();
			
			$this->request->data['Projeto']['idUser'] = $this->Auth->user('id');
			
			if ($this->Projeto->save($this->request->data)) {
				$this->Session->setFlash(__('The projeto has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The projeto could not be saved. Please, try again.'));
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
		if (!$this->Projeto->exists($id)) {
			throw new NotFoundException(__('Invalid projeto'));
		}
		if ($this->request->is(array('post', 'put'))) {
			$this->request->data['Projeto']['idUser'] = $this->Auth->user('id');
			if ($this->Projeto->save($this->request->data)) {
				$this->Session->setFlash(__('The projeto has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The projeto could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Projeto.' . $this->Projeto->primaryKey => $id));
			$this->request->data = $this->Projeto->find('first', $options);
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
		$this->Projeto->id = $id;
		if (!$this->Projeto->exists()) {
			throw new NotFoundException(__('Invalid projeto'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Projeto->delete()) {
			$this->Session->setFlash(__('The projeto has been deleted.'));
		} else {
			$this->Session->setFlash(__('The projeto could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Projeto->recursive = 0;
		$this->set('projetos', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Projeto->exists($id)) {
			throw new NotFoundException(__('Invalid projeto'));
		}
		$options = array('conditions' => array('Projeto.' . $this->Projeto->primaryKey => $id));
		$this->set('projeto', $this->Projeto->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Projeto->create();
			if ($this->Projeto->save($this->request->data)) {
				$this->Session->setFlash(__('The projeto has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The projeto could not be saved. Please, try again.'));
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
		if (!$this->Projeto->exists($id)) {
			throw new NotFoundException(__('Invalid projeto'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Projeto->save($this->request->data)) {
				$this->Session->setFlash(__('The projeto has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The projeto could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Projeto.' . $this->Projeto->primaryKey => $id));
			$this->request->data = $this->Projeto->find('first', $options);
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
		$this->Projeto->id = $id;
		if (!$this->Projeto->exists()) {
			throw new NotFoundException(__('Invalid projeto'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Projeto->delete()) {
			$this->Session->setFlash(__('The projeto has been deleted.'));
		} else {
			$this->Session->setFlash(__('The projeto could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
