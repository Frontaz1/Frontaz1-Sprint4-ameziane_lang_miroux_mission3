<?php

//on insère le fichier qui contient les fonctions
include_once '../modeles/mesFonctionsAccesBDD.php';

$lePDO = connexionBDD();

$testVilles = getLesVilles($lePDO);

var_dump($testVilles);