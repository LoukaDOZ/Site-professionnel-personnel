<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <link rel="stylesheet" href="<?= css('Projets'); ?>" />
    <link rel="stylesheet" href="<?= css('Queries'); ?>" />

</head>

<body>
  <div id='article'>
    <h1 class='page_title'>Jeu du président<div class="fil"><?= $fil ?></div></h1>
    <div class='contenu'>

      <div id='retour_phone'>
        <a href="<?= base_url('Projets'); ?>" class='naviguation'><img src="<?= image('fleche_short_gauche') ?>">Retour</a>
      </div>

        <span class="ancres" id="description"></span>
        <h2>Description</h2>
        <a href="http://www.loukadoz.epizy.com/cards/president/play/" target="_blank" id='link'>Lien vers le site</a><br>
        <a href="https://github.com/LoukaDOZ/jeu-du-president" target="_blank" id='link'>Lien vers GitHub</a>
        <p class='description'>Le jeu du président est un jeu de cartes dans lequel il faut se débarrasser de ses cartes le plus vite possible. <br>
            Lors de la première partie, tout le monde débute "neutre". A la fin de la partie, le premier fini "président" et le dernier fini "trou du cul". Si la partie se compose de plus de 3 joueurs, le deuxième est "vice président" et l'avant dernier est "vice trou du cul". Les autres sont "neutres".<br>
            Pour poser une carte, il faut qu'elle soit supérieure ou égale à la dernière carte de la pile. L'ordre des cartes est : 3 < 4 < 5 <6 < 7 < 8 < 9 < 10 < J < Q < K < 1 < 2. Le 2 stoppe la manche et donne la main à celui qui l'a posé.<br>
            Il est possible de poser un simple (1 carte), un double (2 cartes), un triple (3 cartes) ou un quadruple (4 cartes) à condition que toutes les cartes soient de la même valeur. Les autres joueurs devront faire de même jusqu'à la fin de la manche.<br>
            Lorsqu'au moins 2 cartes de même valeur sont posées à la suite par des joueurs différents, le joueur suivant doit obligatoirement poser une carte de la même valeur sinon son tour est sauté.<br>
            Lorsque les 4 cartes de même valeur se suivent, le joueur ayant posé la dernière carte peut faire révolution et ainsi inverser l'ordre des cartes. C'est-à-dire que me 3 prend la place et du 2 et devient la meilleure carte, le 4 prend la place de l'as et ainsi de suite. La révolution peut être annulée par une autre révolution.<br>
            Il est possible de se coucher pour ne pas jouer. Cependant, cela empêche de jouer jusqu'à la fin de la manche.<br>
            Si plus personne ne peut jouer, la main revient à celui qui a posé la dernière carte.<br>
            A partir de la deuxième partie, une phase d'échange à lieu avant le commencement : <br>
            - Le président donne deux cartes de son choix au trou du cul<br>
            - Le vice président donne une carte de son choix au vice trou du cul<br>
            - Le vice trou du cul donne sa meilleure carte au vice président<br>
            - Le trou du cul donne ses deux meilleures cartes au président<br>
            - Les neutres ne donnent rien<br>
            <br>
            La version que j'ai créé se joue en ligne en multijoueur (2 à 8 personnes), avec un chat pour échanger des messages en temps réel avec les autres joueurs.<br>
            Le serveur est uniquement composé de scripts PHP et d'une base de données SQLite ou MySQL (2 versions possibles).<br>
            L'interface homme-machine du client est en HTML CSS avec l'aide de Bootstrap. La mise à jour est gérée par des requêtes en AJAX vers le serveur et du traitement des réponses des requêtes en JavaScript avec Riot.js pour le rafraîchissement des informations.<br>
            <b>Je me suis lancé dans ce projet car je souhaitais faire un jeu en multijoueur, facilement accessible, depuis longtemps. Le jeu du président est aussi un jeu très joué dans ma famille, ce projet avait aussi pour but de pouvoir jouer avec eux malgré le confinement.<br>
                C'était génial de pouvoir appliquer les connaissances aquises en DUT Informatique et d'aller au bout de ce projet. De plus, ce projet m'a permis de gagner de l'expérience dans la création et la manipulation d'API rest qui m'a servi peut de temps après dans un autre projet.</b></p>

        <span class="ancres" id="fonctionnalites"></span>
        <h2>Résumé des fonctionnalités</h2>
        <div id='fonctio_conteneur'>
            <div class='fonctio'>
                Créer une partie
            </div>
            <div class='fonctio'>
                Rejoindre une partie
            </div>
            <div class='fonctio'>
                Poser des simples, doubles, triples ou quadruples
            </div>
            <div class='fonctio'>
                Se coucher
            </div>
            <div class='fonctio'>
                Faire révolution
            </div>
            <div class='fonctio'>
                Echanger des cartes
            </div>
            <div class='fonctio'>
                Echanger dans un chat avec les autres joueurs
            </div>
        </div>

        <span class="ancres" id="apercu"></span>
        <h2>Aperçu</h2>

        <!-- Slideshow container -->
        <div class="slideshow-container">

            <!-- Full-width images with number and caption text -->
            <div class="mySlides fade">
                <img src="<?= image($file_name.'/home'); ?>" style="width:100%">
                <div class="text">Créer une partie</div>
            </div>

            <div class="mySlides fade">
                <img src="<?= image($file_name.'/rejoindre'); ?>" style="width:100%">
                <div class="text">Rejoindre une partie</div>
            </div>

            <div class="mySlides fade">
                <img src="<?= image($file_name.'/cree'); ?>" style="width:100%">
                <div class="text">Salle d'attente</div>
            </div>

            <div class="mySlides fade">
                <img src="<?= image($file_name.'/en_jeu'); ?>" style="width:100%">
                <div class="text">Partie en cours</div>
            </div>

            <div class="mySlides fade">
                <img src="<?= image($file_name.'/selection'); ?>" style="width:100%">
                <div class="text">Le 5 de pic est séléctionné</div>
            </div>

            <div class="mySlides fade">
                <img src="<?= image($file_name.'/revo'); ?>" style="width:100%">
                <div class="text">Choix de faire révolution ou non</div>
            </div>

            <div class="mySlides fade">
                <img src="<?= image($file_name.'/ou_rien'); ?>" style="width:100%">
                <div class="text">Roi ou rien</div>
            </div>

            <div class="mySlides fade">
                <img src="<?= image($file_name.'/fin'); ?>" style="width:100%">
                <div class="text">Partie terminée</div>
            </div>

            <div class="mySlides fade">
                <img src="<?= image($file_name.'/echange'); ?>" style="width:100%">
                <div class="text">Phase d'échange de cartes</div>
            </div>

            <div class="mySlides fade">
                <img src="<?= image($file_name.'/ecrire_chat'); ?>" style="width:100%">
                <div class="text">Ecrire dans le chat</div>
            </div>

            <div class="mySlides fade">
                <img src="<?= image($file_name.'/chat'); ?>" style="width:100%">
                <div class="text">Chat</div>
            </div>

            <div class="mySlides fade">
                <img src="<?= image($file_name.'/notif'); ?>" style="width:100%">
                <div class="text">Notification de messages dans le chat en bas à droite</div>
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
            <span class="dot" onclick="currentSlide(10)"></span>
            <span class="dot" onclick="currentSlide(11)"></span>
            <span class="dot" onclick="currentSlide(12)"></span>
        </div>

        <script src="<?php echo js('Slides'); ?>"></script>

    </div>
  </div>
</body>
</html>
