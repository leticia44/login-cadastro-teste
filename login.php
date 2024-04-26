<?php
session_start();
include('conexao.php');

if (!isset($pdo)) {
    echo "Erro de conexão com o banco de dados.";
    exit;
}


if (empty($_POST['email']) || empty($_POST['senha'])) {
    header('Location: l0gin1.php');
    exit();
}

$email = $_POST['email'];
$senha = md5($_POST['senha']);

$query = "SELECT nome FROM loogin WHERE email = :email AND senha = :senha";
$stmt = $pdo->prepare($query);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':senha', $senha);
$stmt->execute();

$result = $stmt->fetch(PDO::FETCH_ASSOC);

if ($result) {
    $_SESSION['nome'] = $result['nome'];
    header('Location: painel.php');
    exit();
} else {
    $_SESSION['nao_autenticado'] = true;
    header('Location: l0gin1.php');
    exit();
}
?>

