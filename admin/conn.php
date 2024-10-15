<?php

// Configurações do banco de dados
$host = 'localhost'; // Endereço do servidor MySQL
$dbname = 'workthem_portal_ceaat_db'; // Nome do banco de dados
$username = 'root'; // workthem_admin
$password = ''; // 9YnQVAt6T=06

try {
    // Criação da conexão PDO
    $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";
    $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, // Configura o modo de erro para exceções
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // Define o modo de recuperação de dados padrão
        PDO::ATTR_EMULATE_PREPARES   => false, // Desativa a emulação de prepared statements
    ];
    $pdo = new PDO($dsn, $username, $password, $options);
    
    // Mensagem de sucesso (opcional)
    //echo "Conexão bem-sucedida!";
} catch (PDOException $e) {
    // Tratamento de erros
    echo "Erro na conexão: " . $e->getMessage();
}



