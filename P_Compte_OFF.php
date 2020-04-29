<!DOCTYPE html>
<html lang="en">
<head>
    <link type="text/css" rel="stylesheet" href="P_Compte_OFF.css?t=<? echo time(); ?>" media="all">
    <meta charset="UTF-8">
    <title>WINK FOR INFINITE MEASURES</title>
</head>
<body>
<!-- On ajoute le Header + Menu -->
<?php require('Header.php');
?>
<?php require('Menu.html');
?>

<!-- Contenu de la Page Mon compte -->
<section>
    <p class="titreConnexion">Se connecter</p>
    <form action="" method="post">
        <label for="fname">NOM D'UTILISATEUR</label>
        <input type="text" id="fname" name="utilisateur" placeholder="Votre nom d'utilisateur..">
        <label for="fname">MOT DE PASSE</label>
        <input type="password" id="fname" name="mdp" placeholder="*********">
        <!-- Rajouter le lien pour la réinitialisation du mot de passe -->
        <a href="#" class="mdpOublie">Mot de passe oublié ? <i>Cliquez ici</i></a>
        <input type="submit" value="VALIDER">
    </form>
    <div id="boutonInscription">
            <a class="inscription" href="P_Inscription.php">NOUVEL UTILISATEUR ? INSCRIS-TOI ! </a>
    </div>
</section>
</body>
<!-- On ajoute le Footer -->
<?php require('Footer.html');
?>
</html>
