<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <link rel="stylesheet" href="<?= css('Projets'); ?>" />
    <link rel="stylesheet" href="<?= css('Queries/Queries_projet_description'); ?>" />

</head>

<body>
  <div id='article'>
    <h1 class='page_title'>Soul of Bravery<div class="fil"><?= $fil ?></div></h1>
    <div class='contenu'>

      <div id='retour_phone'>
        <a href="<?= base_url('Projets'); ?>" class='naviguation'><img src="<?= image('fleche_short_gauche') ?>">Retour</a>
      </div>
      
      <span class="ancres" id='maj'></span>
      <h3>Mises à jour</h3>
      <div class='row'>
          <div>
            Juin 2018
          </div>
          <div>
            Projet achevé.
          </div>
      </div>

      <span class="ancres" id="description"></span>
      <h2>Description</h2>
      <a href="https://github.com/LoukaDOZ" target="_blank" id='link'>Liens vers GitHub</a>
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
    </div>
  </div>
</body>
</html>
