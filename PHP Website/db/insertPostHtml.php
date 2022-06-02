<?php
include('conn.php');



$id = (isset($_POST['id']) ? $_POST['id'] : '');
$titulo     = $_POST['titulo'];
$link       = $_POST['link'];




$sql = "INSERT INTO html (titulo, link) VALUES ('$titulo','$link');";

if ($conn->query($sql) === TRUE) {
    $last=$conn->insert_id;
    $sql="UPDATE html SET imagem='img$last.png' WHERE id=$last";
    $conn->query($sql);
    include('uploadfilehtml.php');
    header('Location:../index.php?p=administracao');
} else {
    header('Location:../index.php?p=administracao');
}

$conn->close();
?>