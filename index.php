<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>

<body>
    <header>
        <?php
        require("Controller/CdatabasePdo.php");
        ?>
        <h1>
            Bienvenue sur le site de test
        </h1>
    </header>
    <article>
        <h1>
            Test en PHP : communications avec BDD
        </h1>
        <?php
        require ('Controller/Cdatabase.php');
        $bdd = new Cdatabase('localhost','root','','test');
        $req = $bdd->recupererDonneesBdd();
        ?>
    </article>
    <article>
        <h2>
            Minuteur en Javascript
        </h2>
        <div id="timer"></div>
    </article>
    <footer>
        <p>
            <i>
                Tout droits réservés.
            </i>
        </p>
    </footer>
    <script src="js/minuteur.js"></script>
</body>

</html>