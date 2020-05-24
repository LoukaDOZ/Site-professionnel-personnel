<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <link rel="stylesheet" href="<?= css('Projets'); ?>" />
    <link rel="stylesheet" href="<?= css('Queries'); ?>" />

</head>

<body>
  <div id='article'>
    <h1 class='page_title'>MySuperForm<div class="fil"><?= $fil ?></div></h1>
    <div class='contenu'>

      <div id='retour_phone'>
        <a href="<?= base_url('Projets'); ?>" class='naviguation'><img src="<?= image('fleche_short_gauche') ?>">Retour</a>
      </div>

      <span class="ancres" id="description"></span>
      <h2>Description</h2>
      <a href="http://dwarves.iut-fbleau.fr/~dozl/MySuperForm/" target="_blank" id='link'>Liens vers le site</a><br>
      <a href="https://github.com/LoukaDOZ/MySuperForm" target="_blank" id='link'>Liens vers GitHub</a>
      <p class='description'>MySuperForm est un projet de site web en bonôme, réalisé dans le cadre de ma première année en DUT Informatique.<br>
      Le principe du site est de pouvoir créer et répondre à des formulaires de façon anonyme.<br>
      Utilisation du framework <a href='https://codeigniter.com/' target="_blank">CodeIgniter</a>, du language PHP et d'une base de données associée au site, pour la première fois dans un projet.<br>
      Le site est fais en PHP, HTML, CSS et quelques fonctions JavaScript pour, par exemple, faire rechercher une question dans un formulaire.<br>
      De base, j'étais chargé de réaliser les pages (uniquement le HTML) et les controllers tandis que ma camarade devait réaliser les interactions avec la base de données ainsi que le CSS. Cependant, en reprenant le site pendant les vacances, j'ai pu toucher à tous les aspect du projet.<br>
      <b>J'ai apprécié réaliser ce projet car c'est le premier vrai site web fonctionnel, j'ai le ressenti que c'est un projet réellement abouti et il est de plus accessible à tous moments, ce qui donnait vraiment envie de bien le faire.</b></p>

      <span class="ancres" id="fonctionnalites"></span>
      <h2>Résumé des fonctionnalités</h2>
      <div id='fonctio_conteneur'>
        <div class='fonctio'>
          Créer un compte
        </div>
        <div class='fonctio'>
          Se connecter
        </div>
        <div class='fonctio'>
          Modifier son mot de passe
        </div>
        <div class='fonctio'>
          Modifier son identifiant
        </div>
        <div class='fonctio'>
          Modifier son email
        </div>
        <div class='fonctio'>
          Modifier sa photo de profil
        </div>
        <div class='fonctio'>
          Répondre à un formulaire
        </div>
        <div class='fonctio'>
          Créer un formulaire
        </div>
        <div class='fonctio'>
          Sauvegarder un formulaire
        </div>
        <div class='fonctio'>
          Supprimer un formulaire
        </div>
        <div class='fonctio'>
          Activer un formulaire (les autres personnes peuvent y répondre)
        </div>
        <div class='fonctio'>
          Publier un formulaire (les autres personnes peuvent y répondre sans sa clé)
        </div>
        <div class='fonctio'>
          Privatiser un formulaire (seules les personnes ayant sa clé peuvent y répondre)
        </div>
        <div class='fonctio'>
          Périmer un formulaire (plus personne ne peut y répondre)
        </div>
        <div class='fonctio'>
          Regarder les résultats du formulaire, voir le pourcentage de réponses à une question
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
         <img src="<?= image($file_name.'/create'); ?>" style="width:100%">
         <div class="text">Créer un compte</div>
       </div>

       <div class="mySlides fade">
         <img src="<?= image($file_name.'/connect'); ?>" style="width:100%">
         <div class="text">Se connecter</div>
       </div>

       <div class="mySlides fade">
         <img src="<?= image($file_name.'/gerer'); ?>" style="width:100%">
         <div class="text">Gérer son compte</div>
       </div>

       <div class="mySlides fade">
         <img src="<?= image($file_name.'/perso'); ?>" style="width:100%">
         <div class="text">Personnaliser son profil</div>
       </div>

       <div class="mySlides fade">
         <img src="<?= image($file_name.'/formulaires'); ?>" style="width:100%">
         <div class="text">Gérer ses formulaires</div>
       </div>

       <div class="mySlides fade">
         <img src="<?= image($file_name.'/modif'); ?>" style="width:100%">
         <div class="text">Créer ou modifier ses formulaires</div>
       </div>

       <div class="mySlides fade">
         <img src="<?= image($file_name.'/find_clef'); ?>" style="width:100%">
         <div class="text">Répondre à un formulaire avec sa clé</div>
       </div>

       <div class="mySlides fade">
         <img src="<?= image($file_name.'/find'); ?>" style="width:100%">
         <div class="text">Répondre à un formulaire mis en public</div>
       </div>

       <div class="mySlides fade">
         <img src="<?= image($file_name.'/rep'); ?>" style="width:100%">
         <div class="text">Répondre à un formulaire</div>
       </div>

       <div class="mySlides fade">
         <img src="<?= image($file_name.'/rep_end'); ?>" style="width:100%">
         <div class="text">Après avoir répondu à un formulaire</div>
       </div>

       <div class="mySlides fade">
         <img src="<?= image($file_name.'/res'); ?>" style="width:100%">
         <div class="text">Voir les résultats de ses formulaires</div>
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
