<?php
// Une page contenant un formulaire de connexion salut a tous 

?>
<head>
    <link rel= "stylesheet" href="style_connexion.css">

</head>
<?php include "structure/header.php"; ?>
<body>
    <?php include "structure/menu.php"; ?>
            <div class="connection_container">

    <form class="connexion" method="post" action ="model/traitement-connexion.php">
        <h1>Connexion</h1>
        <p class="text">Nom d'utilisateur</p>
        <input name="login" type="text" placeholder="Nom d'utilisateur">
        <p class="text">Mot de passe</p>
        <input name="password" type="password" placeholder="Mot de passe">
        <input class="btn_connexion" name ="bouton" type="submit" value="Envoyer"> 

    </form>
    </div>
</div>
</body>
</html>