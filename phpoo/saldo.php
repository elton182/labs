<?php
	
	//require_once('FirePHPCore/FirePHP.class.php');

	ini_set('display_errors', true);

	class banco 
	{

		public $saldo;
		public $saque;
		
		public function setSaldo($newsaldo){
			$this->saldo = $newsaldo;
		}
		public function setSaque($saque){
			$this->saque = $saque;
		}
		
		public function getSaldo(){
			try {
				return $this->saldo;
			} catch (Exception $e) {
				var_dump($e->getMessage());
			}
			
		}

		public function getSaque(){
			return $this->saque;
		}

		public function sacar(){
			if($this->getSaldo() < $this->getSaque()){
				echo 'sem limite';
			}
			else{	
				$this->saldo = $this->saldo - $this->saque;

				echo 'sacou '.$this->getSaque();
			}
			
		}
		

	}

	echo 'comecando';
	$banco = new banco();
	$banco->setSaldo(5000);
	echo '<br>';
	echo $banco->getSaldo();	
	echo '<br>';
	$banco->setSaque(300);
	echo '<br>';
	$banco->sacar();
	echo '<br>';
	echo 'saldo atual '. $banco->getSaldo();

?>