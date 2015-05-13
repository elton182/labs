<?php
	App::uses('AppController', 'Controller');	
	
	class AdminController extends AppController{	

		public $components = array('Paginator', 'Session');
		
		public function index(){
			$this->layout = 'admin';
		}

		public function products(){		
	
			$this->layout = 'admin';
			$this->loadModel('Product');  
			$this->set('products', $this->Product->find('all'));							
			

		}
		public function productEdit($id = null){

			if ($this->request->is('post')){
				//$this->autoRender = false;

				$this->layout = 'admin';
				$this->loadModel('Product');  
				$options = array('conditions' => array('Product.' . $this->Product->primaryKey => $id));
				$this->set('product', $this->Product->find('first', $options));			
				
				debug($this->request->data);

				$this->Product->set(array(
					'id' => $id,
					'name' => $this->request->data['Product']['Nome'],
					'description' => $this->request->data['Product']['Descrição'],
					'price' => $this->request->data['Product']['Preço'],
					'image' => ''
					));
				$this->Product->save();

				$this->set('product', $this->Product->find('first', $options));			

			}
			else {
				$this->layout = 'admin';
				$this->loadModel('Product');  
				$options = array('conditions' => array('Product.' . $this->Product->primaryKey => $id));
				$this->set('product', $this->Product->find('first', $options));			
			}	
		}

		public function edit($id = null){
			$this->layout = 'admin';

			$this->loadModel('Product');  
			$this->set('products', $this->Product->find('all'));
		}


	    public function beforeFilter(){
	    		        
			$this->Auth->deny();	                
	    }    		

	}



?>