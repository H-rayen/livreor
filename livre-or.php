<?php
include "structure/header.php";        
include "model/model_livreor.php";     
// Traiter le formulaire uniquement si l'utilisateur est connecté
if ($_SERVER['REQUEST_METHOD'] === 'POST' 
    && isset($_SESSION['id']) 
    && isset($_SESSION['login']) 
    && !empty($_POST['commentaire'])) {

    $commentaire = htmlspecialchars($_POST['commentaire']); // Sécurise le texte
    $id_utilisateur = $_SESSION['id'];

    insert_commentaire($id_utilisateur, $commentaire);       // Ajoute le commentaire en base
}

// Récupérer tous les commentaires après insertion
$recup = recup_info();

// Date actuelle pour le formulaire
$date = new DateTime();
$formatter = new IntlDateFormatter(
    'fr_FR',
    IntlDateFormatter::FULL,
    IntlDateFormatter::NONE,
    'Europe/Paris',
    IntlDateFormatter::GREGORIAN,
    'EEEE dd/MM'
);
?>
<link rel="stylesheet" href="./css/livre-or.css">
<?php include "structure/menu.php"; ?>

<h1>LIVRE D'OR</h1>

<section>
    <!-- Formulaire visible uniquement pour les utilisateurs connectés -->
    <?php if ( isset($_SESSION['login'])):
        ?>
    <form method="POST">
        <table border="1" cellpadding="5">
            <tr>
                <th>POSTÉ LE</th>
                <th>Utilisateur</th>
                <th>Commentaire</th>
            </tr>
            <tr>
                <td><input type="text" value="<?php echo $formatter->format($date); ?>" disabled></td>
                <td><input type="text" value="<?php echo htmlspecialchars($_SESSION['login']); ?>" disabled></td>
                <td>
                    <textarea name="commentaire" rows="5" cols="15" placeholder="Écrivez votre commentaire..." required></textarea><br>
                    <input type="submit" value="Envoyer le commentaire">
                </td>
            </tr>
        </table>
    </form>
    <?php else: ?>
    <p>Vous devez être connecté pour laisser un commentaire. <a href="connexion.php">Se connecter</a> ou <a href="inscription.php">S'incrire</a></p>
    <?php endif; ?>

    <hr>

    <!-- Liste des commentaires -->
    <h2>Commentaires précédents</h2>
    <table border="1" cellpadding="5">
        <tr>
            <th>Date</th>
            <th>Utilisateur</th>
            <th>Commentaire</th>
        </tr>
        <?php 
        foreach ($recup as $row): ?>
        <tr>
            <td><?php echo htmlspecialchars($row['date']); ?></td>
            <td><?php echo htmlspecialchars($row['login']); ?></td>
            <td style="white-space: pre-wrap;"><?php echo (htmlspecialchars($row['commentaire'])); ?></td>
        </tr>
        <?php endforeach; ?>
    </table>

</section>
</body>
</html>
