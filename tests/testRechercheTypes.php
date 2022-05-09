<?php

include_once '../modeles/mesFonctionsAccesBDD.php';

//appel de la fonction qui permet de se connecter à la base de données
$lePdo = connexionBDD();

$numType = 1;

$testTypes = testType($lePdo, $numType);

var_dump($testTypes);