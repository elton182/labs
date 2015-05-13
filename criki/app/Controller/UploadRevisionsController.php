<?php
App::uses('AppController', 'Controller');
/**
 * UploadRevisions Controller
 *
 * @property UploadRevision $UploadRevision
 * @property PaginatorComponent $Paginator
 */
class UploadRevisionsController extends AppController {

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
		$this->UploadRevision->recursive = 0;
		$this->set('uploadRevisions', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->UploadRevision->exists($id)) {
			throw new NotFoundException(__('Invalid upload revision'));
		}
		$options = array('conditions' => array('UploadRevision.' . $this->UploadRevision->primaryKey => $id));
		$this->set('uploadRevision', $this->UploadRevision->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->UploadRevision->create();
			if ($this->UploadRevision->save($this->request->data)) {
				$this->Session->setFlash(__('The upload revision has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The upload revision could not be saved. Please, try again.'));
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
		if (!$this->UploadRevision->exists($id)) {
			throw new NotFoundException(__('Invalid upload revision'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->UploadRevision->save($this->request->data)) {
				$this->Session->setFlash(__('The upload revision has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The upload revision could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('UploadRevision.' . $this->UploadRevision->primaryKey => $id));
			$this->request->data = $this->UploadRevision->find('first', $options);
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
		$this->UploadRevision->id = $id;
		if (!$this->UploadRevision->exists()) {
			throw new NotFoundException(__('Invalid upload revision'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->UploadRevision->delete()) {
			$this->Session->setFlash(__('The upload revision has been deleted.'));
		} else {
			$this->Session->setFlash(__('The upload revision could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
