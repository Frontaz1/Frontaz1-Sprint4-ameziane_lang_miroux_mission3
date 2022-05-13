<html>
    <body>
        <?php
        include_once '../inc/entete.inc';
        include_once '../inc/menu.inc';
        session_start();
        ?>
        <form id ="triDesBiens" action="" method="POST">
            <h4>Trier par :</h4>
            <p>
                <select id="tri" name="tri">
                    <option value=""></option>
                    <option value="villeaz">Ville, A-Z</option>
                    <option value="villeza">Ville, Z-A</option>
                    <option value="typec">Type, croissant</option>
                    <option value=typed">Type, décroissant</option>
                    <option value="prixc">Prix, croissant</option>
                    <option value="prixd">Prix, décroissant</option>
                </select>
                <input type="submit" name="valid" id="valid" value="Trier" />
            </p>
        </form>
        
        <h1 class="titreBien">Liste des biens</h1>
        <table class="biens">
            <th>Référence</th>
            <th>Prix</th>
            <th>Surface</th>
            <th>Type</th>
            <th>Ville</th>
            <th>Pièces</th>
            <th>Jardin</th>

            <?php
            include_once '../modeles/mesFonctionsAccesBDD.php';
            $lePDO = connexionBDD();
            $lesBiens = getLesBiens($lePDO);
            foreach ($lesBiens as $unBien) {
                echo '<tr><td>' . $unBien['ref'] . '</td><td>' . $unBien['prix'] . '</td><td>' . $unBien['surface'] . '</td><td>' .
                $unBien['libelle'] . '</td><td>' . $unBien['ville'] . '</td><td>' . $unBien['nbPiece'] . '</td><td>' . $unBien['jardin'] . '</td><td>' . 
                         '<a href = "affichageUnBien.php?ref='. $unBien['ref'] .'" target="_blank">Afficher</a></td>'
                        . '<td><a href = "formAjouteBien.php?ref=' . $unBien['ref'] . '">Supprimer</a></td></tr><br/>';}
                       
                      
            ?>
        </table>

        <?php
        include_once '../inc/piedDePage.inc';
        ?>
    </body>

</html>