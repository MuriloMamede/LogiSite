<?php
include_once "../connection.php";
include_once "../config.php";
include_once "../function.php";
?>
<html>
    <head>
        <title>Criar Cadastro</title>
        <meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" type="text/css" href="../css/form.css">
    </head>
    <body class="w3-display-container">
		<div class="w3-display-middle w3-mobile">
			<div class="form  w3-card-4  ">
			  <form class="w3-container" action="../cadastrar/" method="POST" accept-charset="UTF-8">
				<div class="w3-section">
				  <label><b>Nome</b></label>
				  <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Insira o Nome" name="nome" required>
				  <label><b>Usuário</b></label>
				  <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Insira o Usuário" name="usuario" required>
				  <label><b>Senha</b></label>
				  <input class="w3-input w3-border w3-margin-bottom" type="password" placeholder="Insira a Senha" name="senha" required>
				  <label><b>Confirmar Senha</b></label>
				  <input class="w3-input w3-border w3-margin-bottom" type="password" placeholder="Insira a Senha Novamente" name="Csenha" required>
				  <button class="w3-button w3-block w3-green w3-section w3-padding" type="submit"value="cadastrar">Cadastrar</button>

				</div>
			  </form>


			</div>
		  </div>
		</div>

  </body>
</html>


<?php

if(($_SERVER['HTTP_REFERER'] === 'http://localhost/site/cadastrar/') || ($_SERVER['HTTP_REFERER'] === 'http://localhost/site/cadastrar/index.php') )
{//verifica se está vindo dessa página, e impede de executar o codigo sem completar o form
  $conexao = new Connection();

  $conexao->connect($host, $user, $password, $database);




  //verifica se os campos nao estao vazios(pois apenas com a verificacao do html, nao se confirma nada),
  //se nao estao, retira os espacos antes e depois e protege contra sql injection*/
  if(empty($_POST['nome'])==FALSE)
  {
    $nome = addslashes(trim($_POST['nome']));
  }else
  {
    $nome = false;
  }//ok
  if(empty($_POST['usuario'])==FALSE)
  {
    $usuario = addslashes(trim($_POST['usuario']));
  }else
  {
    $usuario = false;
  }
  if(empty($_POST['senha'])==FALSE)
  {
    $senha = md5(trim($_POST['senha']));
  }else
  {
    $senha = false;
  }
  if(empty($_POST['Csenha'])==FALSE){
    $csenha = md5(trim($_POST['Csenha']));
  }else
  {
    $csenha = false;
  }


//vefica se estao vazios, se estao vazio, chama o metodo dos espertinhos
  if(($nome == false) || ($senha == false) || ($csenha==false) || ($usuario ==false))
  {
    $conexao->close();
    preenche_campo();

  }else
  {
    $string = "SELECT login from usuario where login like '".$usuario."'";
    $conexao->query($string);
    $total = $conexao->num_rows();//verifica se algum linha foi encontrada e retorna booleano
    if ($total == FALSE)
    {
      if($senha == $csenha)
      {
        $string = "INSERT INTO usuario (nome, login, senha) VALUES ('".$nome."', '".$usuario."', '".$senha."')";
        $conexao->query($string);
        cadastro_sucedido();
        $conexao->close();
      }else
      {
        $conexao->close();
        senha_erro();
      }
    }else
    {
      $conexao->close();
      usuario_existente();
    }
  }
}


?>
