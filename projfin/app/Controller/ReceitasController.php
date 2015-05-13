<?php

App::uses('Controller', 'Controller');

	class ReceitasController extends AppController {

		public $helpers = array('Html');

		

		public function index(){
			$this->loadModel('Income');
							
			$this->set('receitas', $this->Income->find('all'));
		}

	}


?>