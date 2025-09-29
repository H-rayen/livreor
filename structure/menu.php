<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
        <link rel="stylesheet" href="./css/menu.css" >
</head>

<body>
<div class="topnav">  
   <a class="active"href="index.php">ACCUEIL</a>  
   <a href="livre-or.php">LIVRE D'OR </a>
  <?php if (is_logged_in()) :?>
  <a href="profil.php">PROFIL</a>
  <a href="deconnexion.php">DECONNEXION</a>
  
  <?php else : ?>        
  <a  href="inscription.php">INSCRIPTION</a>
  <a href="connexion.php">CONNEXION</a>
  <?php endif ?>
  
</div>
 </div>
</body>
 
