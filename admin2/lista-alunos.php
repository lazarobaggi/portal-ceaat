<?php
require_once("admin/config.php");

$pdo = new PDO($dsn, $username, $password, $options);
    
// Consulta para buscar todos os dados da tabela Pessoas
$stmt = $pdo->query('SELECT * FROM Pessoas');

// Fetch all results
$pessoas = $stmt->fetchAll();

// Verifica se existem resultados
if ($pessoas) {
    // Exibição dos resultados
    echo "<table border='1'>";
    echo "<tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Sobrenome</th>
        <th>Data de Nascimento</th>
        <th>Gênero</th>
        <th>Nacionalidade</th>
        <th>CPF</th><th>RG</th>
        <th>Telefone</th>
        <th>Endereço</th>
        <th>Cidade</th>
        <th>Estado</th>
        <th>CEP</th>
    </tr>";
    
    foreach ($pessoas as $pessoa) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($pessoa['pessoa_id']) . "</td>";
        echo "<td>" . htmlspecialchars($pessoa['nome']) . "</td>";
        echo "<td>" . htmlspecialchars($pessoa['sobrenome']) . "</td>";
        echo "<td>" . htmlspecialchars($pessoa['data_nascimento']) . "</td>";
        echo "<td>" . htmlspecialchars($pessoa['genero']) . "</td>";
        echo "<td>" . htmlspecialchars($pessoa['nacionalidade']) . "</td>";
        echo "<td>" . htmlspecialchars($pessoa['cpf']) . "</td>";
        echo "<td>" . htmlspecialchars($pessoa['rg']) . "</td>";
        echo "<td>" . htmlspecialchars($pessoa['telefone']) . "</td>";
        // echo "<td>" . htmlspecialchars($pessoa['email']) . "</td>";
        echo "<td>" . htmlspecialchars($pessoa['endereco']) . "</td>";
        echo "<td>" . htmlspecialchars($pessoa['cidade']) . "</td>";
        echo "<td>" . htmlspecialchars($pessoa['estado']) . "</td>";
        echo "<td>" . htmlspecialchars($pessoa['cep']) . "</td>";
        echo "</tr>";
    }
    
    echo "</table>";
} else {
    echo "Nenhum dado encontrado.";
}


$page = isset($_GET['page']) ? $_GET['page'] : 'home';

if ($page == 'home') {
    include 'home.php';
} elseif ($page == 'contact') {
    include 'contact.php';
} else {
    include '404.php'; // Página de erro 404
}


