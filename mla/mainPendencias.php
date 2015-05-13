_<?php 

	session_start();
		
	if(!(isset($_SESSION['login']) || 
		$_SESSION['login']!='')){
		header("Location:index.php");
	}
			
?>

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
		<link rel="stylesheet" type="text/css" href="public/css/yeti.css">				
	</head>
	<body>
		<div class="container">
			<div class="header">
				<h1 class="empresa">Empresa</h1>
			</div>
			<div class="content">
				<!--
				<script type="text/javascript">
					var w = window,
					    d = document,
					    e = d.documentElement,
					    g = d.getElementsByTagName('body')[0],
					    x = w.innerWidth || e.clientWidth || g.clientWidth,
					    y = w.innerHeight|| e.clientHeight|| g.clientHeight;
					alert(x + ' × ' + y);
				</script>
				-->
				<h1 class="title">Pendencias de Aprovação</h1>
				<?php include "pendencias.php" ?>
			</div>
			<div class="footer">
			Desenvolvido por...
			</div>
		</div>
	</body>
</html>		
