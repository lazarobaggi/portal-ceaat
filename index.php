<?php require_once('config/config.php'); ?>
<?php require_once('admin/conn.php'); ?>
<?php require_once('header.php'); ?>

<!-- Script para o Menu Hambúrguer e Barra Lateral -->

<!-- Main Content -->
<main>
    <div class="container my-4 ">

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
                            <a href="outubrorosa.hmtl" target="_blank" rel="external"><img src="uploads/outubro_rosa.jpeg" class="d-block img-fluid" alt="Imagem 1"></a>
                            <div class="carousel-caption d-none d-md-block">
                                <h5>OUTUBRO ROSA</h5>
                                <p>Descrição ou legenda sobre a imagem 1.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <a href="estudante.html" target="_blank" rel="external"><img src="uploads/foto_estudante.jpg" class="d-block img-fluid" alt="Imagem 2"></a>
                            <div class="carousel-caption d-none d-md-block">
                                <h5>VIAGEM</h5>
                                <p>Descrição ou legenda sobre a imagem 2.</p>
                            </div>
                        </div>
                        <!-- <div class="carousel-item">
                                    <img src="uploads/FOTOEDITADA.jpg" class="d-block" alt="Imagem 3">
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

        <div class="professores-container">
            <h2>PROFESSORES TÉCNICOS EM TI</h2>
            <p>A seguir os professores que mais se destacam no colégio</p>

            <div class="professores">
                <div class="professor">
                    <img src="uploads/GILBERTO.jpg" alt="Gilberto Monteiro">
                    <h3>GILBERTO MONTEIRO</h3>
                    <p>57 anos</p>
                </div>

                <div class="professor">
                    <img src="uploads/lucas.jpg " alt="Lucas Noronha">
                    <h3>LUCAS NORONHA</h3>
                    <p>27 anos, formado em análise de sistemas especializada em big, atua como professor no CEAAT desde 2019</p>
                </div>
            </div>
            <div class="professores-container">

                <div class="professores">
                    <div class="professor">
                        <div class="image-container">
                            <img src="uploads/daniel.jpg" alt="Daniel Santana">
                        </div>
                        <h3>DANIEL SANTANA</h3>
                        <p>45 anos, Sistema da informação pós-graduado pela UNEB & IFBA, atua como professor no CEAAT desde 2021</p>
                    </div>

                    <div class="professor">
                        <div class="image-container">
                            <img src="uploads/acacia.jpg" alt="Acácia Juriti">
                        </div>
                        <h3>ACÁCIA JURITI</h3>
                        <p>30 anos, licenciada em computação, atua como professora no CEAAT desde 2022</p>
                    </div>
                </div>

            </div>
        </div>


    </div>
</main>



<?php require_once('footer.php'); ?>