<?php

include_once '../modeles/mesFonctionsAccesBDD.php';

$lePDO = connexionBDD();

$ref = $_POST['ref'];
$description = $_POST['descrip'];
$prix = $_POST['prix'];
$surface = $_POST['surface'];
$type = $_POST['type'];
$ville = $_POST['ville'];
$nbPiece = $_POST['piece'];
$jardin = $_POST['jardin'];

$update = modifBien($lePDO,$ref,$description,$prix,$surface, $type, $ville, $nbPiece, $jardin);

if ($update == true) {
    echo 'Modification effectuée !';
} else {
    echo 'Erreur de modification';
}