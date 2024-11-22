<?php



//Local

$servidor = "localhost";
$usuario = "root";
$senha ="";
$db="testefeed2";


$conexao = mysqli_connect($servidor, $usuario, $senha, $db);

$query="select * from cadastros order by nome";
$consultaCadastros= mysqli_query($conexao, $query);



