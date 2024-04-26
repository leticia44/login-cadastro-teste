<?php
// Inclua aqui qualquer lógica necessária

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bloco de Login Empresa</title>
    <link rel="stylesheet" type="text/css" href="cadastro.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
<form action="cadastrar.php" method="POST">
<div class='blocofundo'>
    <div class='blocologin'>
        <div class='facacadastro'>
            <img src='Imagens/Pagina_2/predio.png' alt='' class='prediozinho'/>
            <p class='p1'>Faça o cadastro de </p>
            <p class='p1'>sua empresa</p>
            <p class='p2'>Já está cadastrado em</p>
            <p class='p2'>nosso sistema?</p>
            <a href="l0gin1.php"><p class='p3'>ENTRE AQUI!</p></a>
        </div>
  
        <div class='dados'>
            <div class='dados1'>
            
                <h2> Nome da Empresa:</h2>
                <input name='nome' type='text' class='forms'/>

                <h2> CNPJ:</h2>
                <input name='cpfecnpj' type='text' class='forms'/>

                <h2> Número de contato:</h2>
                <input name='contato' type='text' class='forms'/>

                <h2> E-mail:</h2>
                <input name='email' type='email' class='forms'/>
            </div>
            <div class='dados2'>
                <h2> Rua:</h2>
                <input name='rua' type='text' class='forms'/>
                <div class='forms3'>
                    <h1> Número:</h1>
                    <h1> Complemento:</h1>
                </div>
                <div class='forms4'>
                    <input name='numero' type='text' class='forms5'/>
                    <input name='complemento' type='text' class='forms5'/>
                </div>

                <h2> Cep:</h2>
                <input name='cep' type='text' class='forms'/>
                <h2> Cidade:</h2>
                <input name='cidade' type='text' class='forms'/>
            </div>

            <div class='dados3'>
                <div class='forms6'>
                    <h2> Senha:</h2>
                    <input name='senha' type='password' class='forms66'/>
                </div>
                <button class='p3'>ENTRAR </button>

                </form>
                <div class='linhadourada'></div>
            </div>
        </div>
    </div>
</div>
<img src="imgs/fundo1.jpg" alt="Descrição da imagem" style="width: 100%; position: absolute; bottom: 0; z-index: -1;">

</body>
</html>
