<?php
session_start(); // Para manter a sessão do usuário
include 'conn.php'; // Inclua a conexão com o banco de dados

if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Verifica se o usuário existe no banco de dados
    $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE email = :email AND senha_hash = :senha");
    $stmt->bindValue(":email", $email);
    $stmt->bindValue(":senha", $senha);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if($stmt->rowCount() > 0)
    {
        foreach ($result as $value) {
            $_SESSION['usuario_id'] = $value['id'];
            $_SESSION['usuario_nome'] = $value['nome'];
            $_SESSION['usuario_role'] = $value['papel'];  // Pode ser 'aluno' ou 'professor'
        }
        $_SESSION['success_message'] = "Login efetuado com sucesso!";
        header('Location:' . 'dashboard.php');
        exit;
    }
    else 
    {
        $_SESSION['error_message'] = "Email ou senha errados!";
        header('Location:' . '../login.php');
        exit;
    }
}
