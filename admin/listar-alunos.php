<?php include_once('partials/head.php'); ?>
<?php include_once('partials/navbar.php'); ?>

<?php

if($_SESSION['usuario_role'] == 'aluno')
{
    header("Location: dashboard-aluno.php");
    exit();
}
if($_SESSION['usuario_role'] == 'professor') 
{
    header("Location: dashboard-professor.php");
    exit();
}


//Total Subscribers
$stmt = $pdo->query("SELECT * FROM alunos");
$stmt->execute();
$alunos = $stmt->rowCount();


?>



<div class="content-wrapper">
  <div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="#">Dashboard</a>
      </li>
      <li class="breadcrumb-item active">My Dashboard</li>
    </ol>

    <div class="row">
      <div class="col-12">
        <?php require_once('alerts.php'); ?>
      </div>
    </div>

    <div class="box_general padding_bottom">
      <div class="header_box version_2">
        <h2><i class="fa fa-bar-chart"></i>Statistic</h2>
      </div>






    </div>
  </div>
  <!-- /.container-fluid-->
</div>

<?php include_once('partials/footer.php'); ?>