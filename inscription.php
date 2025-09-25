<?php
// Une page contenant un formulaire d’inscription
?>

<?php include "structure/header.php"; ?>
<body>
    <?php include "structure/menu.php"; ?>
    <h1>inscription d'Adrien</h1>

    <form method="post" action ="model/traitement-inscription.php">

    <input type="text" >
    <input type="password">
    <input type="submit" value="s'inscrire">


    </form>
</body>
</html>