<?php

include_once '../modeles/mesFonctionsAccesBDD.php';

$lePDO = connexionBDD();

$testTypes = testPrix($lePDO,100000,200000);

var_dump($testTypes);

