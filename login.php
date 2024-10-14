<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tela de Login</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>     -->

  <style>
    body {
      font-family: 'Montserrat', sans-serif;
      transition: 3s;
      padding: 20px;
    }

    .login-container {
      margin-top: 10%;
      border: 1px solid #CCD1D1;
      border-radius: 5px;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

    }

    .ads {
      /* background-color: #131634; */
      background: linear-gradient(to left, #131634, #000099);
      border-top-left-radius: 5px;
      border-bottom-left-radius: 5px;
      color: #fff;
      padding: 15px;
      text-align: center;
    }

    .ads h1 {
      margin-top: 20%;
    }

    #fl {
      font-weight: 600;
    }

    #sl {
      font-weight: 100 !important;
    }

    .profile-img {
      text-align: center;
    }

    .profile-img img {
      border-radius: 50%;
      /* animation: mymove 2s infinite; */
    }

    @keyframes mymove {
      from {
        border: 1px solid #F2F3F4;
      }

      to {
        border: 8px solid #F2F3F4;
      }
    }

    .login-form {
      padding: 15px;
    }

    .login-form h3 {
      text-align: center;
      padding-top: 15px;
      padding-bottom: 15px;
    }

    .form-control {
      font-size: 14px;
    }

    .forget-password a {
      font-weight: 500;
      text-decoration: none;
      font-size: 14px;
    }

    .social-icons {
      display: flex;
      /* Usar flexbox para alinhar os itens */
      justify-content: center;
      /* Centralizar os ícones, se desejado */
      align-items: center;
      /* Alinhar verticalmente */
    }

    .social-icons span {
      margin: 0 10px;
      /* Adiciona espaçamento entre os ícones */
    }
  </style>

</head>

<body>
  <div class="container login-container">
    <div class="row">

      <div class="col-md-6 d-none d-md-block ads">
        <h1><span id="fl">Olá visitante!</span></h1>
        <span>Seja bem-vindo ao site CEAAT</span><br>
        <button type="button" class="btn btn-primary btn-lg btn-block mt-5">VENHA APRENDER</button><br>
        <div class="social-icons mt-5">
          <span><a href=""><i class="fab fa-facebook fa-2x  text-light fw-5"></i></a></span><br>
          <span><a href=""><i class="fab fa-google fa-2x  text-light fw-5"></i></a></span><br>
          <span><a href=""><i class="fab fa-instagram fa-2x  text-light fw-5"></i></a></span><br>
        </div>
      </div>


      <div class="col-md-6 login-form p-5">
        <div class="profile-img">
          <img src="assets/images/images-removebg-preview.png" alt="profile_img" height="140px" width="140px;">
        </div>
        <h3>Login</h3>

        <?php require_once('admin/alerts.php'); ?>

        <form action="admin/login.php" method="POST">
          <div class="form-group input-group-lg">
            <input type="email" class="form-control  mb-3" name="email" placeholder="E-mail">
          </div>
          <div class="form-group input-group-lg">
            <input type="password" class="form-control  mb-3" name="senha" placeholder="Senha">
          </div>
          <div class="form-group d-grid mb-3">
            <button type="submit" class="btn btn-primary btn-lg btn-block">Entrar</button>
          </div>
          <div class="form-group forget-password">
            <a href="#" class="text-muted">Esqueceu a senha?</a>
          </div>
        </form>
      </div>

    </div>
  </div>
</body>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>

</html>