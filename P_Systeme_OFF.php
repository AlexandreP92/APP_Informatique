<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="P_Systeme_OFF.css" />
    <title>WINK FOR INFINITE MEASURES</title>
    <link rel="shortcut icon" href="favicon.ico" /><!-- Indispensable???? -->
</head>

<body>
    <!-- On ajoute le Header + Menu -->
    <?php require('Header.php');
    ?>
    <?php require('Menu.html');
    ?>

    <!-- Contenu de la Page Système -->
    <section>
        <p class="titreTest">NOS TESTS</p>

        <div id="conteneur">
            <div class="element 1">
                <p class="titresTest">STIMULUS SONORE</p>
                <img src="images/test1.png" id="ear"/>
                <p>Mesure le temps de réaction à <br />
                    un son inattendu</p>
            </div>
            <div class="element 2">
                <p class="titresTest">STIMULUS VISUEL</p>
                <img src="images/test2.png" id="eye"  />
                <p> Mesure le temps de réaction à <br />
                    une lumière inattendue</p>
            </div>
            <div class="element 3">
                <p class="titresTest">RECONNAISSANCE DE TONALITÉ</p>
                <img src="images/test3.png" id="sound"  />
                <p class="titresTest"> Mesure la capacité de l'utilisateur<br />
                    à reproduire un son</p>
            </div>
        </div>

        <img src="images/arrow.png" id="arrow"  />

        <div id="conteneur">
            <div class="element 1">
                <p class="titresTest">MESURE DE LA FRÉQUENCE CARDIAQUE</p>
                <img src="images/test4.png" id="ear"  />
                <p>En positionant votre doigt nous mesurons votre  <br />
                    frequence cardique à l'aide d'un capteur</p>
            </div>
            <div class="element 2">
                <p class="titresTest">MESURE DE LA TEMPÉRATURE CORPORELLE</p>
                <img src="images/test5.png" id="eye"  />
                <p> Nous mesurons à l'aide d'un capteur adéquat, <br />
                    votre température corporelle</p>
            </div>
        </div>

    </section>
</body>
    <!-- On ajoute le Footer -->
    <?php require('Footer.html');
    ?>
</html>
