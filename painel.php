<?php
session_start();
include('verifica_login.php');


header("Location: http://localhost:3000/HomeP");
exit();
?>

<h2>Olá, <?php echo $_SESSION['nome']; ?></h2>
<h2><a href="logout.php">Sair</a></h2>
