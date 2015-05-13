<?php
App::uses('AppController', 'Controller');
 
class CartsController extends AppController {
 
    public $uses = array('Product','Cart');
     
	public function add() {
		$this->autoRender = false;
		if ($this->request->is('post')) {
			$this->Cart->addProduct($this->request->data['Cart']['product_id']);
		}
		echo $this->Cart->getCount();
	}

	public function view() {
		$carts = $this->Cart->readProduct();
		$products = array();
		if (null!=$carts) {
			foreach ($carts as $productId => $count) {
				$product = $this->Product->read(null,$productId);
				$product['Product']['count'] = $count;
				$products[]=$product;
			}
		} 
		$this->set(compact('products'));
	}
	public function update() {
	    if ($this->request->is('post')) {
	        if (!empty($this->request->data)) {
	            $cart = array();
	            foreach ($this->request->data['Cart']['count'] as $index=>$count) {
	                if ($count>0) {
	                    $productId = $this->request->data['Cart']['product_id'][$index];
	                    $cart[$productId] = $count;
	                }
	            }
	            $this->Cart->saveProduct($cart);
	        }
	    }
	    debug($cart);
	    $this->redirect(array('action'=>'view'));
	} 	

	public function delete(){
		$this->autoRender = false;

		if ($this->request->is('get')){
			
			$id = $this->request->query['delete'];			

			$carts = $this->Cart->readProduct();
			unset($carts[$id]);
		}

		$this->Cart->saveProduct($carts);
		
		$this->redirect(array('action'=>'view'));
		
	}

    public function beforeFilter(){
        $this->Auth->allow();


        $this->loadModel('Cart');       
        $this->set('count',$this->Cart->getCount());

        $this->loadModel('Category');       
        $this->set('categories', $this->Category->find('all'));            
    }    


}