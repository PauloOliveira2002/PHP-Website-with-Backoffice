<?php
session_start();
include('conn.php');

if(!isset($_GET['id'])){
    header('Location:../index.php?p=administracao');
    exit();
}

$id = $_GET['id'];

$sql = "DELETE FROM Html WHERE id = $id";

$target_dir = "../img/html-css/";
$target_file = $target_dir . "img".$id.".png";

//Eliminar ficheiro Local
if (file_exists($target_file)){
    unlink($target_file);
}

if ($conn->query($sql) === TRUE) {
    header('Location:../index.php?p=administracao');
} else {
    header('Location:../index.php?p=administracao');
}

$conn->close();
?>