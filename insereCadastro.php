<?php

include 'db.php';

$nome = $_POST['nome'];
$sala = $_POST['sala'];
$date = $_POST['data'];
$hora = $_POST['hora'];
$id = $_POST['id'];

$query= "insert into cadastros(nome, sala, data, hora) 
values('$nome', '$sala', '$date', '$hora')";

mysqli_query($conexao, $query);

header('location:index.php?pagina=cadastros');