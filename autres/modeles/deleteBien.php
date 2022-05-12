<?php

include_once '../modeles/mesFonctionsAccesBDD.php';

$lePDO = connexionBDD();

$ref= $_POST['id'];


$del= supBien($lePDO,$ref);

if ($del == true) {
    echo 'Delete effectuée !';
  
    exit();
} else {
    echo 'Erreur de suppression ';
    
}