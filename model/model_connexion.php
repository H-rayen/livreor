<?php
session_start();
include '../core/bdd.php';
include '../core/tools.php';

$stmt = $pdo->prepare("SELECT* FROM utilisateurs WHERE login =?");


//toujours ouvrir une session au début 
if (!empty($_POST)) {
    // il s'agit d'une condition qui dépend de l'existance des champs de connexion de l'utilisateur
    $login = $_POST['login'];
    $password = $_POST['password'];
    if (isset($_POST['login']) && isset($_POST['password'])) {

        //on appelle les donnée enregristré depuis la bdd.sql user.
        $stmt = $pdo->prepare("SELECT * FROM utilisateurs WHERE login =?");
        $response = $stmt->execute([$login]);

        $res = $stmt->fetch(PDO::FETCH_ASSOC);
       
    }

    if ($res['password'] == $_POST['password']) {
        $_SESSION['login'] = $res['login'];
        header("Location:../connexion.php");
        exit;
    }
}

// verifier tel retour de variable 
//      }
//on vérifie id et password
//on verifie si les informations correspondent au formulaire :{
// si (oui){une session est crée
// } 
// si non {on renvoie dans un formulaire avec un message d'erreur optionel  
//     }
