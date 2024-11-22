<?php

include 'db.php';

$id=$_POST['id'];
$nome = $_POST['nome'];
$feed = $_POST['feed'];
$date = $_POST['data'];

$query= "update cadastros set nome='$nome', feed='$feed', data='$date' where id= $id";

mysqli_query($conexao, $query);

header('location:index.php?pagina=cadastros');