<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <link rel="stylesheet" href="<?= css('Projets'); ?>" />
    <link rel="stylesheet" href="<?= css('Queries'); ?>" />

</head>

<body>
  <div id='article'>
    <h1 class='page_title'>Soul of Bravery<div class="fil"><?= $fil ?></div></h1>
    <div class='contenu'>

      <div id='retour_phone'>
        <a href="<?= base_url('Projets'); ?>" class='naviguation'><img src="<?= image('fleche_short_gauche') ?>">Retour</a>
      </div>

      <span class="ancres" id="description"></span>
      <h2>Description</h2>
      <a href="https://github.com/LoukaDOZ/Jeu-Soul-of-Bravery" target="_blank" id='link'>Liens vers GitHub</a>
      <p class='description'>Premier projet important. Il a été fait en JavaScript pour le baccalauréat, en binôme.<br>
      Inspiré des combats d'<a href="https://undertale.com/" target="_blank">Undertale</a>, ce jeu se joue au tour par tour, c'est-à-dire que le joueur, représenté par un coeur, va pouvoir choisir d'attaquer ou de se soigner, puis il devra esquiver les attaques de l'ordinateur, représenté par un dragon, et ainsi de suite jusqu'à ce que le joueur batte l'ordinateur, ou qu'il n'ait plus de vie.<br>
      Je me suis occupé de réaliser tout le jeu en JavaScript, quant à ma camarade, elle s'est chargée de réaliser le site (que je n'ai pas pu récupérer) qui devait accompagner le jeu.<br>
      <b>J'ai adoré réaliser ce jeu, alors qu'au début de l'année 2018 je ne connaissais rien de la programmation, l'idée d'un projet important, car pour le baccalauréat, m'a beaucoup motivé. Je pense que se projet a clairement influencé ma poursuite d'étude dans l'informatique.</b></p>

      <span class="ancres" id="fonctionnalites"></span>
      <h2>Résumé des fonctionnalités</h2>
      <div id='fonctio_conteneur'>
        <div class='fonctio'>
          Attaquer
        </div>
        <div class='fonctio'>
          Se soigner
        </div>
        <div class='fonctio'>
          Bouger dans un espace restreint pour esquiver les attaques
        </div>
        <div class='fonctio'>
          Obtenir un score à la fin de la partie
        </div>
      </div>

      <span class="ancres" id="apercu"></span>
      <h2>Aperçu</h2>

      <!-- Slideshow container -->
      <div class="slideshow-container">

       <!-- Full-width images with number and caption text -->
       <div class="mySlides fade">
         <img src="<?= image($file_name.'/home'); ?>" style="width:100%">
         <div class="text">Le joueur peut choisir entre attaquer ou se soigner</div>
       </div>

       <div class="mySlides fade">
         <img src="<?= image($file_name.'/attack'); ?>" style="width:100%">
         <div class="text">Le joueur attaque</div>
       </div>

       <div class="mySlides fade">
         <img src="<?= image($file_name.'/attack1'); ?>" style="width:100%">
         <div class="text">Première attaque du dragon</div>
       </div>

       <div class="mySlides fade">
         <img src="<?= image($file_name.'/attack2'); ?>" style="width:100%">
         <div class="text">Seconde attaque du dragon</div>
       </div>

       <div class="mySlides fade">
         <img src="<?= image($file_name.'/attack3'); ?>" style="width:100%">
         <div class="text">Troisième attaque du dragon</div>
       </div>

       <div class="mySlides fade">
         <img src="<?= image($file_name.'/end_win'); ?>" style="width:100%">
         <div class="text">Le dragon n'a plus de vie, le joueur a gagné</div>
       </div>

       <div class="mySlides fade">
         <img src="<?= image($file_name.'/end_loose'); ?>" style="width:100%">
         <div class="text">Le joueur n'a plus de vie, il à perdu</div>
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
      </div>

      <script src="<?php echo js('Slides'); ?>"></script>

    </div>
  </div>
</body>
</html>
