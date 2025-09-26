<?php 
include '../core/bdd.php';
$login = $_POST['login'];
$password = $_POST['password'];
$id_session = 2;

$query="SELECT utilisateurs 
login = '$login', password = '$password' 
WHERE id = '$id_session'";
?>

 