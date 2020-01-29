<?php
include_once "../connection.php";
include_once "../config.php";
include_once "../function.php";



include_once "../cabecalho/index.php";
$conexao = new Connection();

$conexao->connect($host, $user, $password, $database);

$string = "SELECT  id_jogo as id, nome as titulo, caminho as c, linkk as link, descri as descricao, imagem as img
 FROM jogo WHERE id_jogo = ".$_GET['id']."";

$conexao->query($string);
  $dados = $conexao->fetch_assoc();
  $id = $dados['id'];
  $titulo = $dados['titulo'] ;
  $caminho = $dados['c'] ;
  $link = $dados['link'];
  $descricao =$dados['descricao'];
  $imagem = $dados['img'];

ECHO'

<div class="w3-container w3-card  w3-content"style="text-align:center">
<ul class="w3-ul w3-border-bottom">
   <li class="w3-bar">
     <img src="../'.$caminho,$imagem.'" class="w3-bar-item w3-circle w3-hide-small" style="width:85px">
     <div class="w3-bar-item">
       <h2>'.$titulo.'</h2>
     </div>
   </li>

</ul>


<div class="w3-content w3-display-container  " >
</br>';

$string = "SELECT  nome as nome FROM imagem WHERE id_jogo = ".$id;
$conexao->query($string);

for($dados = $conexao->fetch_assoc(); $dados != NULL; $dados = $conexao->fetch_assoc()){
  $nome = $dados['nome'];

  echo '
  <div class="w3-display-container mySlides">
    <img src="../'.$caminho,$nome.'" alt="'.$titulo.'" class="w3-image" >
  </div>
  ';

}



?>
<button class="w3-button w3-display-left  w3-black" onclick="plusDivs(-1)">&#10094;</button>
<button class="w3-button w3-display-right w3-black" onclick="plusDivs(1)">&#10095;</button>
</div>
<?php
$string = "SELECT COUNT(id_j) AS id FROM curtidas WHERE id_j = ".$id;
$conexao->query($string);

  $dados = $conexao->fetch_assoc();
  $like = $dados['id'];

  ?>

<div class="w3-container">
<ul class="w3-ul ">
   <li class="w3-bar">
     <div class="w3-bar-item w3-right">
       <?php   if(isset($_SESSION['id_usuario']) || isset($_SESSION['nome_usuario'])){

         echo '<label class="w3-left w3-bar-item">'.$like.'</label> <a href="../curtir.php"   class="w3-button w3-circle w3-red w3-right w3-bar-item w3-large"><i class="glyphicon glyphicon-heart"></i></a>';
         $_SESSION['id_j']= $id;
      
       }
      else{
         echo '<label class="w3-left w3-bar-item">'.$like.'</label> <button class="w3-button w3-circle w3-red w3-right w3-bar-item w3-large" onclick="confirmacao()"><i class="glyphicon glyphicon-heart"></i></button>';

      }?>



     </div>
   </li>
</ul>
</div>
<div class="w3-container w3-content   ">

  <div class="w3-container w3-content ">
    <div class="w3-left-align"><p><?php echo $descricao; ?></p></div>

  </div>
</div>

<div class="w3-container  w3-border-top  w3-light-grey w3-content">
     <a href="<?php echo $link; ?>"><h2>Jogue o jogo através deste link</h2></a>

</div>
<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  x[slideIndex-1].style.display = "block";
}
</script>
<script language="Javascript">
    function confirmacao() {
      var resposta = confirm("Deseja logar para avaliar?");
     if (resposta == true) {
          window.location.href = "../entrar/";
     }
    }
    </script>
</div>
<div class="  w3-center w3-container w3-padding-24 w3-margin-top w3-black" >Powered by LogiSite</div>





</body>
</html>
