<?php 

	$user = $_POST['user'];
	$pass = $_POST['pass'];

	if ($user == 'admin' &&
	    $pass == 'admin'){

	   	print_r("logou");
	}
		

?>