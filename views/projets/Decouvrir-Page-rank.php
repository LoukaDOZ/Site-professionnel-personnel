<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <link rel="stylesheet" href="<?= css('Projets'); ?>" />
    <link rel="stylesheet" href="<?= css('Queries'); ?>" />

</head>

<body>
  <div id='article'>
    <h1 class='page_title'>Page rank<div class="fil"><?= $fil ?></div></h1>
    <div class='contenu'>

        <span class="ancres" id="description"></span>
        <h2>Description</h2>
        <a href="http://dwarves.iut-fbleau.fr/~dozl/Math_rank/" target="_blank" id='link'>Lien vers le site</a><br>
        <a href="https://github.com/LoukaDOZ/Page-rank" target="_blank" id='link'>Lien vers GitHub</a>
        <p class='description'>Inspiré de l'algorythme de classement des pages d'une recherche Google, ce site web classe les élèves d'une promotion en fonction du nombre de votes reçus dans les matières séléctionnées. Je l'ai réalisé durant ma seconde année de DUT Informatique.<br>
            Il est possible de voter pour aucune ou plusieurs personnes.<br>
            Plus un élève reçoit de votes, plus son vote est important. Plus un élève vote, plus son vote perd de l'importance.<br>
            L'algorythme et le rafraîchissement de l'interface est fait en JavaScript<br>
            <p><b>J'adore découvrir les mecanismes cachés derrière les algorithmes, leur fonctionnement ainsi que le principe d'automatiser une tâche. C'est pourquoi, malgré que ce soit un petit projet, il était très intéressant.</b></p>

        <span class="ancres" id="fonctionnalites"></span>
        <h2>Résumé des fonctionnalités</h2>
        <div id='fonctio_conteneur'>
            <div class='fonctio'>
                Parcourir le classement des élèves
            </div>
            <div class='fonctio'>
                Sélectionner une ou plusieurs matières
            </div>
            <div class='fonctio'>
                Rechercher un élève
            </div>
        </div>

        <span class="ancres" id="apercu"></span>
        <h2>Aperçu</h2>

        <!-- Slideshow container -->
        <div class="slideshow-container">

            <!-- Full-width images with number and caption text -->
            <div class="mySlides fade">
                <img src="<?= image($file_name.'/all'); ?>" style="width:100%">
                <div class="text">Toutes les matières sont sélectionnées</div>
            </div>

            <div class="mySlides fade">
                <img src="<?= image($file_name.'/apl'); ?>" style="width:100%">
                <div class="text">Seul la matière "APL" est sélectionnée</div>
            </div>

            <div class="mySlides fade">
                <img src="<?= image($file_name.'/search'); ?>" style="width:100%">
                <div class="text">Rechercher un élève</div>
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
        </div>

        <script src="<?php echo js('Slides'); ?>"></script>
    </div>
  </div>
</body>
</html>
