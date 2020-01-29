<?php
	//Inicia sessoes
	session_start();

	//Verifica se existe os dados da sessao de login
	if(!isset($_SESSION['id_usuario']) || !isset($_SESSION['nome_usuario'])){
		//Usuario nao logado! Redireciona para a pagina de login
		echo "Você precisa estar logado";
		header('Refresh:1; url=../site/entrar/');
		exit;
	}
?>
