<?php

include_once '../modeles/mesFonctionsAccesBDD.php';

$lePDO = connexionBDD();

$tesRef = getUnBien($lePDO,8);

var_dump($tesRef);