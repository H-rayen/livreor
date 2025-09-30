<?php
//Une page permettant de modifier son profil
// tableau pour définir les champs


?>

<?php include "structure/header.php"; 
        

?>
<head>
    <link rel= "stylesheet" href="./css/style_profil.css">
</head>
<body>
    <?php include "structure/menu.php"; ?>
    <div class="profil_container">
<form class="profil" method="post" action="model/edit-profil.php">
<h1>Profil</h1>
<label class="text" for="login">login :</label>
<input type ="text" placeholder="<?php echo $user["login"] ?> "id="login" name="login">
<label for="password"></label>
<input type ="password" placeholder="<?php echo $user["password"]?>"id="password" name ="password">
<input class="btn_profil" type ="submit" value="edit">
</div>
</form>
</body>
</html>