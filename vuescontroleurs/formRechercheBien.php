<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Recherche</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body>
        <?php
        include_once '../inc/entete.inc';
        include_once '../inc/menu.inc';
        session_start();
        ?>

        <!-- Recherche par ville et type -->

        <form name="rechercheVilleType" id ="rechercheVilleType" method="post" action="../modeles/rechercheVilleType.php">
            <div id="titreForm">Recherchez votre bien</div>
            <p>
                <label for="ref" title="Veuillez saisir la ref de localisation"> Référence du bien :</label>
                <input type="ref" name="ref">
            </p>
            
            <p>
                <label for="ville" title="Veuillez saisir la ville de localisation"> ville :</label>
                <select id="ville" name ="ville" title="Veuillez saisir la ville de localisation ">
                    <option value="0"> Toutes les villes</option>
                    <?php
                    include_once '../modeles/mesFonctionsAccesBDD.php';
                    $lePDO = connexionBDD();
                    $lesVilles = getLesVilles($lePDO);

                    foreach ($lesVilles as $uneVille) {
                        echo '<option value="' . $uneVille['ville'] . '">' . $uneVille['ville'] . '</option>';
                    }
                    ?>
                </select>
            </p>
            <p>
                <label for="type" title="Veuillez choisir le type du bien"> Type :</label>
                <select id="type" name="type" title="Veuillez choisir le type de bien">
                    <option value="0">Tous les types</option>
                    <?php
                    include_once '../modeles/mesFonctionsAccesBDD.php';
                    $lePDO = connexionBDD();
                    $lesTypes = getLesTypes($lePDO);

                    foreach ($lesTypes as $unType) {
                        echo '<option value="' . $unType['id'] . '">' . $unType['libelle'] . '</option>';
                    }
                    ?>
                </select>
            </p>
            <p>Présence d'un jardin ? :</p>

            <div>
                <input type="hidden" name="jardin" value="0" />

                <input type="checkbox" id="jardin" name="jardin" value=1>
                
                <label for="jardin">Oui</label>
            </div>
            <!-- peut etre mettre 1 à id en haut -->
<label for="prix-select">Choisir une tranche de prix:</label>
<div>
        <input type="number" name="nb1"  min="0" max="1000000" step="1" >
        <input type="number" name="nb2" min="0" max="1000000" step="1" >
    
</div>

            <div id="piedForm">
                <input type="submit" name="valid" id="valid" value="Rechercher" />
            </div>
        </form>


        <?php
        include_once'../inc/piedDePage.inc';
        ?>
    </body>
</html>
