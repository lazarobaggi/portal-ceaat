<?php include_once('partials/head.php'); ?>
<?php include_once('partials/navbar.php'); ?>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verifica se os dados foram enviados

    // Captura os valores enviados via POST
    $nome = $_POST['nome'] ?? null;
    $sobrenome = $_POST['sobrenome'] ?? null;
    $titulacao = $_POST['titulacao'] ?? null;
    $area_expertise = $_POST['area_expertise'] ?? null;
    $data_admissao = $_POST['data_admissao'] ?? null;
    $email = $_POST['email'] ?? null;
    $senha = $_POST['senha'] ?? null;

    // Criptografa a senha
    $senha_hash = password_hash($senha, PASSWORD_DEFAULT);

    // Query preparada para inserção no banco
    $stmt = $pdo->prepare("INSERT INTO professores (nome, sobrenome, titulacao, area_expertise, data_admissao, email, senha)
            VALUES (:nome, :sobrenome, :titulacao, :area_expertise, :data_admissao, :email, :senha)");

    // Executa a inserção com os dados enviados pelo formulário
    $stmt->execute([
        ':nome' => $nome,
        ':sobrenome' => $sobrenome,
        ':titulacao' => $titulacao,
        ':area_expertise' => $area_expertise,
        ':data_admissao' => $data_admissao,
        ':email' => $email,
        ':senha' => $senha_hash
    ]);

    if ($stmt) {
        $_SESSION['success_message'] = "Novo professor cadastrado com sucesso!";
        // header('Location: listar-professores.php');
        // exit;
    } else {
        $_SESSION['error_message'] = "Erro ao cadastrar professor.";
        header('Location: listar-professores.php');
        exit;
    }

}
?>


<!-- /Navigation-->
<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Professores</li>
        </ol>

        <div class="row">
            <div class="col-12">
                <?php require_once('alerts.php'); ?>
            </div>
        </div>

        <!-- Example DataTables Card-->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-table"></i> Cadastar professor
            </div>
            <div class="card-body">

                <form action="" method="POST">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="nome">Nome:</label>
                                <input type="text" class="form-control" name="nome" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="sobrenome">Sobrenome:</label>
                                <input type="text" class="form-control" name="sobrenome" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="titulacao">Titulação:</label>
                                <select class="form-control" name="titulacao" required>
                                    <option value="Professor REGULAR">Professor REGULAR</option>
                                    <option value="Professor TÉCNICO">Professor TÉCNICO</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="area_expertise">Área de Expertise:</label>
                                <input type="text" class="form-control" name="area_expertise">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="data_admissao">Data de Admissão:</label>
                                <input type="date" class="form-control" name="data_admissao" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" name="email" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="senha">Senha:</label>
                                <input type="password" class="form-control" name="senha" placeholder="Digite a nova senha" required>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Salvar</button>
                    <a href="listar-professores.php" class="btn btn-default">Voltar</a>
                </form>


            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>
        <!-- /tables-->
    </div>
    <!-- /container-fluid-->
</div>
<!-- /container-wrapper-->

<?php include_once('partials/footer.php'); ?>