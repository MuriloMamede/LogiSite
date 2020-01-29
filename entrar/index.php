
<html>
    <head>
        <title>Entrar na Conta</title>
        <meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" type="text/css" href="../css/form.css">
    </head>
    <body class="w3-display-container" >
		<div class="w3-display-middle w3-mobile">
			<div>
				<div class="form  w3-card-4  " >
				  <form class="w3-container" action="../processa.php" method="POST" accept-charset="UTF-8">
					<div class="w3-section">
					  <label><b>Usuário</b></label>
					  <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Insira o Usuário" name="usuario" required>
					  <label><b>Senha</b></label>
					  <input class="w3-input w3-border" type="password" placeholder="Insira a Senha" name="senha" required>
					  <input class="w3-button w3-block w3-green w3-section w3-padding" type="submit" value="Entrar">

					</div>
				  </form>

				  <div class="w3-container w3-border-top w3-padding w3-light-grey">
					<span class="w3-right w3-padding ">Não possui <a href="../cadastrar/">Cadastro?</a></span>
				  </div>

				</div>
			  </div>
			</div>
		</div>


	</body>
</html>
