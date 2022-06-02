<?php
session_start();
include('conn.php');

if(!isset($_GET['id'])){
    header('Location:../index.php?p=administracao');
    exit();
}

$id = $_GET['id'];

$sql = "DELETE FROM clientes WHERE id = $id";


if ($conn->query($sql) === TRUE) {
    header('Location:../index.php?p=administracao');
} else {
    header('Location:../index.php?p=administracao');
}

$conn->close();
