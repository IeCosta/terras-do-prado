		<nav class="navbar sticky-top navbar-expand-lg"><!-- sticky-top fixa a barra de navegação no topo -->
			
			<div class="mx-auto"> <!-- mx-auto centra os items de menu -->
				
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="ms-auto collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav me-auto mb-2 mb-lg-0">
						
						<a class='navbar-brand' href='#'><img src="../img/logotipo.jpeg" alt=""></a>
						
						<li class="nav-item">
							<a class="nav-link" aria-current="page" href="#">Início</a>
						</li>
						<li class='nav-item'>
							<a class='nav-link mx-2' href='index.php#sobre'>Sobre</a>
						</li>
						<li class='nav-item'>
							<a class='nav-link mx-2' href='index.php#servicos'>Serviços</a>
						</li>
						<li class='nav-item'>
							<a class='nav-link mx-2' href='index.php#galeria'>Galeria</a>
						</li>
						<li class='nav-item'>
							<a class='nav-link mx-2' href='index.php#contatos'>Contatos</a>
						</li>
						<?php
							if (isset($_SESSION['user_level']) >= 1){
								echo ("<li class='nav-item'>
										<a class='nav-link mx-2' href='../../app_asm/php/app_gestao.php#'>Área Reservada</a>
									</li>");
							}
						?>
					</ul>
				</div>
			</div>
		</nav>
