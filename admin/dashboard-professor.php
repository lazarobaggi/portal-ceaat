<?php include_once('partials/head.php'); ?>
<?php include_once('partials/navbar.php'); ?>

<?php
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
      <li class="breadcrumb-item active">Painel do professor</li>
    </ol>

    <div class="row">
      <div class="col-12">
        <?php require_once('alerts.php'); ?>
      </div>
    </div>

    <!-- Icon Cards-->
    <div class="row">
      <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card dashboard text-white bg-primary o-hidden h-100">
          <div class="card-body">
            <div class="card-body-icon">
              <i class="fa fa-fw fa-envelope-open"></i>
            </div>
            <div class="mr-5">
              <h5><?php echo $alunos; ?> Alunos!</h5>
            </div>
          </div>
          <a class="card-footer text-white clearfix small z-1" href="messages.html">
            <span class="float-left">View Details</span>
            <span class="float-right">
              <i class="fa fa-angle-right"></i>
            </span>
          </a>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card dashboard text-white bg-warning o-hidden h-100">
          <div class="card-body">
            <div class="card-body-icon">
              <i class="fa fa-fw fa-star"></i>
            </div>
            <div class="mr-5">
              <h5>11 New Reviews!</h5>
            </div>
          </div>
          <a class="card-footer text-white clearfix small z-1" href="reviews.html">
            <span class="float-left">View Details</span>
            <span class="float-right">
              <i class="fa fa-angle-right"></i>
            </span>
          </a>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card dashboard text-white bg-success o-hidden h-100">
          <div class="card-body">
            <div class="card-body-icon">
              <i class="fa fa-fw fa-calendar-check-o"></i>
            </div>
            <div class="mr-5">
              <h5>10 New Bookings!</h5>
            </div>
          </div>
          <a class="card-footer text-white clearfix small z-1" href="bookings.html">
            <span class="float-left">View Details</span>
            <span class="float-right">
              <i class="fa fa-angle-right"></i>
            </span>
          </a>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card dashboard text-white bg-danger o-hidden h-100">
          <div class="card-body">
            <div class="card-body-icon">
              <i class="fa fa-fw fa-heart"></i>
            </div>
            <div class="mr-5">
              <h5>10 New Bookmarks!</h5>
            </div>
          </div>
          <a class="card-footer text-white clearfix small z-1" href="bookmarks.html">
            <span class="float-left">View Details</span>
            <span class="float-right">
              <i class="fa fa-angle-right"></i>
            </span>
          </a>
        </div>
      </div>
    </div>
    <!-- /cards -->

    <div class="box_general padding_bottom">
      <div class="header_box version_2">
        <h2><i class="fa fa-bar-chart"></i>Painel</h2>
      </div>






    </div>
  </div>
  <!-- /.container-fluid-->
</div>

<?php include_once('partials/footer.php'); ?>