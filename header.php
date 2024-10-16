<?php ob_start(); ?>
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal CEAAT</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/styleHOME.css"> <!-- Link para o CSS externo -->
</head>
<body>
    
    <section class="row">
        <!-- Navbar com Bootstrap -->
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <!-- Menu Hambúrguer -->
                <div class="menu" id="hamburger" onclick="toggleMenu()">
                    <div class="bar"></div>
                    <div class="bar"></div>
                    <div class="bar"></div>
                </div>
                <a class="navbar-brand" href="#">
                    <img src="assets/images/images-removebg-preview(1).png" alt="CEAAT Logo" width="20%">
                    Colégio Estadual De Aplicação Anísio Teixeira
                </a>

                <div class="ms-auto d-flex align-items-center">
                    <form class="d-flex" action="#" method="get">
                        <input class="form-control me-2" type="search" placeholder="O que você procura?" aria-label="Pesquisar" required>
                        <button class="btn btn-success" type="submit">Buscar</button>
                    </form>

                    <?php if(!isset($_SESSION['usuario_nome']) || empty($_SESSION['usuario_nome'])): ?>

                    <a href="admin/login.php" class="btn btn-success m-5">                        
                        <i class="fa-regular fa-user"></i> Login
                    </a>
                        
                    <?php elseif(isset($_SESSION['usuario_nome']) && !empty($_SESSION['usuario_nome'])): ?>    

                    <a href="admin/logout.php" class="btn btn-success m-5">                        
                        <i class="fa-regular fa-user"></i> Sair
                    </a>

                    <?php endif; ?>

                </div>
            </div>
        </nav>

        <!-- Sidebar BARRA LATERAL -->
        <div class="col-2 side-menu" id="sidebarMenu">
            <ul>
                <li class="menu-item"><a href="index.php">Homepage</a></li>
                <li class="menu-item"><a href="historia.php">História do CEAAT</a></li>
                <li class="menu-item"><a href="eventos.php">Eventos</a></li>
                <li class="menu-item"><a href="cursos.php">Cursos</a></li>
                <li class="menu-item"><a href="ambientes.php">Ambientes</a></li>
                <li class="menu-item"><a href="corpo-docente.php">Corpo Docente</a></li>
            </ul>
        </div>

        <div class="col-12" id="mainContent">
            <!-- Main Content -->
            <div class="row">
                <div class="col-12" id="mainContent">



