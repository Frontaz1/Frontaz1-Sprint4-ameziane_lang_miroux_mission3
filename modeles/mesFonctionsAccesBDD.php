<?php

function connexionBDD() {
    $bdd = 'mysql:host=localhost;dbname=bdd_mission3langamezianemiroux';
    $user = 'root';
    $password = '';
    try {
        $ObjConnexion = new PDO($bdd, $user, $password, array(
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    } catch (PDOException $e) {
        echo $e->getMessage();
        echo 'Connexion échoué';
    }
    return $ObjConnexion;
}

function deconnexionBDD($cnx) {
    $cnx = null;
}

function getLesTypes($ObjConnexion) {
    $searchTypes = $ObjConnexion->prepare("SELECT id, libelle FROM type_biens");
    $execution = $searchTypes->execute();
    $lesTypes = $searchTypes->fetchAll();
    return $lesTypes;
}

function getLesVilles($ObjConnexion) {
    $searchVille = $ObjConnexion->prepare("SELECT DISTINCT ville FROM biens");
    $execution = $searchVille->execute();
    $lesVilles = $searchVille->fetchAll();
    return $lesVilles;
}

function testMail($ObjConnexion, $email, $mdp) {
    $pdoState = $ObjConnexion->prepare("SELECT count(*) as nbMail From utilisateur where email=:lemail and mdp=:lemdp");
    $bv1 = $pdoState->bindValue(':lemail', $email);
    $bv2 = $pdoState->bindValue(':lemdp', $mdp);
    $execution = $pdoState->execute();
    $resultatRequete = $pdoState->fetch();
    if ($resultatRequete['nbMail'] == 0) {
        $mailtrouve = false; // s'il existe pas  dans la bdd renvoie faux
    } else {
        $mailtrouve = true; // s'il existe renvoie vrai
    }
    return $mailtrouve;
}

function testVille($ObjConnexion, $ville) {
    $searchVille = $ObjConnexion->prepare("SELECT * FROM biens WHERE ville=:ville");
    $bvVille = $searchVille->bindValue(':ville', $ville);
    $execution = $searchVille->execute();
    $resultat = $searchVille->fetchAll();
    return $resultat;
}

function testType($ObjConnexion, $type) {
    $pdoStatement = $ObjConnexion->prepare("SELECT * FROM biens WHERE type=:letype");
    $bvType = $pdoStatement->bindValue(':letype', $type);
    $execution = $pdoStatement->execute();
    $resultat = $pdoStatement->fetchAll();
    return $resultat;
}

function getLesBiens($ObjConnexion) {
    $allBiens = $ObjConnexion->prepare("SELECT * FROM biens JOIN type_biens ON type_biens.id = biens.type");
    $execution = $allBiens->execute();
    $lesBiens = $allBiens->fetchAll();
    return $lesBiens;
}

function testPrix($ObjConnexion, $min, $max) {
    $pdoStatement = $ObjConnexion->prepare("SELECT * FROM biens WHERE prix between :min and :max");
    $bvType = $pdoStatement->bindValue(':min', $min);
    $bvz = $pdoStatement->bindValue('max', $max);
    $execution = $pdoStatement->execute();
    $resultat = $pdoStatement->fetchAll();
    return $resultat;
}

function testTypeVille($ObjConnexion, $type, $ville, $jardin, $min, $max) {
    $requete = "SELECT * FROM biens JOIN type_biens ON type_biens.id = biens.type WHERE 1=1 ";
    if ($type != 0) {
        $requete .= " and type=:type";
    }
    if ($ville != "0") {
        $requete .= " and ville=:ville";
    }
    if ($jardin < 2) {
        $requete .= " AND jardin=:jardin";
    }
    if ($min != "" && $max != "") {
        $requete .= " AND prix between :min and :max";
    }
    $recherche = $ObjConnexion->prepare($requete);
    if ($type != 0) {
        $bvtype = $recherche->bindValue(':type', $type);
    }
    if ($ville != "0") {
        $bvville = $recherche->bindValue(':ville', $ville);
    }
    if ($jardin < 2) {
        $bvjardin = $recherche->bindValue(':jardin', $jardin);
    }
    if ($min != "" && $max != "") {
        $bvmin = $recherche->bindValue(':min', $min);
        $bvmax = $recherche->bindValue(':max', $max);
    }
    $execution = $recherche->execute();
    $resultat = $recherche->fetchAll();
    return $resultat;
}

function affichageUnBien($ObjConnexion, $ref_bien) {
    $pdoState = $ObjConnexion->prepare("SELECT * From biens where ref=:laref");
    $bv1 = $pdoState->bindValue(':laref', $ref_bien);
    $execution = $pdoState->execute();
    $resultatRequete = $pdoState->fetch();
    return $resultatRequete;
}

function getImage($ObjConnexion, $id) {
    $requete = $ObjConnexion->prepare("select * from image where idBien=:id");
    $bv = $requete->bindValue(':id', $id);
    $execution = $requete->execute();
    $resultat = $requete->fetchAll();
    return $resultat;
}

function ajoutBien($ObjConnexion, $descrip, $prix, $surface, $type, $ville, $piece, $jardin) {
    $insert = $ObjConnexion->prepare("INSERT INTO biens VALUES (null, :descrip, :prix, :surface, :type, :ville, :nbPiece, :jardin)");
    $bvdescrip = $insert->bindValue(':descrip', $descrip, PDO::PARAM_STR);
    $bvprix = $insert->bindValue(':prix', $prix, PDO::PARAM_INT);
    $bvsurface = $insert->bindValue(':surface', $surface, PDO::PARAM_INT);
    $bvtype = $insert->bindValue(':type', $type, PDO::PARAM_INT);
    $bvville = $insert->bindValue(':ville', $ville, PDO::PARAM_STR);
    $bvpiece = $insert->bindValue(':nbPiece', $piece, PDO::PARAM_INT);
    $bvjardin = $insert->bindValue(':jardin', $jardin, PDO::PARAM_INT);
    $execution = $insert->execute();
    return $execution;
}

function modifBien($ObjConnexion, $ref, $descrip, $prix, $surface, $type, $ville, $piece, $jardin) {
    $update = $ObjConnexion->prepare("UPDATE biens SET descrip= :descrip, prix= :prix, surface= :surface, type= :type, ville= :ville, nbPiece= :piece, jardin= :jardin WHERE ref= :ref");
    $bvdescrip = $update->bindValue(':descrip', $descrip);
    $bvprix = $update->bindValue(':prix', $prix);
    $bvsurface = $update->bindValue(':surface', $surface);
    $bvtype = $update->bindValue(':type', $type);
    $bvville = $update->bindValue(':ville', $ville);
    $bvpiece = $update->bindValue(':piece', $piece);
    $bvjardin = $update->bindValue(':jardin', $jardin);
    $execution = $update->execute();
    return $execution;
}

function supBien($ObjConnexion, $ref) {
    $del = $ObjConnexion->prepare("DELETE FROM biens WHERE ref=:ref");
    $bvc1 = $del->bindValue(':ref', $ref, PDO::PARAM_INT);
    $executionOK = $del->execute();
    return $executionOK;
}

function getUnBien($ObjConnexion, $ref) {
    $unBien = $ObjConnexion->prepare("SELECT * FROM biens JOIN type_biens ON type_biens.id = biens.type WHERE ref=:ref");
    $bvref = $unBien->bindValue(':ref', $ref);
    $execution = $unBien->execute();
    $bien = $unBien->fetch();
    return $bien;
}

function rechercheRef($ObjConnexion, $ref) {
    $requete = "SELECT * FROM biens WHERE ref=:laref";
    $recherche = $ObjConnexion->prepare($requete);
    $bv = $recherche->bindValue(':ref', $ref);
    $execution = $recherche->execute();
    $unBien = $recherche->fetch();
    return $unBien;
}

function triBiens($ObjConnexion, $sortVilleA, $sortVilleZ, $sortTypeA, $sortTypeD, $sortPrixA, $sortPrixD) {
    $requete = "SELECT * from biens JOIN type_biens ON type_biens.id = biens.type ";
    if ($sortVilleA != "") {
        $requete .= " order by ville asc";
    }
    if ($sortVilleZ != "") {
        $requete .= " order by ville desc";
    }
    if ($sortTypeA != "") {
        $requete .= " order by type asc";
    }
    if ($sortTypeD != "") {
        $requete .= " order by type desc";
    }
    if ($sortPrixA != "") {
        $requete .= " order by prix asc";
    }
    if ($sortPrixD != "") {
        $requete .= " order by prix desc";
    }
    
    $tri = $ObjConnexion->prepare($requete);
    $execution = $tri->execute();
    $resultat = $tri->fetchAll();
    return $resultat;
}