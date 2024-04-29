<?php include_once("navbar.php"); ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Italiana&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="dadospessoais.css">
    <title>Perfil</title>
</head>
<body>
    <div class="menu">
        <br>
        <br>
        <br>
        <center><h2>MENU</h2></center>
    </div>
    <div class="container">
        <div class="menu1">
            <ul class="coluna1">
                <li class="nav-item">
                    <a class="link1" href="#">Dados Pessoais</a>
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
                    <a class="link" href="#">Pedidos</a>
                </li>
                <li class="nav-item">
                    <a class="link" href="#">Formas de Pagamento</a>
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
        <div class="linha-lateral">Dados Pessoais</div>
    </div>
    <div class="inputs">
        <form action="atualizar_perfil.php" method="POST">
            <div class='d1'>
                <label for="nome">Nome:</label>
                <input type="text" class="forms" id="nome" name="nome"  value="<?php echo $user['nome']; ?>" readonly>
            </div>
            <div class='d2'>
                <label for="cpfecnpj">CPF:</label>
                <input type="text" class="forms" id="cpfecnpj" name="cpfecnpj" value="<?php echo $user['cpfecnpj']; ?>" readonly>
            </div>
            <div class='d3'>
                <label for="contato">Telefone:</label>
                <input type="text" class="forms" id="contato" name="contato" value="<?php echo $user['contato']; ?>" readonly>
            </div>
            <div class='d4'>
                <label for="data_nascimento">Data de Nascimento:</label>
                <input type="text" class="forms" id="data_nascimento" name="data_nascimento" value="<?php echo $user['data_nascimento']; ?>" required>
            </div> 
            <div class='d5'>
                <label for="genero">Gênero:</label>
                <input type="text" class="forms" id="genero" name="genero" value="<?php echo $user['genero']; ?>" required>
            </div>
            <input type="submit" class="button" value="Salvar Alterações">
        </form>
    </div>
    <?php include_once("footer.php"); ?>
</body>
</html>
