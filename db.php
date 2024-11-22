<?php



//Local

$servidor = "localhost";
$usuario = "root";
$senha = "23082006";
$db="contador";


$conexao = mysqli_connect($servidor, $usuario, $senha, $db);

$query="select * from cadastros order by nome";
$consultaCadastros= mysqli_query($conexao, $query);

?>

