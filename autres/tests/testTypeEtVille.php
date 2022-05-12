<?php

include_once '../modeles/mesFonctionsAccesBDD.php';

//appel de la fonction qui permet de se connecter à la base de données
$lePdo = connexionBDD();



$testTypes = testTypeVille($lePdo, 1, "0",1);

var_dump($testTypes);

