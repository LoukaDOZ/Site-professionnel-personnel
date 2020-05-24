<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <link rel="stylesheet" href="<?= css('Projets'); ?>" />
    <link rel="stylesheet" href="<?= css('Queries'); ?>" />

</head>

<body>
  <div id='article'>
    <h1 class='page_title'>MusicMindz<div class="fil"><?= $fil ?></div></h1>
    <div class='contenu'>

      <div id='retour_phone'>
        <a href="<?= base_url('Projets'); ?>" class='naviguation'><img src="<?= image('fleche_short_gauche') ?>">Retour</a>
      </div>

        <span class="ancres" id="description"></span>
        <h2>Description</h2>
        <a href="http://dwarves.iut-fbleau.fr/~dozl/music/" target="_blank" id='link'>Lien vers le site</a><br>
        <a href="https://github.com/LoukaDOZ/MusicMindz" target="_blank" id='link'>Lien vers GitHub</a>
        <p class='description'>A l'aide de l'API de MusicBrainz, ce site permet de rechercher une musique, un album ou un artiste grâce à un nom, un titre et d'autres filtres. Il a été réalisé lors de ma seconde année de DUT Informatique<br>
        Ce projet majoritairement en JavaScript se souvient de requêtes déjà effectuées, possède un champ autocomplété pour le nom/titre, ainsi qu'une pagination des résultats.<br>
        Ce projet, qui avait pour but d'appliquer mes connaissances en AJAX, m'a aussi permis de découvrir et Bootstrap et des outils tels que Riot.js.<br>
        <p><b>Ce projet m'a considérablement amélioré dans ma manière de voir et de programmer les communications réseau. C'est un domaine que j'ai appris à apprécier a force de l'utiliser et, aujourd'hui, j'aime beaucoup gérer, coder, décoder les communications réseau entre clients et serveur.</b></p>

        <span class="ancres" id="fonctionnalites"></span>
        <h2>Résumé des fonctionnalités</h2>
        <div id='fonctio_conteneur'>
            <div class='fonctio'>
                Rechercher un artiste, un album ou une musique
            </div>
            <div class='fonctio'>
                Rechercher par le nom/titre et/ou par des filtres
            </div>
            <div class='fonctio'>
                Explorer la liste des résultats
            </div>
            <div class='fonctio'>
                Afficher plus d'informations sur les résultats
            </div>
            <div class='fonctio'>
                Parcourir les pages de résultats
            </div>
        </div>

        <span class="ancres" id="apercu"></span>
        <h2>Aperçu</h2>

        <!-- Slideshow container -->
        <div class="slideshow-container">

            <!-- Full-width images with number and caption text -->
            <div class="mySlides fade">
                <img src="<?= image($file_name.'/home'); ?>" style="width:100%">
                <div class="text">Rechercher un artiste</div>
            </div>

            <div class="mySlides fade">
                <img src="<?= image($file_name.'/album'); ?>" style="width:100%">
                <div class="text">Rechercher un album</div>
            </div>

            <div class="mySlides fade">
                <img src="<?= image($file_name.'/musique'); ?>" style="width:100%">
                <div class="text">Rechercher une musique</div>
            </div>

            <div class="mySlides fade">
                <img src="<?= image($file_name.'/resultat'); ?>" style="width:100%">
                <div class="text">Résultats d'une recherche de musique</div>
            </div>

            <div class="mySlides fade">
                <img src="<?= image($file_name.'/plus'); ?>" style="width:100%">
                <div class="text">Plus d'informations sur un artiste</div>
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
        </div>

        <script src="<?php echo js('Slides'); ?>"></script>
    </div>
  </div>
</body>
</html>
