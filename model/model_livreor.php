<?php 
require_once($_SERVER['DOCUMENT_ROOT'] . "/livreor/core/bdd.php");


function recup_info () {
   
  global $pdo; 
  $query = "SELECT * FROM commentaires INNER JOIN utilisateurs ON commentaires.id_utilisateur = utilisateurs.id"; 
  $pdostatement= $pdo->query($query);
  $res = $pdostatement->fetchAll(PDO::FETCH_ASSOC);
  return $res;
}

//function commentaire($conn, $id, $text) {
  //  $stmt = $conn->prepare("INSERT INTO comentaires (id_utilisiteur,) VALUES (?)");
  ##  $stmt->bind_param("is",id, $text);
    ##$stmt->execute();
    #$stmt->close();
    #return 
##};

?> 


