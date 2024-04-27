<?php
session_start();

// Verificar se o usuário está logado
if (!isset($_SESSION['email'])) {
    header('Location: login.php');
    exit;
}

// Incluir arquivo de conexão ao banco de dados
include("conexao.php");

// Recuperar os dados do formulário
$email = $_SESSION['email'];
$data_nascimento = $_POST['data_nascimento'];
$genero = $_POST['genero'];

// Verificar se os campos de data de nascimento e gênero estão vazios no banco de dados
$sql_check_fields = "SELECT data_nascimento, genero FROM loogin WHERE email = :email";
$stmt_check_fields = $pdo->prepare($sql_check_fields);
$stmt_check_fields->bindParam(':email', $email);
$stmt_check_fields->execute();
$user_fields = $stmt_check_fields->fetch(PDO::FETCH_ASSOC);

// Se os campos de data de nascimento e gênero estiverem vazios, insira os novos dados
if (empty($user_fields['data_nascimento']) && empty($user_fields['genero'])) {
    $sql_update_profile = "UPDATE loogin SET data_nascimento = :data_nascimento, genero = :genero WHERE email = :email";
} else {
    $sql_update_profile = "UPDATE loogin SET data_nascimento = :data_nascimento, genero = :genero WHERE email = :email AND (data_nascimento IS NULL OR genero IS NULL)";
}

$stmt_update_profile = $pdo->prepare($sql_update_profile);
$stmt_update_profile->bindParam(':data_nascimento', $data_nascimento);
$stmt_update_profile->bindParam(':genero', $genero);
$stmt_update_profile->bindParam(':email', $email);

if ($stmt_update_profile->execute()) {
    $_SESSION['perfil_atualizado'] = true;
} else {
    $_SESSION['perfil_atualizado'] = false;
}

// Redirecionar de volta para a página de perfil
header('Location: perfil.php');
exit;
?>
