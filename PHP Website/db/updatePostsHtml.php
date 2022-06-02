<?php
include('conn.php');



$id         = $_POST['id'];
$titulo     = $_POST['titulo'];
$link       = $_POST['link'];






    $sql = "UPDATE html SET titulo = '$titulo', link = '$link' WHERE id = $id";
    if ($conn->query($sql) === TRUE) {
        $last=$conn->insert_id;
        $sql="UPDATE html SET imagem='img$last.png' WHERE id=$last";
        $conn->query($sql);
        include('uploadfilehtml.php');
}
    

if ($conn->query($sql) === TRUE) {
    header('Location:../index.php?p=administracao');
} else {
    header('Location:../index.php?p=administracao');
}

$conn->close();
