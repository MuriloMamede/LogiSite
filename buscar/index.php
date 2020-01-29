<?php
include_once "../connection.php";
include_once "../config.php";
include_once "../function.php";



include_once "../cabecalho/index.php";
?>



				</div>
			  </div>
			</nav>
		</div>
		<div class="w3-mobile">
			<div>
				<div class="form  w3-card-4 w3-middle">
					<form class="w3-container " action="" method="get" accept-charset="UTF-8">
					<div class="w3-section ">
						<label class="w3-topleft"><h3>Buscar na Categoria:</h3></label>
						<select class="w3-select w3-border" name="opcao" >
						 <option value="0" >Todas</option>
						 <option value="1">Android</option>
						 <option value="2">Pc</option>
						 <option value="3">Ios</option>
						 <option value="3">Online</option>
						</select>

						<div class="w3-padding-24">

						 <input class="w3-input w3-border" type="text" placeholder="Digite a Busca" name="busca" >
						 <input class="w3-button w3-right w3-black w3-section w3-padding" type="submit" onclick="testephp()" value="Buscar">
					 </div>
					</div>
					</form>


				</div>
				</div>
			</div>
		</div>


<?php
if(isset($_SERVER['HTTP_REFERER'])){
	$urls = explode("?", $_SERVER['HTTP_REFERER']);
	$url_busca=$urls[0];

	if(($_SERVER['HTTP_REFERER'] === $url.'buscar/') || ($_SERVER['HTTP_REFERER'] === $url.'buscar/index.php')  || ($url_busca == $url.'site/buscar/') || ($url_busca == $url.'buscar/index.php') )
	{//verifica se está vindo dessa página, e impede de executar o codigo sem completar o form
	if(isset($_GET['busca'])){

		$conexao = new Connection();

	  $conexao->connect($host, $user, $password, $database);




	  //verifica se os campos nao estao vazios(pois apenas com a verificacao do html, nao se confirma nada),
	  //se nao estao, retira os espacos antes e depois e protege contra sql injection*/
	  $busca = trim($_GET['busca']);
	  $tamanhobusca = strlen($busca);
		$id = $_GET['opcao'];

	  if($tamanhobusca > 3)
	  {
	    $busca = addslashes(trim($_GET['busca']));
	  }else
	  {
	    $busca = false;
	    preenche_busca();
	  }
	  if(($busca == false)  )
	  {
	    $conexao->close();
	  }else
	  {
			if($id != 0){
				$string = "SELECT  id_jogo as id, nome as titulo, imagem as img, caminho as c FROM jogo WHERE jogo.nome like '%".$busca."%' and jogo.id_cat = ".$id."";

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
									<div class="w3-container w3-quarter w3-padding-16">
										<div class="w3-card-4 foto" style="width:80%">
										<a href="../jogo/?id='.$id.'"><img src="../'.$caminho,$imagem.'" alt="'.$titulo.'" style="width:100%"></a>
										<div class="w3-container w3-center">
											<a href="../jogo/?id='.$id.'"><p>'.$titulo.'</p></a>
										</div>
										</div>
									</div>
									';

					}
					echo"</div>";
				}
				else {
					echo "A busca retornou nenhum jogo!";
				}
			}
	    else{
				$string = "SELECT  id_jogo as id, nome as titulo, imagem as img, caminho as c FROM jogo WHERE jogo.nome like '%".$busca."%'";

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
		                <div class="w3-card-4 foto" style="width:80%">
		                <a href="../jogo/?id='.$id.'"><img src="../'.$caminho,$imagem.'" alt="'.$titulo.'" style="width:100%"></a>
		                <div class="w3-container w3-center">
		                  <a href="../jogo/?id='.$id.'"><p>'.$titulo.'</p></a>
		                </div>
		                </div>
		              </div>
		              ';

		  		}
		      echo"</div>";

		    }
		    else {
		      echo "A busca retornou nenhum jogo!";
		    }
			}
	  }

	}
	}
}



 ?>
 <div class="  w3-center w3-container w3-padding-24 w3-margin-top w3-black" >Powered by LogiSite</div>





 </body>
 </html>
