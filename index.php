<?php

// Une page d’accueil qui présente votre site internet

?>

<?php include "structure/header.php"; ?>
<body>
<?php include "structure/menu.php"; ?>
<h1>Livre d'or</h1>    
<h2><?php if (isset($_SESSION["login"])){
        echo "Bonjour " , $_SESSION["login"];
}else{
    echo "Bonjour utilisateur";
}
?>
</h2>
</body>
</html>