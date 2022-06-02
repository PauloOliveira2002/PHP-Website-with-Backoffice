<?php
include('conn.php');



$id = (isset($_POST['id']) ? $_POST['id'] : '');
$email     = $_POST['email'];
$mensagem       = $_POST['msg'];




$sql = "INSERT INTO clientes (email, mensagem) VALUES ('$email','$mensagem');";

if ($conn->query($sql) === TRUE) {

    header('Location:../index.php?p=inicio');
} else {
    header('Location:../index.php?p=inicio');
}

$conn->close();
