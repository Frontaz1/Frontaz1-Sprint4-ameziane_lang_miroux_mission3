<?php

include_once '../modeles/mesFonctionsAccesBDD.php';

$lePDO = connexionBDD();

$reference = $_POST['ref'];

$recherche = getUnBien($lePDO,$reference);

if($recherche == true) {
    header("Location: ../vuescontroleurs/affichageUnBien.php?ref=". $reference);
} else {
    echo "La référence n'existe pas";
}