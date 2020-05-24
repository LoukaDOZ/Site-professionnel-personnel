<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <link rel="stylesheet" href="<?= css('Projets'); ?>" />
    <link rel="stylesheet" href="<?= css('Queries'); ?>" />

</head>

<body>
  <div id='article'>
    <h1 class='page_title'>Enigma<div class="fil"><?= $fil ?></div></h1>
    <div class='contenu'>

      <div id='retour_phone'>
        <a href="<?= base_url('Projets'); ?>" class='naviguation'><img src="<?= image('fleche_short_gauche') ?>">Retour</a>
      </div>

        <span class="ancres" id="description"></span>
        <h2>Description</h2>
        <a href="https://github.com/PT-2019/Enigma" target="_blank" id='link'>Lien vers GitHub</a>
        <p class='description'>Enigma est un jeu d'escape games avec un éditeur. Projet de fin d'année de ma seconde année de DUT Informatique, je l'ai réalisé avec 3 autres camarades.<br>
            La partie jeu permet de jouer à des escape games. Le but est de résoudre les énigmes nécéssaires pour gagner avant la fin du temps imparti.<br>
            Les fonctionnalités suivantes ne sont pas disponibles mais étaient prévues :<br>
            - Multijoueur jusqu'à 4 joueurs<br>
            - Combats en temps réel contre des monstres<br>
            <br>
            La partie éditeur permet de créer des cartes d'escape games personnalisées, jouable ensuite, et de placer dessus des salles, des décorations, des objets (par terre ou dans d'autres décors comme des coffres par exemple), des joueurs, des personnages non joueurs et des monstres pré-sélectionnés.<br>
            Il est possible de configurer des énigmes avec des conditions pour la résoudre ou des opérations qui se lanceront lorsque l'énigme est résolue.<br>
            Il est possible de configurer des dialogues qui apparaissent dans des livres, sur des panneaux ou lorsqu'on parle au personnages non joueurs.<br>
            Une fois la partie créée, il est possible de l'exporter et de l'importer pour la partager avec les autres joueurs.<br>
            Il est aussi possible de tester la carte en création directement dans l'éditeur<br>
            <br>
            La totalité du projet est en Java avec l'aide de la <a href="https://libgdx.badlogicgames.com/" target="_blank">LibGdx</a> pour la partie jeu notamment mais elle est aussi utilisée dans l'éditeur, ainsi que de Swing pour l'interface homme-machine.<br>
            Nous avons travaillé avec la méthode SCRUM tout le long du projet.<br>
            J'ai eu l'occasion de programmer plusieurs aspects du projet :<br>
            - Création d'un ensemble d'éléments personnalisables pour le "look and feel" de l'application afin d'avoir un syle plus original que me style de Swing<br>
            - Création de toute la partie énigmes, conditions, opérations<br>
            - Création des affichages de la partie jeu : lancer/créer une partie, salle d'attente<br>
            - Création de l'exportation et de l'importation de cartes et parties<br>
            - Petite participation à la création de l'inventaire<br>
            En temps que chef de projet, j'ai du aussi gérer les communications entre mon équipe et notre tuteur, ainsi qu'organiser des réunions hebdomadaires avec mon équipe ainsi qu'avec notre tuteur.<br>
        <p><b>Lorsque j'étais en DUT, ce projet était le plus ambicieux que j'ai pu faire mais aussi celui que j'attendais le plus et qui m'a le plus plu.<br>
                J'ai pu expériencer tout ce que je recherche : un travail de groupe sérieux et agréable, un sujet qui me passionne, l'application des connaissances dans un projet dont je suis fier.<br>
                J'ai enfin pu me lancer dans la création d'un jeu vidéo et aller au bout de ce projet avec une version jouable. Même si nous n'avons pas pu aller au bout de toutes nos envies, je suis ravi d'avoir eu une tel expérience.<br>
                Ce projet ne m'a que plus conforté dans l'envie de devenir gameplay programmer.</b></p>

        <span class="ancres" id="fonctionnalites"></span>
        <h2>Résumé des fonctionnalités</h2>
        <div id='fonctio_conteneur'>
            <div class='fonctio'>
                Créer ou supprimer une partie
            </div>
            <div class='fonctio'>
                Jouer à une partie
            </div>
            <div class='fonctio'>
                Intéragir avec des objets et des personnages
            </div>
            <div class='fonctio'>
                Gérer un inventaire
            </div>
            <div class='fonctio'>
                Utiliser des objets
            </div>
            <div class='fonctio'>
                Résoudre des énigmes
            </div>
            <div class='fonctio'>
                Créer une carte personnalisée
            </div>
            <div class='fonctio'>
                Placer des salles, joueurs personnages non joueurs, monstres, décors, objets
            </div>
            <div class='fonctio'>
                Personnaliser des énigmes et dialogues
            </div>
            <div class='fonctio'>
                Effacer, undo, redo
            </div>
            <div class='fonctio'>
                Ouvrir, sauvegarder, sauvegarder sous, exporter, importer une carte
            </div>
        </div>

        <span class="ancres" id="apercu"></span>
        <h2>Aperçu</h2>

        <!-- Slideshow container -->
        <div class="slideshow-container">

            <!-- Full-width images with number and caption text -->
            <div class="mySlides fade">
                <img src="<?= image($file_name.'/home'); ?>" style="width:100%">
                <div class="text">Accueil</div>
            </div>

            <div class="mySlides fade">
                <img src="<?= image($file_name.'/solo'); ?>" style="width:100%">
                <div class="text">Page des parties solo</div>
            </div>

            <div class="mySlides fade">
                <img src="<?= image($file_name.'/multi'); ?>" style="width:100%">
                <div class="text">Page des parties multijoueur</div>
            </div>

            <div class="mySlides fade">
                <img src="<?= image($file_name.'/create_game'); ?>" style="width:100%">
                <div class="text">Créer un partie</div>
            </div>

            <div class="mySlides fade">
                <img src="<?= image($file_name.'/lobby'); ?>" style="width:100%">
                <div class="text">Salle d'attente</div>
            </div>

            <div class="mySlides fade">
                <img src="<?= image($file_name.'/new'); ?>" style="width:100%">
                <div class="text">Editeur</div>
            </div>

            <div class="mySlides fade">
                <img src="<?= image($file_name.'/editor'); ?>" style="width:100%">
                <div class="text">Personnalisation de la carte</div>
            </div>

            <div class="mySlides fade">
                <img src="<?= image($file_name.'/bloquantes'); ?>" style="width:100%">
                <div class="text">Affichage des cases bloquantes</div>
            </div>

            <div class="mySlides fade">
                <img src="<?= image($file_name.'/gestion'); ?>" style="width:100%">
                <div class="text">Menu de gestion des objets</div>
            </div>

            <!-- Next and previous buttons -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <br>

        <!-- The dots/circles -->
        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            <span class="dot" onclick="currentSlide(4)"></span>
            <span class="dot" onclick="currentSlide(5)"></span>
            <span class="dot" onclick="currentSlide(6)"></span>
            <span class="dot" onclick="currentSlide(7)"></span>
            <span class="dot" onclick="currentSlide(8)"></span>
            <span class="dot" onclick="currentSlide(9)"></span>
        </div>

        <script src="<?php echo js('Slides'); ?>"></script>
    </div>
  </div>
</body>
</html>
