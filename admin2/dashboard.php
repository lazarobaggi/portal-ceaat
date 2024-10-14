<?php ob_start(); ?>
<?php session_start(); ?>
<?php require_once('../header.php'); ?>


<?php if($_SESSION['usuario_role'] == "Professor"): ?>
<main>
    <div class="container my-4">

    <?php require_once('alerts.php'); ?>

        <h1>Olá professor!</h1>




    </div>
</main>
<?php elseif($_SESSION['usuario_role'] == "Aluno"): ?>
<main>
    <div class="container my-4">



        <h1>Olá Aluno!</h1>




    </div>
</main>
<?php endif; ?>


<?php require_once('../footer.php');?>
