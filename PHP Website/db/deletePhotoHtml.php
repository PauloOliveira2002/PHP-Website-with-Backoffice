<?php

include('conn.php');

$target_dir = "../img/html-css/";
$id= $_GET['id'];
$target_file = $target_dir . "img".$id.".png";



//Eliminar ficheiro Local
if (file_exists($target_file)){
    unlink($target_file);
}

//limpar campo de imagem no registo do utilizador da BD
$sql = "UPDATE produto SET imagem='' WHERE id=$id";
$conn->query($sql);

header('Location:../index.php?p=administracao');