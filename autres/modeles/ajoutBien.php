<?php

include_once '../modeles/mesFonctionsAccesBDD.php';

$lePDO = connexionBDD();

$description = $_POST['descrip'];
$prix = $_POST['prix'];
$surface = $_POST['surface'];
$type = $_POST['type'];
$ville = $_POST['ville'];
$nbPiece = $_POST['piece'];
$jardin = $_POST['jardin'];

$insert = ajoutBien($lePDO,$description,$prix,$surface, $type, $ville, $nbPiece, $jardin);

if ($insert == true) {
    echo 'Ajout effectuée !';
    header("Location: ../vuescontroleurs/formAjouteBien.php");
    exit();
} else {
    echo 'Erreur d ajout';
}