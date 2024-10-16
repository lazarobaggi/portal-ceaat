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


    // Deletar registro de professores
    if (isset($_POST['delete_professor'])) {
        $professor_id = $_POST['professor_id'];
        $stmt = $pdo->prepare("DELETE FROM professores WHERE professor_id = :professor_id");
        $stmt->execute([':professor_id' => $professor_id]);
        $_SESSION['success_message'] = "Professor deletado com sucesso!";
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
                <i class="fa fa-table"></i> Lista de professores
            </div>
            <div class="card-body">


                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>titulacao</th>
                                <th>area_expertise</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $stmt = $pdo->query('SELECT * FROM professores');
                            $pessoas = $stmt->fetchAll();
                            if ($pessoas) {
                                foreach ($pessoas as $pessoa) {
                                    echo "<tr>";
                                    echo "<td>" . htmlspecialchars($pessoa['professor_id']) . "</td>";
                                    echo "<td>" . htmlspecialchars($pessoa['nome']) . "</td>";
                                    echo "<td>" . htmlspecialchars($pessoa['titulacao']) . "</td>";
                                    echo "<td>" . htmlspecialchars($pessoa['area_expertise']) . "</td>";
                                    echo "<td>" . "<div class='d-flex'><form action='' method='post'>
                                    <input type='hidden' name='professor_id' value=".$pessoa['professor_id'].">
                                    <button type='submit' name='delete_professor' class='btn btn-danger btn-sm mr-2'>Deletar</button>
                                    </form> " ."<a href='editar-professor.php?professor_id=".htmlspecialchars($pessoa['professor_id'])."' class='btn btn-success btn-sm'>Editar</a>". "</div></td>";
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