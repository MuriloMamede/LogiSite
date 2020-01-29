<?php
include_once "../connection.php";
include_once "../config.php";
include_once "../function.php";
include_once "../cabecalho/index.php";

  $conexao = new Connection();

  $conexao->connect($host, $user, $password, $database);




  //verifica se os campos nao estao vazios(pois apenas com a verificacao do html, nao se confirma nada),
  //se nao estao, retira os espacos antes e depois e protege contra sql injection*/
	$id = $_GET['id'];

			$string = "SELECT  nome as categoria FROM categoria WHERE id_categoria = ".$id."";
			$conexao->query($string);
			$dados = $conexao->fetch_assoc();
			$categoria = $dados['categoria'];
			ECHO'

<div class="image-aboutus-sm-banner"style="margin-top:7px">
  <div class="container">
    <div class="row">
      <div >
       <h1 class="lg-text">'.$categoria.'</h1>

       </div>
    </div>

  </div>
  </div>
<div class="w3-content w3-display-container">';

			$string = "SELECT  id_jogo as id, nome as titulo, imagem as img, caminho as c FROM jogo WHERE jogo.id_cat = ".$id."";
			$conexao->query($string);
			$total = $conexao->num_rows();


			if($total == TRUE){
				echo "<br>A busca retornou ". $total ." resultado(s)!";
				echo'  <div class=" espacado  w3-row ">';
				for($dados = $conexao->fetch_assoc(); $dados != NULL; $dados = $conexao->fetch_assoc())
					{
					$id = $dados['id'];
					$titulo = $dados['titulo'] ;
					$caminho = $dados['c'] ;
					$imagem = $dados['img'] ;
					echo '
								<div class="w3-container w3-quarter w3-padding-24">
									<div class="w3-card-4 foto">
									<a href="../jogo/?id='.$id.'"><img src="../'.$caminho,$imagem.'" alt="'.$titulo.'" style="width:100%"></a>
									<div class="w3-container w3-center">
										<a href="../jogo/?id='.$id.'"><p>'.$titulo.'</p></a>
									</div>
									</div>
								</div>

								';

				}
				echo"</div>";
				 $conexao->close();
			}
			else {
				echo "Nenhum jogo cadastrado nessa categoria!";
				 $conexao->close();
			}

 ?>
 </div>

 <div class=" w3-black w3-center w3-padding-24 w3-margin-top">Powered by LogiSite</div>





 </body>
 </html>
