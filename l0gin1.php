<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<style> 

* {
    margin: 0;
    padding: 0;
    border: 0;
}

.blocofundof {
    width: 100%;
    height: 75vh;
    /* background-color: aqua; */
    position: relative;
    z-index: 1;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 10%; 
}

.blocologinf {
    width: 420px;
    height: 320px;
    background-color: #32200A;
    position: relative;
    z-index: 1;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    border-radius: 20px;
}

.pessoinha {
    width: 60px;
    height: 60px;
}

.blocologinf .p {
    color: white;
    font-size: 32px;
    text-align:center;
    font-family: "Poppins", sans-serif;
    font-weight: 200;
}

.blocologinf p {
    color: white;
    font-size: 32px;
    text-align:center;
    font-family: "Poppins", sans-serif;
    font-weight: 200;
}

.linhadourada {
    width: 90%;
    height: 3px;
    background-color: gold;
}

.loggim{
    margin-top: 5%;
   display: flex;
   margin-bottom: 5%; 
  
}

.loggin{
    display: flex;
    margin-bottom: 5%; 
}

.loggim h2{
    font-family: "Poppins", sans-serif;
    font-weight: 200;
    color: #FFFDFD;
    margin-right: 3%;
}

.loggin h2{
    font-family: "Poppins", sans-serif;
    font-weight: 200;
    color: #FFFDFD;
    margin-right: 2%;
}

.inputt{
    width: 250px;
    padding: -20px;
    background-color: #D9D9D9;
    border-radius: 10px;
    margin-right: 2%;
   
}
.notification {
    background: red;
    color: white;
    padding: 15px;
    border-radius: 10px;
    margin-bottom: 20px;
    text-align: center;
    margin-top: 20px;
}

</style>
<body>
    <?php
    if (isset($_SESSION['nao_autenticado'])) :
    ?>
        <div class="notification is-danger">
            <p>ERRO: Usuário ou senha inválidos.</p>
        </div>
    <?php
    endif;
    unset($_SESSION['nao_autenticado']);
    ?>

    <form action="login.php" method="POST">
        <div class="blocofundof">
            <div class='blocologinf'>
                <img src='imgs/pessoa1.png' alt='' class='pessoinha'/>
                <p class='p'>Faça seu Login</p>
                
                <div class='loggim'>
                    <h2> Email:</h2>
                    <input name='email' type='email' class='inputt'/>
                </div>
                <div class='loggin'>
                    <h2> Senha:</h2>
                    <input name='senha' type='text' class='inputt'/>
                </div>
                <button class='p3'>ENTRAR </button>
                
                
                <div class='linhadourada'></div>
            </div>
        </div>
    </form>
    <img src="imgs/fundo1.jpg" alt="Descrição da imagem" style="width: 100%; position: absolute; bottom: 0; z-index: -1;">
</body>
</html>
