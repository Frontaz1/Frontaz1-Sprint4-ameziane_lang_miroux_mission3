<?php

include_once '../modeles/mesFonctionsAccesBDD.php';
$lePDO = connexionBDD();

$image = getImage($lePDO, 1);

//var_dump($image[1]);

echo '<img src="../' . $image[0]['chemin'] . '" title ="bien" width=500px/>';
echo '<img src="../' . $image[1]['chemin'] . '" title ="bien" width=500px/>';