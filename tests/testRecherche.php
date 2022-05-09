<?php

include_once '../modeles/mesFonctionsAccesBDD.php';

$lePDO = connexionBDD();

$testTypes = testTypeVille($lePDO, 1, "Paris",1,0,150000);

var_dump($testTypes);

