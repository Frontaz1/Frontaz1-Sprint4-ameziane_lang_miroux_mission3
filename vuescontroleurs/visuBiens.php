<html>
    <body>
        <?php
        include_once '../inc/entete.inc';
        include_once '../inc/menu.inc';
        session_start();
        ?>
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