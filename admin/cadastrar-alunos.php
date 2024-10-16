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




if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verifica se os dados foram enviados
    $nome = $_POST['nome'] ?? null;
    $sobrenome = $_POST['sobrenome'] ?? null;
    $data_nascimento = $_POST['data_nascimento'] ?? null;
    $genero = $_POST['genero'] ?? null;
    $nacionalidade = $_POST['nacionalidade'] ?? null;
    $cidade = $_POST['cidade'] ?? null;
    $cep = $_POST['cep'] ?? null;
    $matricula = $_POST['matricula'] ?? null;
    $email = $_POST['email'] ?? null; // Capturando o e-mail
    $senha = $_POST['senha'] ?? null; // Capturando a senha
    $curso = $_POST['curso'] ?? null;
    $ano_ingresso = $_POST['ano_ingresso'] ?? null;
    $telefone = $_POST['telefone'] ?? null;
    $status = $_POST['status'] ?? 'Ativo';

    // Exemplo de inserção no banco
    $stmt = $pdo->prepare("INSERT INTO alunos (nome, sobrenome, data_nascimento, genero, nacionalidade, cidade, cep, matricula, email, senha, curso, ano_ingresso, telefone, status)
                VALUES (:nome, :sobrenome, :data_nascimento, :genero, :nacionalidade, :cidade, :cep, :matricula, :email, :senha, :curso, :ano_ingresso, :telefone, :status)");

    // Executa a inserção com os dados enviados pelo formulário
    $stmt->execute([
        ':nome' => $nome,
        ':sobrenome' => $sobrenome,
        ':data_nascimento' => $data_nascimento,
        ':genero' => $genero,
        ':nacionalidade' => $nacionalidade,
        ':cidade' => $cidade,
        ':cep' => $cep,
        ':matricula' => $matricula,
        ':email' => $email,
        ':senha' => password_hash($senha, PASSWORD_DEFAULT), // Hasheando a senha
        ':curso' => $curso,
        ':ano_ingresso' => $ano_ingresso,
        ':telefone' => $telefone,
        ':status' => $status
    ]);

    if ($stmt) {
        $_SESSION['success_message'] = "Novo aluno cadastrado com sucesso!";
        // header("Location: listar-alunos.php");
        // exit();
    } else {
        $_SESSION['error_message'] = "Erro ao cadastrar aluno.";
        header("Location: listar-alunos.php");
        exit();
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
            <li class="breadcrumb-item active">Alunos</li>
        </ol>

        <div class="row">
            <div class="col-12">
                <?php require_once('alerts.php'); ?>
            </div>
        </div>

        <!-- Example DataTables Card-->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-table"></i> Cadastrar aluno
            </div>
            <div class="card-body">

            <form action="" method="POST" class="form-horizontal">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="nome" class="control-label">Nome:</label>
                <input type="text" name="nome" class="form-control" id="nome" required>
            </div>
            <div class="form-group">
                <label for="sobrenome" class="control-label">Sobrenome:</label>
                <input type="text" name="sobrenome" class="form-control" id="sobrenome" required>
            </div>
            <div class="form-group">
                <label for="data_nascimento" class="control-label">Data de Nascimento:</label>
                <input type="date" name="data_nascimento" class="form-control" id="data_nascimento" required>
            </div>
            <div class="form-group">
                <label for="genero" class="control-label">Gênero:</label>
                <select name="genero" class="form-control" id="genero" required>
                    <option value="" selected>Escolher</option>
                    <option value="Masculino">Masculino</option>
                    <option value="Feminino">Feminino</option>
                    <option value="Outro">Outro</option>
                </select>
            </div>
            <div class="form-group">
                <label for="nacionalidade" class="control-label">Nacionalidade:</label>
                <input type="text" name="nacionalidade" class="form-control" id="nacionalidade">
            </div>
            <div class="form-group">
                <label for="cidade" class="control-label">Cidade:</label>
                <input type="text" name="cidade" class="form-control" id="cidade">
            </div>
            <div class="form-group">
                <label for="telefone" class="control-label">Telefone:</label>
                <textarea name="telefone" class="form-control" id="telefone"></textarea>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label for="cep" class="control-label">CEP:</label>
                <input type="text" name="cep" class="form-control" id="cep">
            </div>
            <div class="form-group">
                <label for="matricula" class="control-label">Matrícula:</label>
                <input type="text" name="matricula" class="form-control" id="matricula" required>
            </div>
            <div class="form-group">
                <label for="email" class="control-label">Email:</label>
                <input type="email" name="email" class="form-control" id="email" required>
            </div>
            <div class="form-group">
                <label for="senha" class="control-label">Senha:</label>
                <input type="password" name="senha" class="form-control" id="senha" required>
            </div>
            <div class="form-group">
                <label for="curso" class="control-label">Curso:</label>
                <input type="text" name="curso" class="form-control" id="curso" required>
            </div>
            <div class="form-group">
                <label for="ano_ingresso" class="control-label">Ano de Ingresso:</label>
                <input type="number" name="ano_ingresso" class="form-control" id="ano_ingresso" required>
            </div>
            <div class="form-group">
                <label for="status" class="control-label">Status:</label>
                <select name="status" class="form-control" id="status">
                    <option value="Ativo" selected>Ativo</option>
                    <option value="Inativo">Inativo</option>
                    <option value="Formado">Formado</option>
                </select>
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-offset-2 col-md-10">
            <input type="submit" value="Cadastrar Aluno" class="btn btn-primary">
            <a href="listar-alunos.php" class="btn btn-primary">Voltar</a>
        </div>
    </div>
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