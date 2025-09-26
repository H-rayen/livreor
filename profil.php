<?php
//Une page permettant de modifier son profil
// tableau pour définir les champs
$user = [
    "login" => "rayen",
    "password" => "motdepasse"
];

?>
<?php include "structure/header.php"; ?>
<body>
    <?php include "structure/menu.php"; ?>
<form method="post" action="model/edit-profil.php">
<label for="login">login :</label>
<input type ="text" value="<?php echo $user["login"] ?> "id="login" name="login">
<label for="password"></label>
<input type ="password" value="<?php echo $user["password"]?>"id="password" name ="password">
<input type ="submit" value="edit">
</form>
</body>
</html>