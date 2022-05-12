<?php

session_start();

include_once 'mesFonctionsAccesBDD.php';

//appel de la fonction qui permet de se connecter à la base de données
$lePdo = connexionBDD();

$email = $_POST['email'];
$mdp = $_POST['mdp'];
//$mdpHash = password_hash($mdp,PASSWORD_DEFAULT);
//if(password_verify($mdp, $mdpHash)){
$testCo = testMail($lePdo, $email, $mdp);
//}
//else{
//  echo 'le mot de passe est invalide';
//}

var_dump($testCo);

if ($testCo == true) {
    echo 'L identfiant est correct';
    $_SESSION['role'] = 'agentImmo';
    $_SESSION["autoriser"] = "oui";
    header("Location: ../vuescontroleurs/formAjouteBien.php");
    exit();
} else {
    echo 'Identifiant incorrect';
}