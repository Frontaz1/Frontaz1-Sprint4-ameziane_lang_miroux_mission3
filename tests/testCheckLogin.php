<?php

session_start();

include_once '../modeles/mesFonctionsAccesBDD.php';

//appel de la fonction qui permet de se connecter à la base de données
$lePdo = connexionBDD();

$testCo = testMail($lePdo, 'julien@gmail.com', 'test123');

var_dump($testCo);

if ($testCo == true) {
    echo 'L identfiant est correct';
} else {
    echo 'Identifiant incorrect';
}