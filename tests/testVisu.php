<?php

include_once '../modeles/mesFonctionsAccesBDD.php';
$lePDO = connexionBDD();

$ref_bien = $_GET['ref'];

$affich = affichageUnBien($lePDO, $ref_bien);
//include_once '../inc/entete.inc';


var_dump($affich);

//include_once '../inc/piedDePage.inc';
