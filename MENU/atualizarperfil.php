<?php
// Verificar se os dados do formulário foram enviados
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Receber os dados do formulário
    $nome = $_POST['nome'];
    $cpf = $_POST['cpfecnpj'];
    $contato = $_POST['contato'];
    $datanascimento = $_POST['data_nascimento'];
    $genero = $_POST['genero'];
    
    // Estabelecer conexão com o banco de dados
    try {
        $db = new PDO('sqlite: login.db'); // Substitua pelo caminho correto do seu banco de dados
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Erro ao conectar ao banco de dados: " . $e->getMessage();
        die();
    }

    // Atualizar os dados do usuário na tabela login
    $query = "UPDATE loogin SET nome = :nome, contato = :contato, datanascimento = :data_nascimento, genero = :genero WHERE cpf = :cpf";
    $stmt = $db->prepare($query);
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':contato', $contato);
    $stmt->bindParam(':data_nascimento', $datanascimento);
    $stmt->bindParam(':genero', $genero);
    $stmt->bindParam(':cpf', $cpf);
    
    try {
        $stmt->execute();
        echo "Dados atualizados com sucesso!";
    } catch (PDOException $e) {
        echo "Erro ao atualizar os dados: " . $e->getMessage();
    }

    // Fechar a conexão com o banco de dados
    $db = null;
} else {
    // Se os dados não foram enviados via POST, redirecionar para a página de origem
    header("Location: dadospessoais.php");
    exit();
}
?>
