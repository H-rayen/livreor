<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/livreor/core/bdd.php");

function recup_info() {
    global $pdo;
    $query = "SELECT c.commentaire, c.date, u.login
              FROM  utilisateurs u
              INNER JOIN commentaires c ON c.id_utilisateur = u.id
              ORDER BY c.date DESC";
    $stmt = $pdo->query($query);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function insert_commentaire($id_utilisateur, $commentaire) {
// var_dump($id_utilisateur);
// die();
    global $pdo;
    $query = "INSERT INTO commentaires (commentaire, id_utilisateur, date)
              VALUES (:commentaire, :id_utilisateur, NOW())";
    $stmt = $pdo->prepare($query);
    $stmt->execute([
        ':commentaire' => $commentaire,
        ':id_utilisateur' => $id_utilisateur
    ]);
}
?>