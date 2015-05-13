<?php
app::uses('AppController', 'Controller');

class CategoriesController extends AppController{
	
    public function index() {

    	$this->set('categories', $this->Category->find('all'));    
        
    }
   
    public function beforeFilter(){
        $this->Auth->allow();

        $this->loadModel('Cart');       
        $this->set('count',$this->Cart->getCount());

        $this->loadModel('Category');       
        $this->set('categories', $this->Category->find('all'));                
    }                
}


?>