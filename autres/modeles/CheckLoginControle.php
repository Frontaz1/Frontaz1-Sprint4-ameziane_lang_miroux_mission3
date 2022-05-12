<?php

session_start();

include_once 'mesFonctionsAccesBDD.php';

//appel de la fonction qui permet de se connecter à la base de données
$lePdo = connexionBDD();

$email = htmlspecialchars($_POST['email']);
$mdp = htmlspecialchars($_POST['mdp']);

if(strlen($email)>20){
    echo "La taille de l'email est trop grand";
    $formatMailOk=false;
} else {
    
$formatMailOk = filter_var($email, FILTER_VALIDATE_EMAIL);
if(formatMailOk) {
    $lePdo=connexionBDD();
    if (testMail($lePdo,$email,$mdp)== true) {
    echo 'L identfiant est correct';
    $_SESSION['role'] = 'agentImmo';
    $_SESSION["autoriser"] = "oui";
    header("Location: ../vuescontroleurs/formAjouteBien.php");
    exit();
} else {
    echo 'Identifiant incorrect';
}
}
}
//$mdpHash = password_hash($mdp,PASSWORD_DEFAULT);
//if(password_verify($mdp, $mdpHash)){
//$testCo = testMail($lePdo, $email, $mdp);
//}
//else{