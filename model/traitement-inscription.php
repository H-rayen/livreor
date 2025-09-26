<?php

include '../core/bdd.php';
include '../core/tools.php';



$method = $_SERVER['REQUEST_METHOD'];
if($method=='POST'){// post est de type string. 

    echo "j ai acces a la page depuis la methode:$method";

    if(isset($_POST["login"]) && isset($_POST["password"]) && isset($_POST["confirm_password"])){
        echo'toutes les clés de $_POST éxistent';//vérifie si les post éxistent 

        if(!empty($_POST["login"]) && !empty($_POST["password"]) &&   !empty($_POST["confirm_password"])){ 
          //fonction qui vérifie si les champs ne sont pas vides
            if(strlen($_POST['password']) > 5){
                echo'le mot de passe  contient au moins 6 caractères';

                //verifier que le password n'est pas différent du confirm_password 
                if($_POST['password']==$_POST['confirm_password']){
                    
                }
                else{

                }
            }
        }
    }
}
    
else{
    header('Location: ../inscription.php');//redirection php de la méthode get en post
}

    function ajout_util($login, $password, $pdo){
        $stmt = $pdo->prepare("INSERT INTO utilisateurs (login,password)VALUES (?,?)");
        $response = $stmt->execute([$login,$password]);

        var_dump($response);
    // vérifier si les variables éxistent 
            // ansi que leur type
    }

    ajout_util($_POST["login"], $_POST["password"], $pdo);
?>
