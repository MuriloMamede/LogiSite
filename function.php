<?php


function cadastro_sucedido()
{
	//cria um alerta no comeco da pagina
	echo '<div class="w3-panel w3-green">

		<p>Cadastro feito com sucesso!</p>
	</div>';
	header("Refresh:1; url= ../");
}
function senha_erro()
{
	//cria um alerta no comeco da pagina
	echo '<div class="w3-panel w3-red">

		<p>Senhas não Coincidem!!</p>
	</div>';

}
function usuario_existente()
{
		//cria um alerta no comeco da pagina
	echo '<div class="w3-panel w3-red">

		<p>Usuário já existente, por favor escolha outro!</p>
	</div>';

}
function preenche_campo()
{
		//cria um alerta no comeco da pagina
	echo '<div class="w3-panel w3-red">

		<p>Preencha todos os Campos Espertinho...</p>
	</div>';

}
function login_invalido()
{
	echo '<div class="w3-panel w3-red">

		<p>Usuário e/ou senha errados!!!</p>
	</div>';
}
function preenche_busca()
{
		//cria um alerta no comeco da pagina
	echo '<div class="w3-panel w3-red">

		<p>Pesquisa muito curta !!</p>
	</div>';

}



	?>
