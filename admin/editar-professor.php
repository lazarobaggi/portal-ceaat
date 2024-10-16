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
    // Verifica se o ID do professor a ser editado foi enviado
    $professor_id = $_POST['professor_id'] ?? null;

    $nome = $_POST['nome'] ?? null;
    $sobrenome = $_POST['sobrenome'] ?? null;
    $titulacao = $_POST['titulacao'] ?? null;
    $area_expertise = $_POST['area_expertise'] ?? null;
    $data_admissao = $_POST['data_admissao'] ?? null;
    $email = $_POST['email'] ?? null;
    $senha = $_POST['senha'] ?? null; // Normalmente você não deve editar a senha diretamente assim.

    // Query preparada para atualização no banco
    $stmt = $pdo->prepare("UPDATE professores SET 
            nome = :nome,
            sobrenome = :sobrenome,
            titulacao = :titulacao,
            area_expertise = :area_expertise,
            data_admissao = :data_admissao,
            email = :email,
            senha = :senha
            WHERE professor_id = :professor_id");

    // Executa a atualização com os dados enviados pelo formulário
    $stmt->execute([
        ':professor_id' => $professor_id,
        ':nome' => $nome,
        ':sobrenome' => $sobrenome,
        ':titulacao' => $titulacao,
        ':area_expertise' => $area_expertise,
        ':data_admissao' => $data_admissao,
        ':email' => $email,
        ':senha' => password_hash($senha, PASSWORD_DEFAULT) // Hasheando a senha
    ]);

    if ($stmt) {
        $_SESSION['success_message'] = "Professor editado com sucesso!";
        // header('Location: listar-professores.php');
        // exit;
    } else {
        $_SESSION['error_message'] = "Erro ao editar professor.";
        header('Location: listar-professores.php');
        exit;
    }
}
?>


<?php

// Check if the 'professor_id' parameter is set in the URL
if (isset($_GET['professor_id'])) {
    // Capture the ID
    $professor_id = $_GET['professor_id'];

    // Sanitize the ID to prevent XSS (cross-site scripting)
    $professor_id = htmlspecialchars($professor_id);

    $array = array();
    $stmt = $pdo->prepare("SELECT * FROM professores WHERE professor_id = :professor_id");
    $stmt->execute([':professor_id' => $professor_id]);

    if ($stmt->rowCount() > 0) {
        $value = $stmt->fetch(PDO::FETCH_ASSOC);
        $array = $value;

        // Capture the values from the fetched data
        $nome = $value['nome'];
        $sobrenome = $value['sobrenome'];
        $titulacao = $value['titulacao'];
        $area_expertise = $value['area_expertise'];
        $data_admissao = $value['data_admissao'];
        $email = $value['email'];
        // Não inclua a senha aqui por motivos de segurança
    } else {
        $_SESSION['error_message'] = "Professor não encontrado!";
        header('Location: listar-professores.php');
        exit;
    }
} else {
    $_SESSION['error_message'] = "ID do professor não foi fornecido!";
    header('Location: listar-professores.php');
    exit;
}

// Aqui você pode usar os dados capturados (como $usuario_id, $nome, $sobrenome, etc.) conforme necessário
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
                    <input type="hidden" name="professor_id" value="<?php echo $professor_id ?? ''; ?>">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="nome">Nome:</label>
                                <input type="text" class="form-control" name="nome" value="<?php echo $nome ?? ''; ?>" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="sobrenome">Sobrenome:</label>
                                <input type="text" class="form-control" name="sobrenome" value="<?php echo $sobrenome ?? ''; ?>" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="titulacao">Titulação:</label>
                                <select class="form-control" name="titulacao">
                                    <option value="Professor REGULAR" <?php echo ($titulacao == 'Professor REGULAR') ? 'selected' : ''; ?>>Professor REGULAR</option>
                                    <option value="Professor TÉCNICO" <?php echo ($titulacao == 'Professor TÉCNICO') ? 'selected' : ''; ?>>Professor TÉCNICO</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="area_expertise">Área de Expertise:</label>
                                <input type="text" class="form-control" name="area_expertise" value="<?php echo $area_expertise ?? ''; ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="data_admissao">Data de Admissão:</label>
                                <input type="date" class="form-control" name="data_admissao" value="<?php echo $data_admissao ?? ''; ?>" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" name="email" value="<?php echo $email ?? ''; ?>" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="senha">Senha:</label>
                                <input type="password" class="form-control" name="senha" placeholder="Digite a nova senha (ou deixe em branco para não alterar)">
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