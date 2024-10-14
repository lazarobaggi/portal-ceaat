<?php require_once('config/config.php'); ?>
<?php require_once('admin/conn.php'); ?>
<?php require_once('header.php'); ?>

    <!-- Script para o Menu Hambúrguer e Barra Lateral -->

        <!-- Main Content -->
        <main>
            <div class="container my-4 ">
                <!-- Professores em destaque -->
                <h2>Corpo Decente</h2>
                <div class="professores">
                    <img src="prof1.jpg" alt="Professor 1">
                    <img src="prof2.jpg" alt="Professor 2">
                    <img src="prof3.jpg" alt="Professor 3">
                </div>

                <div class="row mt-4 d-flex justify-content-center ">
                    <!-- Carrossel -->
                    <div class="col-md-6 w-100">
                        <div id="carouselExampleCaptions" class="carousel slide d-flex" data-bs-ride="carousel">
                            <!-- Indicadores -->
                            <div class="carousel-indicators w-100 d-flex justify-content-center">
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>

                            <!-- Slides do Carrossel -->
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <a href="outubrorosa.hmtl" target="_blank" rel="external"><img src="assets/css/js/images/outubro_rosa.jpeg" class="d-block img-fluid" alt="Imagem 1"></a>
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>OUTUBRO ROSA</h5>
                                        <p>Descrição ou legenda sobre a imagem 1.</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <a href="estudante.html" target="_blank" rel="external"><img src="assets/css/js/images/foto_estudante.jpg" class="d-block img-fluid" alt="Imagem 2"></a>
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>VIAGEM</h5>
                                        <p>Descrição ou legenda sobre a imagem 2.</p>
                                    </div>
                                </div>
                                <!-- <div class="carousel-item">
                                    <img src="assets/css/js/images/FOTOEDITADA.jpg" class="d-block" alt="Imagem 3">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Título da Imagem 3</h5>
                                        <p>Descrição ou legenda sobre a imagem 3.</p>
                                        <picture>
                                            <source media="(max-width: 768px)" srcset="imagem-720x480.jpg">
                                            <source media="(max-width: 1200px)" srcset="imagem-1280x720.jpg">
                                            <img src="imagem-1920x1080.jpg" alt="Descrição da Imagem">
                                        </picture>
                                        
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    
    

<?php require_once('footer.php'); ?>