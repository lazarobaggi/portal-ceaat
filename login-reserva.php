<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>    

</head>
<body>
    <div class="container">

        <div class="row">
            <div class="col-6">
            <div class="toggle-container">
                    <div class="toggle">
                        <div class="toggle-panel toggle-left">
                            <h1>Bem vindo de volta!</h1>
                            <p>Insira seus dados pessoais para usar todos os recursos do site</p>
                            <button class="hidden" id="login">Entrar</button>
                        </div>
                        <div class="toggle-panel toggle-right">
                            <h1>Olá visitante!</h1>
                            <p>Seja bem-vindo ao site CEAAT</p>
                            <button class="hidden" id="signup" style="margin-left: 10px;">venha aprender</button>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="form-container sign-in">
                    <form action="admin/login.php" method="POST">
                        <h1>Entrar</h1>
                        <input type="text" name="email" placeholder="Usuário" required />
                        <input type="password" name="senha" placeholder="Senha" required />
                        <button id="login" type="submit">Entrar</button>
                    </form>
                    <div class="social-icons">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-google"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                    <div id="ifinallogin">
                        <a href="#">Esqueceu a senha?</a>                    
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script>
        const container = document.querySelector('.container');
        const showSignup = document.getElementById('show-signup');
        const showSignin = document.getElementById('show-signin');

        showSignup.addEventListener('click', () => {
            container.classList.add('active');
        });

        showSignin.addEventListener('click', () => {
            container.classList.remove('active');
        });
    </script>
</body>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>

</html>


        
        
        
        




