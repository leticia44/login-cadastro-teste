<?php
session_start();
include('verifica_login.php');

// Redirecionar para a página index.php após o login bem-sucedido
header("Location: index.php");
exit();
?>

<h2>Olá, <?php echo $_SESSION['nome']; ?></h2>
<h2><a href="logout.php">Sair</a></h2>
