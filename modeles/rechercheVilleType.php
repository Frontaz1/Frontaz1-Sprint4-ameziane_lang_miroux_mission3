

<html>
    <body>
       
        <h1 class="titreBien">Liste des biens</h1>
        <table class="biens">

            <th>Prix</th>
            <th>Type</th>
            <th>Ville</th>
            <th>Jardin</th>
            <?php
            include_once '../modeles/mesFonctionsAccesBDD.php';

            $lePDO = connexionBDD();

            $rechercheVille = $_POST['ville'];
            $rechercheType = $_POST['type'];
            $jardin = $_POST['jardin'];
            $min = $_POST['nb1'];
            $max = $_POST['nb2'];
            if ($jardin == null) {
                $jardin = 0;
            }
         

            $test = testTypeVille($lePDO, $rechercheType, $rechercheVille, $jardin, $min, $max);
            foreach ($test as $unBien) {
                echo '<tr><td></td><td>' . '</td><td>' . $unBien['prix'] . '</td><td>' . $unBien['type'] . '</td><td>' . $unBien['ville'] . '</td><td>' . $unBien['jardin'] . '</td></tr><br/>';
            }
            ?>
        </table>
         

</html>