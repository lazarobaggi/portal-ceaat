<?php
session_start(); // Para manter a sessão do usuário
include 'conn.php'; // Inclua a conexão com o banco de dados

?>

<?php 
if (isset($_SESSION['usuario_nome']) && !empty($_SESSION['usuario_nome'])) 
{
  $_SESSION['error_message'] = "Acesso não permitido!";
  header('Location: dashboard.php');
  exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Verifica se o usuário existe na tabela 'alunos'
    $stmt = $pdo->prepare("SELECT * FROM alunos WHERE email = :email");
    $stmt->bindValue(":email", $email);
    $stmt->execute();
    $aluno = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($aluno && password_verify($senha, $aluno['senha'])) 
    {
        // Usuário encontrado na tabela 'alunos' e senha verificada
        $_SESSION['usuario_id'] = $aluno['aluno_id'];
        $_SESSION['usuario_nome'] = $aluno['nome'];
        $_SESSION['usuario_role'] = 'aluno';
        $_SESSION['success_message'] = "Login efetuado com sucesso!";
        header('Location: dashboard-aluno.php');
        exit;
    } 
    else 
    {
        // Verifica se o usuário existe na tabela 'professores'
        $stmt = $pdo->prepare("SELECT * FROM professores WHERE email = :email");
        $stmt->bindValue(":email", $email);
        $stmt->execute();
        $professor = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($professor && password_verify($senha, $professor['senha'])) 
        {
            // Usuário encontrado na tabela 'professores' e senha verificada
            $_SESSION['usuario_id'] = $professor['professor_id'];
            $_SESSION['usuario_nome'] = $professor['nome'];
            $_SESSION['usuario_role'] = 'professor';
            $_SESSION['success_message'] = "Login efetuado com sucesso!";
            header('Location: dashboard-professor.php');
            exit;
        } 
        else 
        {
            // Verifica se o usuário existe na tabela 'usuarios'
            $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE email = :email");
            $stmt->bindValue(":email", $email);
            $stmt->execute();
            $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($usuario && password_verify($senha, $usuario['senha'])) 
            {
                // Usuário encontrado na tabela 'usuarios' e senha verificada
                $_SESSION['usuario_id'] = $usuario['usuario_id'];
                $_SESSION['usuario_nome'] = $usuario['nome'];
                $_SESSION['usuario_role'] = 'admin';
                $_SESSION['success_message'] = "Login efetuado com sucesso!";
                header('Location: dashboard.php');
                exit;
            } 
            else 
            {
                // Nenhum usuário encontrado ou senha incorreta
                $_SESSION['error_message'] = "Email ou senha errados!";
                header('Location: login.php');
                exit;
            }
        }
    }
}



?>



<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tela de Login</title>

  <!-- Favicons-->
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
  <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
  <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
  <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
  <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">
	
  <!-- GOOGLE WEB FONT -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800" rel="stylesheet">
	
  <!-- Bootstrap core CSS-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/admin.css" rel="stylesheet">


  <style>
    body {
      font-family: 'Montserrat', sans-serif;
      transition: 3s;
      padding: 20px;
    }

    .login-container {
      margin-top: 5%;
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
        <h1 class="text-light"><span id="fl">Olá visitante!</span></h1>
        <span>Seja bem-vindo ao site CEAAT</span><br>
        <button type="button" class="btn btn-primary btn-lg mt-5">VENHA APRENDER</button><br>
        <div class="social-icons mt-5">
          <span><a href=""><i class="fa fa-facebook fa-2x  text-light fw-5"></i></a></span><br>
          <span><a href=""><i class="fa fa-google fa-2x  text-light fw-5"></i></a></span><br>
          <span><a href=""><i class="fa fa-instagram fa-2x  text-light fw-5"></i></a></span><br>
        </div>
      </div>


      <div class="col-md-6 login-form p-5">
        <div class="profile-img">
          <img src="../uploads/images-removebg-preview.png" alt="profile_img" height="140px" width="140px;">
        </div>
        <h3>Login</h3>

        <?php require_once('alerts.php'); ?>

        <form action="" method="POST">
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
            <a href="#" class="text-muted">Esqueceu a senha?</a> | 
            <a href="../" class="text-muted">Home</a>

          </div>
        </form>
      </div>

    </div>
  </div>
</body>



<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.js"></script>

<script>
      $(function() {
        $("#liveAlert").show();
        setTimeout(function() {
          $("#liveAlert").fadeOut();
        }, 3000);
      });
    </script>

</html>