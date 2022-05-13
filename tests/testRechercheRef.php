<?php

include_once '../modeles/mesFonctionsAccesBDD.php';

$lePDO = connexionBDD();

$tesRef = getUnBien($lePDO,7);

var_dump($tesRef);