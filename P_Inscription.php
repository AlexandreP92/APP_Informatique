<!DOCTYPE html>
<html lang="en">
<head>
    <link type="text/css" rel="stylesheet" href="P_Inscription.css?t=<? echo time(); ?>" media="all">
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
    <p class="titreInscription">Inscription</p>
    <!-- Rajouter l'action -->
    <form action="" method="post">
        <label for="fname">NOM D'UTILISATEUR</label>
        <input type="text" id="fname" name="utilisateur" placeholder="ex: Jacques1*" required>
        <label for="fname">MOT DE PASSE</label>
        <input type="password" id="fname" name="mdp" placeholder="*********" required>
        <label for="fname">CONFIRMATION MOT DE PASSE</label>
        <input type="password" id="fname" name="mdp" placeholder="*********" required>
        <label for="fname">EMAIL</label>
        <input type="email" id="fname" name="mail" placeholder="example@gmail.com*" required>

        <input type="submit" value="S'INSCRIRE" onclick="checkForm();">
    </form>

</section>
</body>
<!-- On ajoute le Footer -->
<?php require('Footer.html');
?>
</html>

