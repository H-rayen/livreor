<?php
// La connexion à la base de donnée.
// on définit notre classe pdo avec le lien de notre base de donnée
// notre user ainsi que le mot de passe.
// puis on insert dans la table utilisateurs login et password avec leurs valeurs respectives
// et pour finir la fonction éxecute la variable $sql.

$dsn = 'mysql:dbname=livreor;host=127.0.0.1';
$user = 'root';
$password = '';

$pdo = new PDO($dsn, $user, $password);
 



