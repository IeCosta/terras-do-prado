<?php 
    session_start();
    include "./cabecalho.php";
    include "./nav.php";
?>

    <main>
            <div class="seccao_inicial">
                <video id="video" preload="" autoplay="" muted="" playsinline="" loop="">
                    <source src="../img/galeria/video_paisagem_verde.mp4" type="video/mp4">
                </video>
                <div class="seccao_inicial_separador">
                    <img src="../img/separador.png">
                </div>
            </div>

            <div id="sobre" style="margin-bottom: 50px;"></div>

            <div class="row mx-auto seccao_sobre">

                <div class="col-sm-12 col-md-7">
                    <img src="../img/galeria/equipamentos_tecnologia1.jpg" alt="" class="imagem-animacao1">
                </div>
                <div class="col-sm-12 col-md-5 my-auto">
                    <div class="card text-center mx-auto cartao-animacao1">
                        <div class="card-header">
                            <h5 class="card-title">Empresa</h5>
                        </div>
                        <div class="card-body">
                            <p class="card-text">
                                Fundada em 2015, a Terras do Prado SA, apresenta-se como uma organização
                                 de vanguarda e de referência na prestação de serviços para a agricultura, 
                                 seguindo uma estratégia de inovação e aplicação de novas tecnologias seguindo
                                 em direção à Agricultura Inteligente ou de Precisão.</p>
                            <a href="./sobre.php" class="btn btn-primary">Conhecer mais...</a>
                        </div>
                    </div>
                </div>

            </div>

            <div id="servicos" style="margin-bottom: 50px;"></div>

            <div class="row mx-auto seccao_servicos">

                <div class="col-sm-12 col-md-7">
                    <img src="../img/galeria/colheita_fenos2.jpg" alt="" class="imagem-animacao2">
                </div>
                <div class="col-sm-12 col-md-5 my-auto">
                    <div class="card text-center mx-auto cartao-animacao2">
                        <div class="card-header">
                            <h5 class="card-title">Serviços</h5>
                        </div>
                        <div class="card-body">
                            <p class="card-text">
                            A cultura do arroz, a cultura das forragens
                                e a limpeza de matos em floresta, são as principais
                                àreas de atuação da Terras do Prado SA. Representando 60% da faturação,
                                a cultura do arroz é a atividade principal. A modernização e otimização dos
                                processos produtivos permitem a oferta de vantagens competitivas
							    perante a concorrência direta.
                            </p>
                            <a href="./servicos.php" class="btn btn-primary">Saber mais...</a>
                        </div>
                    </div>
                </div>

            </div>

            <div id="galeria" style="margin-bottom: 50px;"></div>
            
            <div class="row mx-auto seccao_galeria">

                <div class="col-sm-12 col-md-7">
                    <div id="carouselExampleIndicators" class="carousel slide carousel-fade imagem-animacao3" data-bs-ride="carousel">
                        <!--<div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                        </div>-->
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="2000">
                                <img src="../img/galeria/galeria1.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item" data-bs-interval="2000">
                                <img src="../img/galeria/galeria2.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item" data-bs-interval="2000">
                                <img src="../img/galeria/galeria3.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item" data-bs-interval="2000">
                                <img src="../img/galeria/galeria4.jpg" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Anterior</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Seguinte</span>
                        </button>
                    </div>
                </div>
                <div class="col-sm-12 col-md-5 my-auto">
                    <div class="card text-center mx-auto cartao-animacao3">
                        <div class="card-header">
                            <h5 class="card-title">Galeria</h5>
                        </div>
                        <div class="card-body">
                            <p class="card-text">
                                Queremos contribuir para o crescimento sustentável do seu negócio. 
                                    A Terras do Prado SA, disponibiliza todo o apoio necessário, 
                                    garantindo serviços de elevada qualidade.
                                    Os serviços fornecidos permitem executar todos os processos do
                                     ciclo produtivo da cultura do arroz, aplicação
                                    de herbicidas, preparação das terras, sementeira, 
                                    adubação, aplicação de tratamentos, colheita e transporte 
                                    para a indústria.
                            </p>
                          <a href="./galeria.php" class="btn btn-primary">Ver mais...</a>
                        </div>
                      </div>
                </div>

 
            </div>

            <div id="contatos" style="margin-bottom: 50px;"></div>
            
            <div class="row mx-auto seccao_contatos">

                <div class="col-sm-12 col-md-7 mapa">
                    <iframe	src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12418.685019264847!2d-8.648916403162799!3d38.90863239332788!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd19054b960858c5%3A0xd7b23db3af7ae15c!2sTerras%20do%20prado!5e0!3m2!1spt-PT!2spt!4v1699732091047!5m2!1spt-PT!2spt" 
							allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="imagem-animacao4">							
					</iframe>
                </div>
                <div class="col-sm-12 col-md-5 my-auto">
                    <div class="card text-center mx-auto cartao-animacao4">
                        <div class="card-header">
                            <h5 class="card-title">Contatos</h5>
                        </div>
                        <div class="card-body">
                            <p class="card-text">
                                A Terras do Prado SA está sediada em Lisboa, 
                                    possuindo o seu estaleiro de equipamentos no Ribatejo,
                                    concelho de Coruche, Freguesia do Biscainho.
                                    Entre em contato com o nosso apoio ao cliente, 
                                    exponha a sua necessidade e obtenha mais informações.
                                    Não hesite em contatar os nossos serviços!
                            </p>
                          <a href="./contatar.php" class="btn btn-primary">Entrar em contato...</a>
                        </div>
                      </div>
                </div>
                
            </div>

    </main>

<?php include "rodape.php" ?>