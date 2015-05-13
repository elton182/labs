<?php
	
	
	if(!(isset($_SESSION['login']) || 
	$_SESSION['login']!='')){
		header("Location:/mla/index.php");		
	}		

?>