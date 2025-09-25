
<?php
// Une page contenant un formulaire d’inscription
?>

<?php include "structure/header.php"; ?>
<head>
<link rel="stylesheet" href="style_inscription.css">

</head>
<body>
    <?php include "structure/menu.php"; ?>

    <h1>PAGE D'INSCRIPTION</h1>
    <div class="inscription_container">
        <form class="inscription" method="post" action ="model/traitement-inscription.php">

        <input class="placeholder" type="text" name="nom_d'utilisateur" placeholder="Entrer un nom d'utilisateur">
        <input class="placeholder" type="password" name="password" placeholder="Créer le mot de passe" required="">
        <input class="placeholder" type="password" name="confirm_password" placeholder="Confirmer le mot de passe" required="">
        <input class="inscrire" type="submit" value="s'inscrire">
    


    </form>
</div>
</body>
</html>
