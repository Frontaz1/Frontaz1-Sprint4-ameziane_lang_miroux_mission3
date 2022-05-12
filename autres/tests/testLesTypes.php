<?php

//on insère le fichier qui contient les fonctions
include_once '../modeles/mesFonctionsAccesBDD.php';

$lePDO = connexionBDD();

$testTypes = getLesTypes($lePDO);

var_dump($testTypes);