<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <link rel="stylesheet" href="<?= css('Projets'); ?>" />
    <link rel="stylesheet" href="<?= css('Queries'); ?>" />

</head>

<body>
  <div id='article'>
    <h1 class='page_title'>MonPotager<div class="fil"><?= $fil ?></div></h1>
    <div class='contenu'>

      <div id='retour_phone'>
        <a href="<?= base_url('Projets'); ?>" class='naviguation'><img src="<?= image('fleche_short_gauche') ?>">Retour</a>
      </div>

      <h5 class = "warning">Note: une API m'a été fournie par l'IUT de Fontainebleau pour réaliser ce projet.</h5>

      <span class="ancres" id="description"></span>
      <h2>Description</h2>
      <a href="https://github.com/LoukaDOZ/MonPotager" target="_blank" id='link'>Liens vers GitHub</a>
      <p class='description'>Réalisé durant ma seconde année de DUT Informatique, cette application Java liée à une base de données, à été faite binôme avec l'interface graphique de Swing.<br>
      Elle permet de créer et gérer un potager. Il est possible de le découper en de nombreuses sous-parcelles ainsi qu'indiquer les actions qui ont été faites sur les parcelles, par exemple : "semer des carottes" ou "bêcher la terre".<br>
      Ce projet avait pour but d'apprendre à travailler avec une API (ici fournie par l'IUT) pour le réaliser. L'utilisation d'une base de données était en bonus, c'était un moyen d'apprendre à l'utiliser en Java.<br>
      Je me suis occupé de toute la partie de modification de jardin : découpage, réunification de parcelles ainsi que le gestionnaire de parcelles semblable à une gestionnaire de fichier qui accompagne le tout.<br>
      <b>C'était très intéressant d'enfin pouvoir utiliser une base de données en Java. Même si ce projet est moins imposant que d'autres, c'est toujours plaisant de réaliser des projets, d'augementer mes compétences et mon expérience.</b></p>

      <span class="ancres" id="fonctionnalites"></span>
      <h2>Résumé des fonctionnalités</h2>
      <div id='fonctio_conteneur'>
        <div class='fonctio'>
          Créer un jardin
        </div>
        <div class='fonctio'>
          Supprimer un jardin
        </div>
        <div class='fonctio'>
          Couper verticalement ou horizontalement une parcelle
        </div>
        <div class='fonctio'>
          Réunir deux parcelles
        </div>
        <div class='fonctio'>
          Occulter des détails
        </div>
        <div class='fonctio'>
          Voir l'historique des actions sur le jardin
        </div>
        <div class='fonctio'>
          Ajouter un nouveau type de légume
        </div>
        <div class='fonctio'>
          Indiquer qu'une action sur le sol ou sur un légume à été réalisé sur la parcelle
        </div>
      </div>

      <span class="ancres" id="apercu"></span>
      <h2>Aperçu</h2>
      <!-- Slideshow container -->
      <div class="slideshow-container">

       <!-- Full-width images with number and caption text -->
       <div class="mySlides fade">
         <img src="<?= image($file_name.'/main'); ?>" style="width:100%">
         <div class="text">Page d'accueil</div>
       </div>

       <div class="mySlides fade">
         <img src="<?= image($file_name.'/creer'); ?>" style="width:100%">
         <div class="text">Créer un nouveau jardin</div>
       </div>

       <div class="mySlides fade">
         <img src="<?= image($file_name.'/modif'); ?>" style="width:100%">
         <div class="text">Modifier un jardin</div>
       </div>

       <div class="mySlides fade">
         <img src="<?= image($file_name.'/V_decoupage'); ?>" style="width:100%">
         <div class="text">Après un découpage vertical</div>
       </div>

       <div class="mySlides fade">
         <img src="<?= image($file_name.'/H_decoupage'); ?>" style="width:100%">
         <div class="text">Après un découpage horizontal</div>
       </div>

       <div class="mySlides fade">
         <img src="<?= image($file_name.'/details'); ?>" style="width:100%">
         <div class="text">Cacher des détails</div>
       </div>

       <div class="mySlides fade">
         <img src="<?= image($file_name.'/reunir'); ?>" style="width:100%">
         <div class="text">Réunir deux parcelles</div>
       </div>

       <div class="mySlides fade">
         <img src="<?= image($file_name.'/apres_reunification'); ?>" style="width:100%">
         <div class="text">Après réunification</div>
       </div>

       <div class="mySlides fade">
         <img src="<?= image($file_name.'/historique'); ?>" style="width:100%">
         <div class="text">Voir l'historique des parcelles</div>
       </div>

       <div class="mySlides fade">
         <img src="<?= image($file_name.'/action_legume'); ?>" style="width:100%">
         <div class="text">Renseigner une action sur les legumes de la parcelle</div>
       </div>

       <div class="mySlides fade">
         <img src="<?= image($file_name.'/action_sol'); ?>" style="width:100%">
         <div class="text">Renseigner une action sur le sol de la parcelle</div>
       </div>

       <div class="mySlides fade">
         <img src="<?= image($file_name.'/ajouter_legume'); ?>" style="width:100%">
         <div class="text">Ajout d'un nouveau legume</div>
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
