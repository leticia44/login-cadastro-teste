<?php
include_once("navbar.php")
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400&display=swap" rel="stylesheet" <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Italiana&display=swap" rel="stylesheet">
    <title>Perfil</title>
    <link rel="stylesheet" type="text/css" href="endereco.css">

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
                    <a class="link1" href="#">Endereço</a>
                </li>
            </ul>
        </div>
        <div class="linha-branca"></div>
        <div class="menu2"> <!-- Adicionando a classe menu2 -->
            <ul class="coluna1">
                <li class="nav-item">
                    <a class="link" href="pedidos.php">Pedidos</a>
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
    <!-- Div com título "Dados Pessoais" e linha em cada lado -->
    <div class="dados-pessoais">
        <br>
        <br>
        <div class="linha-lateral">Endereço</div>
    </div>
    <div class="inputs">
        <?php

        session_start();

        // Verificar se o usuário está logado
        if (!isset($_SESSION['username'])) {
        }

        // Conectar-se ao banco de dados SQLite
        $db = new SQLite3('login.db');


        // Execute a consulta para buscar os dados
        $results = $db->query('SELECT cidade, rua, numero, complemento FROM loogin');
        $row = $results->fetchArray();

        echo "<form action='atualizarperfil.php' method='POST'>";

        while ($row = $results->fetchArray()) {

            echo "<div class='d1'>";
            echo "<label for='Cidade'>Cidade:</label>";
            echo "<input type='text' class='forms' id='nome' name='nome' value='" . $row['cidade'] . "' />";
            echo "</div>";

            echo "<div class='d2'>";
            echo "<label for='bairro'>Bairro:</label>";
            echo "<input type='text' class='forms' id='cpfecnpj' name='cpfecnpj' value='" . $row['rua'] . "' />";
            echo "</div>";

            echo "<div class='d3'>";
            echo "<label for='rua'>Rua:</label>";
            echo "<input type='text' class='forms' id='rua' name='rua' value='" . $row['rua'] . "' />";
            echo "</div>";

            echo "<div class='d4'>";
            echo "<label for='numero'>Número:</label>";
            echo "<input type='text' class='forms' id='numero' name='numero' value='" . $row['numero'] . "' />";
            echo "</div>";

            echo "<div class='d5'>";
            echo "<label for='complemento'>Complemento</label>";
            echo "<input type='text' class='forms' id='numero' name='numero' value='" . $row['complemento'] . "' />";
            echo "</div>";


            echo "<input type='submit' class='button' value='Salvar Alterações'>";
            echo "</form>";
        }
        ?>


    </div>
    <?php
    include_once("footer.php")
    ?>
</body>

</html>