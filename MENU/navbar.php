
<nav>
        <a href="#home"><img src='Imagens/NavBar pessoa/Site.jpg' alt='#' className='logonav'/></a>
        <a href="#home"><p>HOME</p></a>
        <a href="#nossosservicos"><p>NOSSOS SERVIÇOS</p></a>
        <a href="#sobrenos"><p>SOBRE NÓS</p></a>
        <a href="#nossocontato"><p>CONTATO DA EMPRESA</p></a>
        <div className="botoesnav">
        <img src='Imagens/NavBar pessoa/carrinhonav.png' alt="#"></img>
        <a href="dadospessoais.php">
        <img src='usuarionav.png' alt="#" width={50}></img> </a>
        </div>
    </nav>
<style>
nav {
    width: 100%;
    height: 80px;
    background-color: #442C0F;
    position: fixed;
    z-index: 2;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-around;
}

.logonav {
    width: 120px;
    height: 60px;

}

nav p {
    color: white;
    font-family: "Poppins", sans-serif;
    font-weight: 300;
    font-size: 14px;
}

.botoesnav {
    display: flex;
    width: 150px;
    flex-direction: row;
    justify-content: space-around;
}
  </style>
