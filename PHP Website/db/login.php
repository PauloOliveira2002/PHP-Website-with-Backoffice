<?php
session_start();
$user = $_POST['username'];
$pass = $_POST['password'];

include('conn.php');

$sql="SELECT administracao.username, administracao.password FROM administracao WHERE administracao.username='$user' AND administracao.password='$pass';";

$result = $conn->query($sql);

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    $_SESSION['username']=$user;
    
    header('Location:../index.php?p=inicio');
} else {
    header('Location:../index.php?p=inicio');
}
$conn->close();
?>



