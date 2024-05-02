<?php include_once("navbar.php");
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Italiana&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="formapa.css">
    <title>Perfil</title>
</head>

<body>
    <div class="menu">
        <br>
        <br>
        <br>
        <center>
            <h2>MENU</h2>
        </center>
    </div>
    <div class="container">
        <div class="menu1">
            <ul class="coluna1">
                <li class="nav-item">
                    <a class="link" href="dadospessoais.php">Dados Pessoais</a>
                </li>
                <li class="nav-item">
                    <a class="link" href="endereco.php">Endereço</a>
                </li>
            </ul>
        </div>
        <div class="linha-branca"></div>
        <div class="menu2">
            <ul class="coluna1">
                <li class="nav-item">
                    <a class="link" href="pedidos.php">Pedidos</a>
                </li>
                <li class="nav-item">
                    <a class="link1" href="#">Formas de Pagamento</a>
                </li>
                <li class="nav-item">
                    <a class="link3" href="#">Formas de Pagamento</a>
                </li>
                <li class="nav-item">
                    <a class="link3" href="#">Formas de Pagamento</a>
                </li>
                <li class="nav-item">
                    <a class="link3" href="#">Formas de Pagamento</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="dados-pessoais">
        <br>
        <br>
        <div class="linha-lateral">Forma de Pagamento</div>
    </div>
    <div class="inputs">

<div class='d1'>
<img src="VISA.png" class="visa-image">

  <p> Letícia Gabrielle - </p>
  <p> **** **** **** 0945</p>
 
    </div>
  
 <button type="submit" class="button">Adicionar Nova Forma de Pagamento</button>
    </div>
    <?php include_once("footer.php"); ?>
</body>

</html>