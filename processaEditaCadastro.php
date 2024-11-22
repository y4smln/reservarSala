<?php

include 'db.php';

$id=$_POST['id'];
$nome = $_POST['nome'];
$sala = $_POST['sala'];
$date = $_POST['data'];
$hora = $_POST['hora'];

$query= "update cadastros set nome='$nome', sala='$sala', data='$date', hora='$hora' where id= $id";

mysqli_query($conexao, $query);

header('location:index.php?pagina=cadastros');