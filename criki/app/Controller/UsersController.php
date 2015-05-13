<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 */
class UsersController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Session');
	public $helpers = array('Form', 'Html', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		}
	}

	public function edit($id = null) {
		
			if ($this->Session->check('User')) {
				$user = $this->Session->read('User');
				if(empty($this->request->data)) {
					$id = $user['id'];
					if(!$id) {
						$this->Session->setFlash('Invalid id for User');
						$this->redirect('/users/edit');
					}
					$this->request->data = $this->User->read(null, $id);
				} else {
					if ($id == $user['id']) {
						$this->cleanUpFields();
						if($this->User->save($this->request->data)) {
							$this->Session->setFlash('The User has been saved');
							$this->redirect('/users/edit');
						} else {
							$this->Session->setFlash('Please correct errors below.');
						}
					}
				}
			}
		
	}

	public function register(){

		$this->set('username_error', 'username is required');
		$this->set('password_error', 'password is required');
		$this->set('email_error', 'email is required');

		if ($this->request->is('post')){

			
			if (!empty($this->request->data) && $this->User->validates($this->request->data)) {
				if ($this->User->findByUsername($this->request->data['User']['username'])) {
					$this->User->invalidate('username');
					$this->set('username_error', 'username already in use');
				} else if ($this->User->findByEmail($this->request->data['User']['email'])) {
					$this->User->invalidate('email');
					$this->set('email_error', 'email address already in use');
				} else {
					
					$this->request->data['User']['password'] = md5($this->request->data['User']['password']);					
					
					$this->User->save($this->request->data);
					$this->Session->write('User',
					$this->User->findByUsername($this->request->data['User']['username']));
					$this->Session->setFlash('Thank you for registering.');
					$this->redirect('/');
					
				}
			} else {
				$this->validateErrors($this->User);
			}		
			
		}
	}

	function login() {
		$this->set('login_error','');
		if ($this->request->data) {
			$results = $this->User->findByEmail($this->request->data['User']['User/email']);
			if ($results && $results['User']['password'] == md5($this->request->data['User']['password'])) {
				$this->Session->write('User', $results['User']);
				$results['User']['login'] = date("Y-m-d H:i:s");
				$this->User->save($results);
				$this->redirect('/');
			} else {
				$this->User->invalidate('email');
				$this->User->invalidate('password');
				$this->set('login_error', 'invalid login');
			}
		}
	}

	function logout() {
		$this->Session->delete('User');
		$this->redirect('/');
	}	
}
