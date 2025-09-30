<?php
session_start();
session_destroy();
header('Location: ./index.php');//redirection php de la méthode get en post

?>