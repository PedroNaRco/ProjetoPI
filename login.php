<?php
session_start();

// Dados do formulário
$email = $_POST['email'];
$password = $_POST['pass'];

// Exemplo de validação simples (substitua pela consulta ao banco de dados)
$usuario_valido = "p@gmail.com";
$senha_valida = "1234";

if ($email === $usuario_valido && $password === $senha_valida) {
    // Armazena o email do usuário na sessão
    $_SESSION['user_name'] = "Nome do Usuário"; // Substitua pelo nome real do usuário se obtido do banco de dados

    // Redireciona o usuário para a página desejada
    header("Location: index.php");
    exit();
} else {
    echo "<script>alert('Conta não encontrada!'); window.location.href='login.php';</script>";
}

?>
