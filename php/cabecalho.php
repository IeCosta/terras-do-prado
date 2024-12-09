<?php

    $_SESSION['licence_id'] = 1; // IMPORTANTE!!! Colocar o id da licenca da app AliVic-ASM

    # Mostra mensagem de alerta vinda do carregamento na BD
    if(isset($_GET['msg'])){
        echo "<script>alert('" . $_GET['msg'] . "');</script>";
    }

?>

<!DOCTYPE html>
<html lang="pt-pt">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Terras Do Prado</title>

        <link rel="shortcut icon" href="../img/logotipo.jpg" type="image/x-icon">
        
        <!--CSS da biblioteca Bootstrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <!--JS da biblioteca Bootstrap-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

        <!--Icones da biblioteca Bootstrap-->
	    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

        
        <link rel="stylesheet" href="../css/index.css">

    </head>


    <body>
        <header class="cabecalho">
                <div class="row text-center">
                    <div class="col-sm-12 col-md-3 my-auto">
						<a href="./index.php">
                        	<img src="../img/logotipo.jpeg" alt="" class="logotipo">
						</a>
                    </div>

                    <div class="col-sm-12 col-md-6 my-auto">
                        <p class="titulo">
                            Terras do Prado SA
                        </p>
                    </div>

                    <div class="col-sm-12 col-md-3 my-auto">
                        <a href="https://www.instagram.com/" target="_blank" class="redes_sociais">
                            <img src="../img/instagram.png" alt="" title="">
                        </a>
                        <a href="https://pt.linkedin.com/" target="_blank" class="redes_sociais">
                            <img src="../img/Linkedin.png" alt="">
                        </a>
                        <a href="https://www.facebook.com/" target="_blank" class="redes_sociais">
                            <img src="../img/facebook.png" alt="">
                        </a>
						<?php if (isset($_SESSION['userName']))
							echo ("&nbsp;&nbsp;");
						?>
                        &nbsp;&nbsp;
						<?php if (isset($_SESSION['userName'])){
                                    $id=$_SESSION['id_user'];
                                    if (($_SESSION['userLevel']) > 1){
                                        echo ("<a href='../../app_asm/php/app_gestao.php?id=$id' class='login'><img src='../../app_asm/img/users/".($_SESSION['photo'])."' class='imagem_login'/></a>");
                                    } else {
                                        echo ("<a href='../../app_asm/php/app_servicos.php?id=$id' class='login'><img src='../../app_asm/img/users/".($_SESSION['photo'])."' class='imagem_login'/></a>");
                                    }
									//echo ("<a href='../../app_asm/php/app_edita_utilizador.php?id=$id' class='login'><img src='../../app_asm/img/users/".($_SESSION['photo'])."' class='imagem_login'/></a>");
									echo ("<a href='../../app_asm/php/app_logout.php' class='logout'><img src='../img/logout.jpg' alt=''></a>");
									echo ("<br>");
									echo ("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									 Bem vindo ". $_SESSION['userName']);
								}else{
									echo ("<a href='../../app_asm/php/app_login.php' title='Aceder à àrea reservada' class='login'>
												<img src='../img/login_preto.png' alt=''>
											</a>");
								}
						?>
                    </div>
                </div>
        </header>
