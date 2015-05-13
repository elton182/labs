<?php
App::uses('AppController', 'Controller');
 
class ProductsController extends AppController {
 
    public function index() {

        $category= null;
        if ($this->request->is('get')){

            if(!empty($this->request->query['category']))
                $category = $this->request->query['category'];  
            
            if(!empty($category)){
                
                $this->set('products', $this->Product->find('all',array('conditions' => array('Product.idCategory' => $category))));    
            }
            else 
                $this->set('products', $this->Product->find('all'));
        }
        
    }
             
    public function view($id) {
        if (!$this->Product->exists($id)) {
                throw new NotFoundException(__('Invalid product'));
        }               
        $product = $this->Product->read(null,$id);
        $this->set(compact('product'));
    }  

    public function search(){        
        if ($this->request->is('post')){
            $search = $_POST['search'];

            $this->set('products', $this->Product->find('all',array('conditions' => array('Product.name LIKE' => '%'.$search.'%'))));    
            
        }
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