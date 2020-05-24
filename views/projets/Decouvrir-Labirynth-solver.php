<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <link rel="stylesheet" href="<?= css('Projets'); ?>" />
    <link rel="stylesheet" href="<?= css('Queries'); ?>" />
    <link rel="stylesheet" href="<?= css('carousel.css'); ?>">

</head>

<body>
  <div id='article'>
    <h1 class='page_title'>Labirynth solver<div class="fil"><?= $fil ?></div></h1>
    <div class='contenu'>

      <div id='retour_phone'>
        <a href="<?= base_url('Projets'); ?>" class='naviguation'><img src="<?= image('fleche_short_gauche') ?>">Retour</a>
      </div>

      <span class="ancres" id="description"></span>
      <h2>Description</h2>
      <a href="https://github.com/LoukaDOZ/Labyrinth-Solver" target="_blank" id='link'>Liens vers GitHub</a>
      <p class='description'>Programme réalisé en binôme en Java avec l'interface graphique Swing, il fait parti des projets que j'ai réalisés en première année de DUT Informatique.<br>
      Le programme est capable de se déplacer de case en case dans un labyrinthe et de retenir par où il est déjà passé, ainsi que la position des murs, pour en déduire où se trouve la sortie. La possibilité de créer et sauvegarder les labyrithes faisait aussi partie de l'exercice.<br>
      Le programme a deux façons de tourner : <br>
      - manuellement : l'utilisateur appuie sur une touche pour faire avancer le programme d'une case et il voit l'avancement du programme<br>
      - automatique : le programme enchaine les déplacements seul, l'utilisateur ne vois pas l'avancement du programme, il ne voit que le résultat<br>
      Le programme a aussi deux façons de choisir une direction :<br>
      - Aléatoirement<br>
      - Déterministe : le programme utilise le principe d'une pile pour se souvenir de ses déplacements et attendre la sortie le plus rapidement possible<br>
      Dans ce projet, qui est le premier que j'ai réalisé en Java, je me suis occupé de toute la partie "création de labyrinthe" ainsi que de la création de l'intelligence artificielle capable de résoudre le labyrinthe. Mon collègue s'est lui occupé de la sauvegarde des labyrinthe dans des fichiers, qui pouvaient être ouverts dans le programme pour les utiliser (lecture et écriture de fichiers).<br>
      <b>J'aime beaucoup le langage Java et j'ai trouvé ce projet très intéresssant, j'ai bien mieux pris en main le langage après ce projet, surtout le modèle MVC. Le développement de l'intelligence artificielle était clairement la partie que j'ai le plus apprécié.</b></p>

      <span class="ancres" id="fonctionnalites"></span>
      <h2>Résumé des fonctionnalités</h2>
      <div id='fonctio_conteneur'>
        <div class='fonctio'>
          Créer un labyrinthe
        </div>
        <div class='fonctio'>
          Ouvrir un labyrinthe précédemment enregistré et pouvoir le modifier
        </div>
        <div class='fonctio'>
          Sauvegarder un labyrinthe
        </div>
        <div class='fonctio'>
          Choisir le mode automatique ou manuel
        </div>
        <div class='fonctio'>
          Choisir un algorithme déterministe ou aléatoire
        </div>
        <div class='fonctio'>
          Choisir un nombre de tours maximal
        </div>
        <div class='fonctio'>
          Voir en combien de coups le programme réussi à sortir du labyrinthe
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
         <img src="<?= image($file_name.'/init'); ?>" style="width:100%">
         <div class="text">Initialiser un labyrinthe</div>
       </div>

       <div class="mySlides fade">
         <img src="<?= image($file_name.'/open'); ?>" style="width:100%">
         <div class="text">Ouvrir un labyrinthe</div>
       </div>

       <div class="mySlides fade">
         <img src="<?= image($file_name.'/modif'); ?>" style="width:100%">
         <div class="text">Modifier un labyrinthe</div>
       </div>

       <div class="mySlides fade">
         <img src="<?= image($file_name.'/save'); ?>" style="width:100%">
         <div class="text">Sauvegarder un labyrinthe</div>
       </div>

       <div class="mySlides fade">
         <img src="<?= image($file_name.'/mode'); ?>" style="width:100%">
         <div class="text">Séléctionner le mode de résolution</div>
       </div>

       <div class="mySlides fade">
         <img src="<?= image($file_name.'/auto'); ?>" style="width:100%">
         <div class="text">Mode automatique</div>
       </div>

       <div class="mySlides fade">
         <img src="<?= image($file_name.'/manual'); ?>" style="width:100%">
         <div class="text">Mode manuel</div>
       </div>

       <div class="mySlides fade">
         <img src="<?= image($file_name.'/end_auto'); ?>" style="width:100%">
         <div class="text">Fin du mode automatique</div>
       </div>

       <div class="mySlides fade">
         <img src="<?= image($file_name.'/end_manual'); ?>" style="width:100%">
         <div class="text">Fin du mode manuel</div>
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
