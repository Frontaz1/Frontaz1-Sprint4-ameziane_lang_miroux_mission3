<?php

include_once '../modeles/mesFonctionsAccesBDD.php';

//appel de la fonction qui permet de se connecter à la base de données
$lePdo = connexionBDD();

$testVilles = testVille($lePdo, "Roubaix");

var_dump($testVilles);