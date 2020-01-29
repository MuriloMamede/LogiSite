<?php
include_once "connection.php";
include_once "config.php";
include_once "config.php";
include_once "verifica.php";

if(isset($_SERVER['HTTP_REFERER'])){
	$urls = explode("?", $_SERVER['HTTP_REFERER']);
	$url_busca=$urls[0];

	if(($url_busca == $url.'jogo/index.php') || ($url_busca == $url.'jogo/'))
	{//verifica se está vindo dessa página, e impede de executar o codigo sem completar o form
    $conexao = new Connection();

    $conexao->connect($host, $user, $password, $database);

    $string = "SELECT id_j AS id FROM curtidas WHERE id_u = ".$_SESSION['id_usuario']." and id_j = ".$_SESSION['id_j'];
    $conexao->query($string);

      $total = $conexao->num_rows();
      if($total >0){
        $string = "DELETE FROM curtidas WHERE id_u = ".$_SESSION['id_usuario']." and id_j = ".$_SESSION['id_j'];
        $conexao->query($string);
        header("location: ".$url."jogo/?id=".$_SESSION['id_j']);
      }
      if($total==0){
        $id_u = $_SESSION['id_usuario'];
        $id_j = $_SESSION['id_j'];
        $string = "INSERT INTO curtidas(id_j,id_u) values (".$id_j.",".$id_u.")";
        $conexao->query($string);
        header("location:".$url."jogo/?id=".$_SESSION['id_j']);
      }

      echo "</br>";
      echo $_SESSION[ 'id_usuario'];
	}
}

?>
