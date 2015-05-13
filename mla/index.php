
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta htt-equip="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<title>Portal Aprovações MLA></title>
		<link rel="stylesheet" type="text/css" href="public/css/custom.css">		
		<link rel="stylesheet" type="text/css" href="public/css/bootstrap.css">		
		<link rel="stylesheet" type="text/css" href="public/css/login.css">
		<link rel="stylesheet" href="components/jquery-ui/jquery-ui.min.css">
		<script src="components/jquery/jquery.js"></script>
		<script src="components/jquery-ui/jquery-ui.min.js"></script>

	</head>
	<body>
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-8">

			</div>
			
		</div>	
		<div class="container">			
			
			<form class="form-signin" role="form" method="POST" name="login" action="index.php">
				<h2 class="form-signin-heading">LOGIN</h1>   	
			   	<label>Usuário</label>
			   	<input type="text" name="user" class="form-control" placeholder="Usuário">
				<label>Senha</label>
				<input type="password" name="pass" class="form-control" placeholder="Senha">
				<button class="btn btn-lg btn-primary btn-block" type="submit" value="login" >Login</button>

			</form>
				
		</div>
		
		<?php 		
		
			if($_SERVER['REQUEST_METHOD'] == 'POST'){
				
				$user = htmlspecialchars($_POST['user']);
				$pass = htmlspecialchars($_POST['pass']);

				if ($user == 'totvs_ems' &&
				    $pass == 'cevada'){

					session_start();
					$_SESSION['login'] = "1";
					$_SESSION['usuario'] = $user;
					$_SESSION['senha'] = $pass;
				   	header("Location:documentos.php");
				}
				else{

				}
				
			}
		?>

	</body>

</html>