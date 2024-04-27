<?php
session_start();

// Verificar se o usuário está logado
if (!isset($_SESSION['email'])) {
    header('Location: login.php');
    exit;
}

// Incluir arquivo de conexão ao banco de dados
include("conexao.php");

// Consultar dados do usuário
$email = $_SESSION['email'];
$sql_select_user = "SELECT * FROM loogin WHERE email = :email";
$stmt_select_user = $pdo->prepare($sql_select_user);
$stmt_select_user->bindParam(':email', $email);
$stmt_select_user->execute();
$user = $stmt_select_user->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        label {
            font-weight: bold;
        }
        input[type="text"], input[type="email"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Perfil do Usuário</h2>
        <form action="atualizar_perfil.php" method="POST">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" value="<?php echo $user['nome']; ?>" readonly>

            <label for="cpfecnpj">CPF</label>
            <input type="text" id="cpfecnpj" name="cpfecnpj" value="<?php echo $user['cpfecnpj']; ?>" readonly>

            <label for="contato">Contato:</label>
            <input type="text" id="contato" name="contato" value="<?php echo $user['contato']; ?>" readonly>

            <label for="data_nascimento">Data de Nascimento:</label>
            <input type="text" id="data_nascimento" name="data_nascimento" value="<?php echo $user['data_nascimento']; ?>" required>

            <label for="genero">Gênero:</label>
            <input type="text" id="genero" name="genero" value="<?php echo $user['genero']; ?>" required>

            <input type="submit" value="Salvar Alterações">
        </form>
    </div>
</body>
</html>
