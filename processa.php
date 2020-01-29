<?php
	include_once "connection.php";
	include_once "config.php";
	include_once "function.php";

	if(($_SERVER['HTTP_REFERER'] === 'http://localhost/site/entrar/') || ($_SERVER['HTTP_REFERER'] === 'http://localhost/site/entrar/index.php'))
	{

	  $conexao = new Connection();

	  $conexao->connect($host, $user, $password, $database);


	  	//inicia sessoes
	  	session_start();

	  	//Recupera o login
	  	if(empty($_POST['usuario']) == FALSE){
	  		$usuario = addslashes(trim($_POST['usuario']));

	  	}else{
	  		$usuario = FALSE;
	      echo "usuario vazios";
	    }


	  	if(empty($_POST['senha']) == FALSE){
	  		$senha = MD5(trim($_POST['senha']));

	  	}else{
	  		$senha = FALSE;
	      echo "senha vazios";
	    }


	  	if($usuario == FALSE || $senha == FALSE){

	      $conexao->close();
	      preenche_campo();
	      echo "campos vazios";
	  	}
	    else{
	      $string = "SELECT  id, nome, login, senha FROM usuario WHERE login = '".$usuario."'";

	    	$conexao->query($string);

	    	if(($dados = $conexao->fetch_assoc()) == TRUE){

	    		if(strcmp($senha, $dados['senha']) == 0){

	    			//Tudo ok! Agora passa os dados para a sessão e redireciona o usuario
	    			$_SESSION['id_usuario'] = $dados['id'];
	    			$_SESSION['nome_usuario'] = stripslashes($dados['nome']);
	    			$_SESSION['id'] = $dados['id'];
						$conexao->close();
						?>
						<!DOCTYPE html>
						<html>
							<head>
								<meta charset="utf-8">
								<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
							</head>
							<body>
								<div class="w3-panel w3-green">

									<p>Bem vindo, <?php echo $_SESSION['nome_usuario'];?></p>
								</div>
							</body>
						</html>
<?php

	    			header("Refresh:1; url= ../site/");
	    		}else{
	    			//senha invalida
	    			$conexao->close();
	    			login_invalido();
	          echo "senha errada";
	    		}
	    	}else{
	    		$conexao->close();
	    		login_invalido();
	        echo "não sei";
	    	}

	    }
	 }else {

		header("location: ../site/");
	 }

?>
