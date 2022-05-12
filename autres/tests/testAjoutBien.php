<?php

include_once '../modeles/mesFonctionsAccesBDD.php';

$lePDO = connexionBDD();

$insert = ajoutBien($lePDO, "LOCAL COMMERCIAL 80M²", 140920,80, 4, "Roubaix", 2, 1);

var_dump($insert);