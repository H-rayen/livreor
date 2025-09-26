<?php
include '../core/bdd.php';
$login = $_POST['login'];
$password = $_POST['password'];
$id_session = 2;

$query="UPDATE utilisateurs 
SET login = '$login', password = '$password' 
WHERE id = '$id_session'";

$pdo->exec($query);
echo 'mise à jour éffectuée';
