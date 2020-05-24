<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <link rel="stylesheet" href="<?= css('Projets'); ?>" />
    <link rel="stylesheet" href="<?= css('Queries'); ?>" />

</head>

<body>
  <div id='article'>
    <h1 class='page_title'>Memowatch<div class="fil"><?= $fil ?></div></h1>
    <div class='contenu'>

      <div id='retour_phone'>
        <a href="<?= base_url('Projets'); ?>" class='naviguation'><img src="<?= image('fleche_short_gauche') ?>">Retour</a>
      </div>

      <h5 class = "warning">Note: une bibliothèque graphique m'a été fournie par l'IUT de Fontainebleau pour réaliser ce projet.</h5>

      <span class="ancres" id="description"></span>
      <h2>Description</h2>
      <a href="https://github.com/LoukaDOZ/Jeu-du-memory" target="_blank" id='link'>Liens vers GitHub</a>
      <p class='description'>J'ai réalisé ce projet, programmé en C, inspiré de l'univers d'<a href="https://playoverwatch.com/fr-fr/" target="_blank">Overwacth</a> et fait seul, dans le cadre de ma première année de DUT Informatique.<br>
      Le programme est un jeu du memory, le but est de trouver les cartes paires, parmis des cartes face cachée, en moins de temps possible, en les retournant deux par deux. Si ce sont les mêmes, le joueur peux rejouer immédiatement, sinon, il doit attendre 1 seconde.<br>
      3 modes de difficulté sont disponibles : bronze (facile, 30 cartes), platinium (moyen, 40 cartes), master (difficile, 50 cartes).<br>
      Une bibliothèque graphique nous a été fournie pour le réaliser.<br>
      <b>C'est le premier programme que je fais et que je nommerai de programme "professionnel", avec une vraie recherche d'optimisation et d'algorithmes efficaces. Un projet passionnant sachant que j'apprécie le C.</b></p>

      <span class="ancres" id="fonctionnalites"></span>
      <h2>Résumé des fonctionnalités</h2>
      <div id='fonctio_conteneur'>
        <div class='fonctio'>
          Consulter les règles du jeu
        </div>
        <div class='fonctio'>
          Jouer en mode facile, moyen, difficile
        </div>
        <div class='fonctio'>
          Retourner des cartes
        </div>
        <div class='fonctio'>
          Activer le mode triche avec la touche t, ce qui affiche toutes la carte face visible et stoppe le chronomètre
        </div>
        <div class='fonctio'>
          Comparer son score avec un "meilleur score" différent pour chaque niveau de difficulté
        </div>
      </div>

      <span class="ancres" id="apercu"></span>
      <h2>Aperçu</h2>

      <!-- Slideshow container -->
      <div class="slideshow-container">

       <!-- Full-width images with number and caption text -->
       <div class="mySlides fade">
         <img src="<?= image($file_name.'/home'); ?>" style="width:100%">
         <div class="text">Page d'accueil</div>
       </div>

       <div class="mySlides fade">
         <img src="<?= image($file_name.'/rules'); ?>" style="width:100%">
         <div class="text">Règles du jeu</div>
       </div>

       <div class="mySlides fade">
         <img src="<?= image($file_name.'/diff'); ?>" style="width:100%">
         <div class="text">Choix de la difficulté</div>
       </div>

       <div class="mySlides fade">
         <img src="<?= image($file_name.'/bronze'); ?>" style="width:100%">
         <div class="text">Grille facile</div>
       </div>

       <div class="mySlides fade">
         <img src="<?= image($file_name.'/plat'); ?>" style="width:100%">
         <div class="text">Grille moyenne</div>
       </div>

       <div class="mySlides fade">
         <img src="<?= image($file_name.'/master'); ?>" style="width:100%">
         <div class="text">Grille difficile</div>
       </div>

       <div class="mySlides fade">
         <img src="<?= image($file_name.'/turn'); ?>" style="width:100%">
         <div class="text">Une carte retournée</div>
       </div>

       <div class="mySlides fade">
         <img src="<?= image($file_name.'/pair'); ?>" style="width:100%">
         <div class="text">Une paire trouvée</div>
       </div>

       <div class="mySlides fade">
         <img src="<?= image($file_name.'/cheat'); ?>" style="width:100%">
         <div class="text">Mode triche</div>
       </div>

       <div class="mySlides fade">
         <img src="<?= image($file_name.'/end'); ?>" style="width:100%">
         <div class="text">Menu de fin</div>
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
      </div>

      <script src="<?php echo js('Slides'); ?>"></script>

    </div>
  </div>
</body>
</html>
