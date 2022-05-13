<?php

include_once '../modeles/mesFonctionsAccesBDD.php';

$lePDO = connexionBDD();




$del= supBien($lePDO,"1");

