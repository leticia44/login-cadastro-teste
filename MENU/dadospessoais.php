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
           
        <?php
        
        session_start();
        
        // Verificar se o usuário está logado
        if (!isset($_SESSION['username'])) {
        }
        
        // Conectar-se ao banco de dados SQLite
        $db = new SQLite3('login.db');
           
        
             // Execute a consulta para buscar os dados
             $results = $db->query('SELECT nome, contato, cpfecnpj, datanascimento, genero FROM loogin');
             $row = $results->fetchArray();

             echo "<form action='atualizarperfil.php' method='POST'>";

            while ($row = $results->fetchArray()) {
                
                echo "<div class='d1'>";
                echo "<label for='nome'>Nome:</label>";
                echo "<input type='text' class='forms' id='nome' name='nome' value='" . $row['nome'] . "' />";
                echo "</div>";
        
                echo "<div class='d2'>";
                echo "<label for='cpfecnpj'>CPF:</label>";
                echo "<input type='text' class='forms' id='cpfecnpj' name='cpfecnpj' value='" .$row['cpfecnpj'] . "' />";
                echo "</div>";
        
                echo "<div class='d3'>";
                echo "<label for='contato'>Telefone:</label>";
                echo "<input type='text' class='forms' id='contato' name='contato' value='" .$row['contato'] . "' />";
                echo "</div>";
        
                echo "<div class='d4'>";
                echo "<label for='data_nascimento'>Data de Nascimento:</label>";
                echo "<input type='date' class='forms' id='data_nascimento' name='data_nascimento' value='" .$row['datanascimento'] . "' />";
                echo "</div>";
        
                echo "<div class='d5'>";
echo "<label for='genero'>Gênero:</label>";
echo "<select id='genero' name='genero' class='d5'>";

// Adicione as opções de gênero aqui
$generos = array("Masculino", "Feminino", "Outro");

foreach ($generos as $genero) {
    // Verifique se o gênero atual é o mesmo que o gênero do usuário e marque-o como selecionado
    $selected = ($row['genero'] == $genero) ? "selected" : "";

    // Imprima a opção do gênero
    echo "<option value='$genero' $selected class='d5'>$genero</option>";
}

echo "</select>";
echo "</div>";
                echo "<input type='submit' class='button' value='Salvar Alterações'>";
                echo "</form>";
            }
        ?>

          
    </div>
    <?php include_once("footer.php"); ?>
</body>
</html>
