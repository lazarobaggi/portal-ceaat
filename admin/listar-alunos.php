<?php include_once('partials/head.php'); ?>
<?php include_once('partials/navbar.php'); ?>

<?php
    // Deletar registro de professores
    if (isset($_POST['delete_aluno'])) {
        $aluno_id = $_POST['aluno_id'];
        $stmt = $pdo->prepare("DELETE FROM alunos WHERE aluno_id = :aluno_id");
        $stmt->execute([':aluno_id' => $aluno_id]);

        $_SESSION['success_message'] = "Aluno deletado com sucesso!";
        // header('Location:' . 'listar-alunos.php');
        // exit;
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
                <i class="fa fa-table"></i> Lista de alunos
            </div>
            <div class="card-body">


                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>Gênero</th>
                                <th>Telefone</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $stmt = $pdo->query('SELECT * FROM alunos');
                            $pessoas = $stmt->fetchAll();
                            if ($pessoas) {
                                foreach ($pessoas as $pessoa) {
                                    echo "<tr>";
                                    echo "<td>" . htmlspecialchars($pessoa['aluno_id']) . "</td>";
                                    echo "<td>" . htmlspecialchars($pessoa['nome']) . "</td>";
                                    echo "<td>" . htmlspecialchars($pessoa['genero']) . "</td>";
                                    echo "<td>" . htmlspecialchars($pessoa['telefone']) . "</td>";
                                    echo "<td>" . "<div class='d-flex'><form action='' method='post'>
                                    <input type='hidden' name='aluno_id' value=".$pessoa['aluno_id'].">
                                    <button type='submit' name='delete_aluno' class='btn btn-danger btn-sm mr-2'>Deletar</button>
                                    </form> " ."<a href='editar-aluno.php?aluno_id=".htmlspecialchars($pessoa['aluno_id'])."' class='btn btn-success btn-sm'>Editar</a>". "</div></td>";
                                    echo "</tr>";
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>

            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>
        <!-- /tables-->
    </div>
    <!-- /container-fluid-->
</div>
<!-- /container-wrapper-->

<?php include_once('partials/footer.php'); ?>