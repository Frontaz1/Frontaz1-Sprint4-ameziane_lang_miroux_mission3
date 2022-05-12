<?php

include_once '../modeles/mesFonctionsAccesBDD.php';
$lePDO = connexionBDD();

$ref_bien = $_GET['ref'];

$affich = affichageUnBien($lePDO, $ref_bien);
$image = getImage($lePDO, $ref_bien);

include_once '../inc/entete.inc';
echo ' <div id="printable">';
echo '<h1 class = "visuBien">Bien de référence ' . $affich['ref'] . ' -  Prix : ' . $affich['prix'] . ' euros </h1><br/><br/>';

echo '<p class = "visuBien">Localisation : ' . $affich['ville'] . '<br/><br/>';
echo $affich['descrip'] . '<br/><br/>';
echo 'Surface de ' . $affich['surface'] . 'm²' . '<br/><br/></p>';

echo '<img src="../' . $image[0]['chemin'] . '" title ="bien n°' . $image[0]['nom'] . '" width=500px/>';
echo '</div>';
echo '  <button onClick="printToPDF()">Télécharger </button>';
include_once '../inc/piedDePage.inc';
