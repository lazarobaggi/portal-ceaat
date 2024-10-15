<?php include_once('partials/head.php'); ?>
<?php include_once('partials/navbar.php'); ?>

<!-- /Navigation-->
<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Tables</li>
        </ol>
        <!-- Example DataTables Card-->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-table"></i> Data Table Example
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
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $pdo = new PDO($dsn, $username, $password, $options);
                            $stmt = $pdo->query('SELECT * FROM Pessoas');
                            $pessoas = $stmt->fetchAll();
                            if ($pessoas) {
                                foreach ($pessoas as $pessoa) {
                                    echo "<tr>";
                                    echo "<td>" . htmlspecialchars($pessoa['pessoa_id']) . "</td>";
                                    echo "<td>" . htmlspecialchars($pessoa['nome']) . "</td>";
                                    echo "<td>" . htmlspecialchars($pessoa['genero']) . "</td>";
                                    echo "<td>" . htmlspecialchars($pessoa['telefone']) . "</td>";
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