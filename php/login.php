<?php
	session_start();
	
	if (isset($_SESSION['userName']) != null){
		
		header("location: ./index.php#");
    	exit();
	}else{
		include "cabecalho.php";
	}
?>

<!--ficheiros css próprios
configuraзгo css da pбgina principal (index)-->
<link rel="stylesheet" type="text/css" href="../css/login.css">
	
	<div class="seccao_login">
	</div>
		<div class="formulario">
			<p class="cabecalho_formulario"><strong>Área Reservada</strong></p>
			<div class="container" align="center">
				<form action='.\verify_login.php' method="post">
					<div class="mb-3" align="center">
						<br>
						<label for="user" class="form-label">Utilizador</label>
						<input type="text" class="form-control" id="username" name="username"
						aria-describedby="username" required>
					</div>
					<div class="mb-3" align="center">
						<label for="pass" class="form-label">Password</label>
						<input type="password" class="form-control" id="pass" name="pass"
						required>
					</div>
					<!--
					<div class="mb-3 form-check" align="left">
						<input type="checkbox" class="form-check-input" id="remember">
						<label class="form-check-label" for="remember">Relembrar</label>
					</div>
					-->
					<div class="mb-3 form-check" align="center">
					<button type="submit" class="btn btn-primary">Entrar</button>
					</div>
				</form>
				<a href="./cria_utilizador.php">Registar novo utilizador</a>
			</div>
		</div>
		
		<h4 style="color: red; background-color: white;">
			<?php 
			if (isset($_SESSION['invalidUser']) != null){
				echo ("Erro: "+ $_SESSION['invalidUser']);
			}
			?>
		</h4>

<?php include "./rodape.php" ?>