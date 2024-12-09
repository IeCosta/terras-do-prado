<?php 
	include "./cabecalho.php";
	include "./nav.php";

 ?>

<link rel="stylesheet" href="../css/contatar.css">
	
<main>
	
	<div class="seccao_contatar">
		<div class="row">
			<div class="col-sm-12 col-md-6">
					<div class="card text-center mb-3">
						<div class="card-body">
							<h5 class="card-title">CONTATOS</h5>
							<p class="card-text"><b>
							SEDE:
							</b></p>
							<p class="card-text">
							AV DO ATLÂNTICO LOTE 1.19.02A 14º ESCRITÓRIO 8
							1990-019 - PARQUE DAS NAÇÕES
							LISBOA
							+351 900 000 000
							geral@terrasdoprado.pt
							</p><br>
							<p class="card-text"><b>
							PARQUE DE MÁQUINAS:
							</b></p>
							<p class="card-text">
							R. dos Olhos 'Água 41
							2100-... - BISCAINHO
							+351 900 000 000
							geral@terrasdoprado.pt
							</p><br>
							<p class="card-text">
							Chamada para rede fixa nacional de acordo com o seu tarifário
							Chamada para rede móvel nacional de acordo com o seu tarifário
							</p>
						</div>
					</div>
			</div>			
			
			<div class="col-sm-12 col-md-6">
				<div class="seccao_cria_msg">
						<p>PEDIDO DE INFORMAÇÃO</p>
						<div class="container">
							<br>
							<form action="../../app_asm/php/app_cria_msg_bd.php" method="post" enctype="multipart/form-data">
							<div class="row mx-auto">
									<div class="col-sm-12 col-lg-6">
										<div class="mb-3">
											<label for="message_contact_name" class="form-label">Nome
												<img src="../img/utilizador.png" class="icone"/>
											</label>
											<input type="text" class="form-control" id="message_contact_name" aria-describedby="message_contact_name"
											name="message_contact_name" required>
										</div>
										<div class="mb-3">
											<label for="message_contact_phone" class="form-label">Telefone  
											<img src="../img/telefone.png" class="icone"/>
											</label>
											<input type="tel" class="form-control" id="message_contact_phone" aria-describedby="message_contact_phone"
											name="message_contact_phone" required>
										</div>
										<div class="mb-3">
											<label for="message_contact_email" class="form-label">Email  
											<img src="../img/email.png" class="icone"/>
											</label>
											<input type="email" class="form-control" id="message_contact_email" aria-describedby="message_contact_email"
											name="message_contact_email" required>
										</div>
									</div>
									<div class="col-sm-12 col-lg-6">
										<div class="mb-3">
											<label for="message_contact_address" class="form-label">Localidade
											<img src="../img/localizacao.png" class="icone"/>
											</label>
											<input type="text" class="form-control" id="message_contact_address"
											name="message_contact_address" required>
										</div>
										<div class="mb-3">
											<label for="message_contact_text" class="form-label">Mensagem
											<img src="../img/msg.png" class="icone"/>
											</label>
											<textarea id="message_contact_text" name="message_contact_text" rows="3" class="form-control" required></textarea>
										</div>

										<div class="mb-3 form-check text-center">
											<button type="submit" class="btn btn-primary" id="enviar_msg">ENVIAR</button>
										</div>
									</div>
								</div>
							</form>
						</div>
				</div>
			</div>

		</div>
	</div>

</main>

<?php include "./rodape.php" ?>
