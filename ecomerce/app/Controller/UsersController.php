<?php
App::uses('AppController', 'Controller');
App::uses('BlowfishPasswordHasher', 'Controller/Component/Auth','AuthComponent');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class UsersController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');
	public $user = array();

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
 * signup method
 *
 * @return void
 */
	public function signup() {
		if ($this->request->is('post')) {
			$this->User->create();			

			if (empty($this->request->data['User']['Nome'])){
				return $this->Session->setFlash(__('Favor informar seu nome.'));
			}

			if (empty($this->request->data['User']['Senha'])){
				return $this->Session->setFlash(__('Favor informar uma senha válida.'));
			}			

			if (empty($this->request->data['User']['E-mail'])){
				return $this->Session->setFlash(__('Favor informar um e-mail válido.'));
			}
			
			$this->User->set(array(
				'username' => $this->request->data['User']['Nome'],
				'password' => $this->request->data['User']['Senha'],
				'email' => $this->request->data['User']['E-mail'],
				'role' => ''));			
			

			if ($this->User->save()) {
				$this->Session->setFlash(__('Cadastro efetuado com sucesso.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				
				$this->Session->setFlash(__('Não foi possivel fazer o cadastro, favor tentar novamente.'));
			}
			
		}
	}

	public function login() {
		if ($this->request->is('post')) {
			if ($this->Auth->login()) {
				return $this->redirect($this->Auth->redirectUrl());
			}
			$this->Session->setFlash(__('Usuário ou senha inválidos'));
		}
	}

	public function logout(){
		return $this->redirect($this->Auth->logout());
	}	

    public function beforeFilter(){
    	
        $this->Auth->allow('login','signup');
		$this->Auth->deny('edit');
        $this->loadModel('Cart');       
        $this->set('count',$this->Cart->getCount());

        $this->loadModel('Category');       
        $this->set('categories', $this->Category->find('all'));                
    }    

}
