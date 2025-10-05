<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/livreor/core/bdd.php");

// Recupera todos los comentarios con el login del usuario
function recup_info() {
    global $pdo;
    $query = "SELECT c.commentaire, c.date, u.login
              FROM commentaires c
              INNER JOIN utilisateurs u ON c.id_utilisateur = u.id
              ORDER BY c.date DESC";
    $stmt = $pdo->query($query);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

// Inserta un nuevo comentario
function insert_commentaire($id_utilisateur, $commentaire) {
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