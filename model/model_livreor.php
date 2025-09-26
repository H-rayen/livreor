<?php 
include '../core/bdd.php';

$query = "SELECT * FROM commentaires INNER JOIN utilisateurs ON commentaires.id_utilisateur = utilisateurs.id"; 

// execute de la roquette //
$pdostatement= $pdo->query($query);
$res = $pdostatement->fetchAll(PDO::FETCH_ASSOC);

var_dump($res);

?> 


