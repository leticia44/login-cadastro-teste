<?php
session_start();
// include_once("templates/header.php"); // HEADER

?>

<link rel="stylesheet" href="css/carrinho.css">
<link rel="stylesheet" href="/FormaDePag.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Italiana&family=Poppins:wght@100;200;300;400;500&display=swap" rel="stylesheet">

</head>
<body>
<br>
<br>


</head>
<body>
<div class="tituloAss">
    <div class="a01"></div>
    <div class="a02"><p>NOVA FORMA DE PAGAMENTO</p></div>
    <div class="a03"></div>
   </div>
   <br><br>

<script>
   

    function carregarCarrinho() {
        const container = document.getElementById('carrinho');
        container.innerHTML = '';

        let carrinho = JSON.parse(localStorage.getItem('carrinho')) || [];
        let total = 0;

        if (carrinho.length === 0) {
            container.innerHTML = '<p>Carrinho vazio</p>';
        } else {
            carrinho.forEach((item, index) => {
                const div = document.createElement('div');
                div.classList.add('produto');
                div.innerHTML = `<p>${item.nome} - R$ ${item.preco.toFixed(2)}</p>
                            <button class="remover-carrinho" onclick="removerProduto(${index})">Remover do Carrinho</button>`;
                container.appendChild(div);
                total += item.preco;
            });
        }

        const totalElement = document.getElementById('total');
        totalElement.textContent = total.toFixed(2);
    }

    function esvaziarCarrinho() {
        localStorage.removeItem('carrinho');
        carregarCarrinho();
        alert('Carrinho esvaziado!');
        
    }

    function removerProduto(index) {
        let carrinho = JSON.parse(localStorage.getItem('carrinho')) || [];

        if (index >= 0 && index < carrinho.length) {
            carrinho.splice(index, 1);
            localStorage.setItem('carrinho', JSON.stringify(carrinho));
            carregarCarrinho();
            alert('Produto removido do carrinho!');
        }
    }

    function finalizarCompra() {
        localStorage.removeItem('carrinho'); // Limpa o carrinho removendo o item 'carrinho' do localStorage
        carregarCarrinho(); // Atualiza a exibição do carrinho para refletir a remoção dos itens
        alert('Compra finalizada!');
    }
</script>
<body>

<?php
function getCardBrand($cardNumber)
{
    return 'visa';
}


$cardNumberPlaceholder = '** ** ** 1234';
$cardNamePlaceholder = 'John Doe';
$cardValidPlaceholder = '12/23';
?>
<div class="containerha">
<div class="divDireita">
<form class="forms" method="post" action="obrigadaArara.php">
    <div style="display: flex; justify-content: space-between;">
        <div>
            <h2> Nome no cartão:</h2>
            <input type="text" name="card_name" id="cardNameInput" class="forms1"> <br>
            <h2> Número do cartão: </h2>
            <input type="text" name="card_number" id="cardNumberInput" class="forms1"><br>
            <h2>Parcela: </h2>
            <select name="card_parcel" id="cardParcelInput" class="forms1">
                <?php for ($i = 1; $i <= 6; $i++) : ?>
                    <option value="<?php echo $i; ?>"><?php echo $i; ?>x sem juros</option>
                <?php endfor; ?>
            </select><br>
        </div>
                </div>

        <div class="divEsquerda">
    <div class="haha">
            <h2> Data de validade: 
            <input type="text" name="card_valid" id="cardValidInput" class="forms2">
            </h2>
            <h2> CVC:
            <input type="text" name="card_code" id="cardCodeInput" class="forms3">
            </h2><br>
        </div>
    </div>

    <?php
    $cardBrand = getCardBrand($cardNumberPlaceholder);
    ?>
</div>
 
    <div class="live-update card" id="liveUpdateCard">
        <img class="card-brand" src="path/to/<?php echo $cardBrand; ?>.png" alt="Card Brand">
        <div class="card-number"><?php echo $cardNumberPlaceholder; ?></div>
        <div class="card-name"><?php echo $cardNamePlaceholder; ?></div>
        <div class="card-valid">Validade: <?php echo $cardValidPlaceholder; ?></div>
    </div>
    </div>
    </div>
        <div>
            

        <!-- Botão "Finalizar Compra" -->
        <!-- Botão "Finalizar Compra" -->
        <input type="hidden" name="preco" value="<?php echo $_SESSION['valorReserva']; ?>">
    <button type="submit" name="finalizarCompra" onclick="window.location.href='obrigadaArara.php';">Salvar</button>
</form>
  </form>
</form>
        </div>
<br> <br>

 
<script>
  
  function updateCard() {
    const cardNumberInput = document.getElementById('cardNumberInput');
    const cardNumber = cardNumberInput.value;
    const cardName = document.getElementById('cardNameInput').value;
    const cardValid = document.getElementById('cardValidInput').value;

    const liveUpdateCard = document.getElementById('liveUpdateCard');
    const cardBrandImage = liveUpdateCard.querySelector('.card-brand');
    const cardNumberDiv = liveUpdateCard.querySelector('.card-number');

    cardNumberDiv.textContent = cardNumber;

    // // Defina o tamanho da imagem
    // cardBrandImage.style.width = '100px';
    // cardBrandImage.style.height = '50px';


    // Nome no Cartão 
    liveUpdateCard.querySelector('.card-name').textContent = cardName;
    liveUpdateCard.querySelector('.card-valid').textContent = 'Validade: ' + cardValid;
  }

  // Function to clear the form
  function clearForm() {
    document.getElementById('cardForm').reset();
    updateCard(); // Update the card after clearing the form
  }

  // Add event listeners to input fields for live updating
  const formInputs = document.querySelectorAll('input[type="text"]');
  formInputs.forEach(input => {
    input.addEventListener('input', updateCard);
  });

  // Update the card on page load
  updateCard();
</script>



<?php
 //Footer
?>