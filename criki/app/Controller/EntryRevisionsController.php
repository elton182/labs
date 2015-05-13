<?php
App::uses('AppController', 'Controller');
/**
 * EntryRevisions Controller
 *
 * @property EntryRevision $EntryRevision
 * @property PaginatorComponent $Paginator
 */
class EntryRevisionsController extends AppController {

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
		$this->EntryRevision->recursive = 0;
		$this->set('entryRevisions', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->EntryRevision->exists($id)) {
			throw new NotFoundException(__('Invalid entry revision'));
		}
		$options = array('conditions' => array('EntryRevision.' . $this->EntryRevision->primaryKey => $id));
		$this->set('entryRevision', $this->EntryRevision->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->EntryRevision->create();
			if ($this->EntryRevision->save($this->request->data)) {
				$this->Session->setFlash(__('The entry revision has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The entry revision could not be saved. Please, try again.'));
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
		if (!$this->EntryRevision->exists($id)) {
			throw new NotFoundException(__('Invalid entry revision'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->EntryRevision->save($this->request->data)) {
				$this->Session->setFlash(__('The entry revision has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The entry revision could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('EntryRevision.' . $this->EntryRevision->primaryKey => $id));
			$this->request->data = $this->EntryRevision->find('first', $options);
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
		$this->EntryRevision->id = $id;
		if (!$this->EntryRevision->exists()) {
			throw new NotFoundException(__('Invalid entry revision'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->EntryRevision->delete()) {
			$this->Session->setFlash(__('The entry revision has been deleted.'));
		} else {
			$this->Session->setFlash(__('The entry revision could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
