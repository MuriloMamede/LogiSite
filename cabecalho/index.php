<?php
include_once "../connection.php";
include_once "../config.php";
include_once "../function.php";


session_start();
?>
<html>
    <head>
        <title>LogiSite - Portal da Lógica</title>
        <meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" href="../img/logo.png" type="image/x-icon" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" type="text/css" href="../css/css1.css">
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
		<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="//www.devmedia.com.br/css/2013/devmedia-header-footer.min.css?d=1.7">
    <link rel="stylesheet" type="text/css" href="//www.devmedia.com.br/css/2013/devmedia.prod.css?d=1.7">




    </head>
    <body>
		<div>
			<nav class="navbar navbar-inverse">
			  <div class="container-fluid">
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				 <a href="../" class="navbar-left menu">
          <img alt="LogiSite" src="../img/logo.png" class="img-responsive ">
        </a>
				</div>
				<div class="collapse navbar-collapse" id="myNavbar">
				  <ul class="nav navbar-nav">

					<li class="dropdown">
					  <a class="dropdown-toggle" data-toggle="dropdown" href="#">Categorias <span class="caret"></span></a>
					  <ul class="dropdown-menu">
						<li><a href="../categoria/index.php?id=1">Android</a></li>
						<li><a href="../categoria/index.php?id=2">PC</a></li>
						<li><a href="../categoria/index.php?id=3">Ios</a></li>
						<li><a href="../categoria/index.php?id=4">Online</a></li>
					  </ul>
					</li>


					<li><a href="../buscar/">Buscar</a></li>
					<li><a href="../sobre/">Sobre</a></li>
					<li><a href="#">Sugestões</a></li>
				  </ul>

          <ul class="nav navbar-nav navbar-right">
            <?php   if(isset($_SESSION['id_usuario']) || isset($_SESSION['nome_usuario'])){
          		//Usuario nao logado! Redireciona para a pagina de login
          		echo '<li><a href="../sair.php"><span class="glyphicon glyphicon-log-out"></span> Sair</a></li></ul>';

          	}
           else{
             echo'<li><a href="'.$url.'cadastrar/"><span class="glyphicon glyphicon-user"></span> Cadastrar</a></li>
   					<li><a href="'.$url.'entrar/"><span class="glyphicon glyphicon-log-in"></span> Entrar</a></li>
   				  </ul>';

           }?>

				</div>
			  </div>
			</nav>
		</div>
