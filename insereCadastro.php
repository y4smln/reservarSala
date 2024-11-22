<?php

include 'db.php'; // Inclui a conexão com o banco de dados

// Captura e validação dos dados enviados pelo formulário
$nome = mysqli_real_escape_string($conexao, $_POST['nome']);
$sala = mysqli_real_escape_string($conexao, $_POST['sala']);
$data = mysqli_real_escape_string($conexao, $_POST['data']);
$hora = mysqli_real_escape_string($conexao, $_POST['hora']);

// Valida se todos os campos foram preenchidos
if (empty($nome) || empty($sala) || empty($data) || empty($hora)) {
    die("Todos os campos devem ser preenchidos!");
}

// Comando SQL para inserir os dados no banco
$query = "INSERT INTO cadastros (nome, sala, data, hora) 
          VALUES ('$nome', '$sala', '$data', '$hora')";

// Executa o comando e verifica se houve erro
if (mysqli_query($conexao, $query)) {
    header('location:index.php?pagina=cadastros'); // Redireciona para a listagem
} else {
    echo "Erro ao inserir: " . mysqli_error($conexao);
}
?>
