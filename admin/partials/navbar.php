<nav class="navbar navbar-expand-lg navbar-dark bg-default fixed-top" id="mainNav">
  <a class="navbar-brand p-2" href="../">
    <!-- <img src="img/logo.png" data-retina="true" alt="" width="163" height="36"> -->
     Portal - CEAAT
  </a>
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarResponsive">
    <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">

      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
        <a class="nav-link" href="index.php">
          <i class="fa fa-fw fa-dashboard"></i>
          <span class="nav-link-text">Dashboard</span>
        </a>
      </li>

      <!-- <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Messages">
        <a class="nav-link" href="messages.html">
          <i class="fa fa-fw fa-envelope-open"></i>
          <span class="nav-link-text">Messages</span>
        </a>
      </li> -->

      <!-- <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Reviews">
        <a class="nav-link" href="reviews.html">
          <i class="fa fa-fw fa-star"></i>
          <span class="nav-link-text">Reviews</span>
        </a>
      </li> -->

      <!-- <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Bookmarks">
        <a class="nav-link" href="bookmarks.html">
          <i class="fa fa-fw fa-heart"></i>
          <span class="nav-link-text">Bookmarks</span>
        </a>
      </li> -->

      <!-- <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Add listing">
        <a class="nav-link" href="add-listing.html">
          <i class="fa fa-fw fa-plus-circle"></i>
          <span class="nav-link-text">Add listing</span>
        </a>
      </li> -->

      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="My profile">
        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseProfile" data-parent="#exampleAccordion">
          <i class="fa fa-fw fa-users"></i>
          <span class="nav-link-text">Professores</span>
        </a>
        <ul class="sidenav-second-level collapse" id="collapseProfile">
          <li>
            <a href="cadastrar-professores.php">Cadastrar</a>
          </li>
          <li>
            <a href="listar-professores.php">Listar</a>
          </li>
        </ul>
      </li>

      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
          <i class="fa fa-fw fa-users"></i>
          <span class="nav-link-text">Alunos</span>
        </a>
        <ul class="sidenav-second-level collapse" id="collapseComponents">
          <li>
            <a href="cadastrar-alunos.php">Cadastrar</a>
          </li>
          <li>
            <a href="listar-alunos.php">Listar</a>
          </li>
        </ul>
      </li>

    </ul>

    <ul class="navbar-nav sidenav-toggler">
      <li class="nav-item">
        <a class="nav-link text-center" id="sidenavToggler">
          <i class="fa fa-fw fa-angle-left"></i>
        </a>
      </li>
    </ul>

    <ul class="navbar-nav ml-auto">

      <li class="nav-item">
        <a class="nav-link">
          <img src="../uploads/lucas.jpg" width="25px" class="rounded-circle img-fluid"> @<?php echo $_SESSION['usuario_nome']; ?>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
          <i class="fa fa-fw fa-sign-out"></i>Logout</a>
      </li>

    </ul>
    
  </div>
</nav>