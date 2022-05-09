
        
        <?php
            include_once '../inc/entete.inc';
            include_once '../inc/menu.inc';
            session_start();
        ?>
        
        <form name="connexion" id ="connexion" method="post" action="../modeles/CheckLoginControle.php">
            <div id="titreForm">Identifiez-vous</div>
            <p>
                <label for="email" title="Veuillez saisir votre email " class="oblig">E-mail :</label>
                <input type="email" name="email" id="email" title="Veuillez saisir votre email " />
            </p>
            <p>
               <label for="mdp" title="Veuillez saisir votre mot de passe " class="oblig">Mot de passe :</label>
                <input type="password" name="mdp" id="mdp" title="Veuillez saisir votre mot de passe " />
            </p>

            <div id="piedForm">
                <input type="submit" name="valid" id="valid" value="Connexion" />
            </div>
        </form>
    </body>
</html>
