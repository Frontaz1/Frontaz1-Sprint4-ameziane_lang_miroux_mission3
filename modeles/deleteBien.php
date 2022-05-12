<?php

include_once '../modeles/mesFonctionsAccesBDD.php';

$lePDO = connexionBDD();

$ref= $_POST['ref'];


$del= supBien($lePDO,$ref);

if ($del == true) {
    echo 'Delete effectuée !';
    header("Location: ../vuescontroleurs/formAjouteBien.php");
   
} else {
    echo 'Erreur de suppression ';

    
}