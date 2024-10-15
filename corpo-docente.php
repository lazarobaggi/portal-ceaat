<?php require_once('config/config.php'); ?>
<?php require_once('admin/conn.php'); ?>
<?php require_once('header.php'); ?>

    <!-- Script para o Menu Hambúrguer e Barra Lateral -->

        <!-- Main Content -->
        <main>
            <div class="container my-4 ">
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