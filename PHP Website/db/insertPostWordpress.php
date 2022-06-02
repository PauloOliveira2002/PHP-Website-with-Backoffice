<?php
include('conn.php');



$id = (isset($_POST['id']) ? $_POST['id'] : '');
$titulo     = $_POST['titulo'];
$link       = $_POST['link'];




$sql = "INSERT INTO wordpress (titulo, link) VALUES ('$titulo','$link');";

if ($conn->query($sql) === TRUE) {
    $last=$conn->insert_id;
    $sql="UPDATE wordpress SET imagem='img$last.png' WHERE id=$last";
    $conn->query($sql);
    include('uploadfilewordpress.php');
    header('Location:../index.php?p=administracao');
} else {
    header('Location:../index.php?p=administracao');
}

$conn->close();
?>