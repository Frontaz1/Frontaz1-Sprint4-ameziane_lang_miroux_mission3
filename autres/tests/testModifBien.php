<?php

include_once '../modeles/mesFonctionsAccesBDD.php';

$lePDO = connexionBDD();

$update = modifBien($lePDO, 32, "LOCAL COMMERCIAL 80M² - TOURS NORD Les locaux sont situés en rez-de-chaussée d'un immeuble en copropriété et développent une surface de 80m² environ, avec une vitrine, comprenant une pièce principale et une pièce avec sanitaire et point d'eau. Prix de vente : 140 920 euros Honoraires Inclus",
        140920,80, 4, "Roubaix", 2, 1);

var_dump($update);