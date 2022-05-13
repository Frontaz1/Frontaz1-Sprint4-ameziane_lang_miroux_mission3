
<?php
include_once'../inc/entete.inc';

session_start();
if ($_SESSION["autoriser"] != "oui") {  //Permet d'autoriser que les connecter à la session d'accèder à cette page sinon rediriger vers le formulaire de co
    header("location:formConnexion.php");
    exit();
}
?>
<?php
if (isset($_SESSION['role'])) {
    echo'<p class="login-status"> You are logged in! </p>';
} else {
    echo'<p class="login-status"> You are logged out! </p>';
}



?>
<form name="ajout" id ="ajout" method="post" action="../modeles/ajoutBien.php">
    <div id="titreForm">Ajout bien :</div>
    <p>
        <label for="descrip" title="Veuillez saisir la description du bien ">Description :</label>
        <input type="text" name="descrip" id="descrip" title="Veuillez saisir la description du bien " required/>
    </p>
    <p>
        <label for="prix" title="Veuillez saisir le prix " class="oblig">Prix:</label>
        <input type="number" name="prix" id="prix" title="Veuillez saisir le prix " required />
    </p>
    <p>
        <label for="surface" title="Veuillez saisir la surface " class="oblig">Surface:</label>
        <input type="number" name="surface" id="surface" title="Veuillez saisir la surface "  required/>
    </p>
    <p>
        <label for="type" title="Veuillez choisir le type " class="oblig">Type:</label>
        <select class="type" id="type" name ="type" title="Veuillez choisir le type du bien" style="width:200px"  required >
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
    <p>
        <label for="ville" title="Veuillez saisir la ville " class="oblig">Ville:</label>
        <input type="text" name="ville" id="ville" title="Veuillez saisir la ville "  required />
    </p>
    <p>
        <label for="piece" title="Veuillez saisir le nombre de pièces " class="oblig">nbPiece:</label>
        <input type="number" name="piece" id="piece" title="Veuillez saisir le nombre de pièces " required />
    </p>
    <p>
    <div>
        <label for="jardin" title="Veuillez choisir si le bien a une jardin"> Présence d'un jardin: </label>
        <input type="hidden" name="jardin" value="0" />
        <input type="checkbox" id="jardin" name="jardin" value=1>
        <label for="jardin">Oui</label>
    </div>
</p>
<div id="piedForm">
    <input type="submit" name="valid" id="valid" value="Ajouter" />
    <input type="hidden" name="flag" value="1">


</div>
</form>


<form name="delete" id ="delete" method="post" action="../modeles/deleteBien.php" onsubmit="return myFunction(this)" >
    <div id="titreForm">Supprimer bien</div>
    <p>
        <label for="ref" title="Veuillez saisir votre email " class="oblig">ID du bien :</label>
        <input type="number" name="ref" id="ref" title="Veuillez saisir l'id du bien " />
    </p>

    <div id="piedForm">
        
        <button onclick="myFunction()" type="submit" name="valid" id="valid" value="Supprimer">Supprimer</button>
        <p id="demo"></p>
        <script>
function myFunction() {
  let text;
  if (confirm("Voulez vous supprimer ce bien?") == true) {
    text = "You pressed OK!";
    return true;
    
  } else {
    text = "You canceled!";
    return false;
    
  }
  document.getElementById("demo").innerHTML = text;
}
   
</script>
    </div>
</form>


<form name="modif" id ="modif" method="post" action="../modeles/modificationBien.php">
    <div id="titreForm">Modifier bien :</div>
    <p>
        <label for="ref" title="Veuillez choisir la référence du bien ">Choisissez la référence du bien :</label>
        <select class="ref" id="ref" name ="ref" title="Veuillez choisir la référence du bien " style="width:50px">
            <?php
            include_once '../modeles/mesFonctionsAccesBDD.php';
            $lePDO = connexionBDD();
            $lesBiens = getLesBiens($lePDO);

            foreach ($lesBiens as $unBien) {
                echo '<option value="' . $unBien['ref'] . '">' . $unBien['ref'] . '</option>';
            }
            ?>
        </select>
    </p>
    <p>
        <label for="descrip" title="Veuillez saisir la description du bien ">Description :</label>
        <input type="text" name="descrip" id="descrip" title="Veuillez saisir la description du bien " />
    </p>
    <p>
        <label for="prix" title="Veuillez saisir le prix " class="oblig">Prix:</label>
        <input type="text" name="prix" id="prix" title="Veuillez saisir le prix " />
    </p>
    <p>
        <label for="surface" title="Veuillez saisir la surface " class="oblig">Surface:</label>
        <input type="text" name="surface" id="surface" title="Veuillez saisir la surface " />
    </p>
    <p>
        <label for="type" title="Veuillez choisir le type " class="oblig">Type:</label>
        <select class="type" id="type" name ="type" title="Veuillez choisir le type du bien" style="width:200px">
            <?php
            include_once '../modeles/mesFonctionsAccesBDD.php';
            $lesTypes = getLesTypes($lePDO);

            foreach ($lesTypes as $unType) {
                echo '<option value="' . $unType['id'] . '">' . $unType['libelle'] . '</option>';
            }
            ?>
        </select>
    </p>
    <p>
        <label for="ville" title="Veuillez saisir la ville " class="oblig">Ville:</label>
        <input type="text" name="ville" id="ville" title="Veuillez saisir la ville " />
    </p>
    <p>
        <label for="piece" title="Veuillez saisir le nombre de pièces " class="oblig">nbPiece:</label>
        <input type="text" name="piece" id="piece" title="Veuillez saisir le nombre de pièces " />
    </p>
    <p>
    <div>
        <label for="jardin" title="Veuillew choisir si le bien a une jardin"> Présence d'un jardin: </label>
        <input type="hidden" name="jardin" value="0" />
        <input type="checkbox" id="jardin" name="jardin" value=1>
        <label for="jardin">Oui</label>
    </div>
</p>

<div id="piedForm">
    <input type="submit" name="update" id="update" value="Mettre à jour" />
</div>
</form>

</body>
</html>


