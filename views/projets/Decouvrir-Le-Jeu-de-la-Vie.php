<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <link rel="stylesheet" href="<?= css('Projets'); ?>" />
    <link rel="stylesheet" href="<?= css('Queries/Queries_projet_description'); ?>" />

</head>

<body>
  <div id='article'>
    <h1 class='page_title'>Le Jeu de la Vie<div class="fil"><?= $fil ?></div></h1>
    <div class='contenu'>

      <div id='retour_phone'>
        <a href="<?= base_url('Projets'); ?>" class='naviguation'><img src="<?= image('fleche_short_gauche') ?>">Retour</a>
      </div>
      
      <span class="ancres" id='maj'></span>
      <h3>Mises à jour</h3>
      <div class='row'>
          <div>
            Janvier 2019
          </div>
          <div>
            Projet achevé.
          </div>
      </div>

      <span class="ancres" id="description"></span>
      <h2>Description</h2>
      <a href="https://github.com/LoukaDOZ" target="_blank" id='link'>Liens vers GitHub</a>
      <p class='description'>Programme réalisé en autonomie en C.<br>
      J'avais trouvé que Le Jeu de la Vie était un programme très intéressant au vu de ce qu'il pouvait donner. C'était de plus une bonne occasion pour moi tester la bibliothèque graphique SDL.<br>
      Le programme génère une grille de cases noires (représentant des cellules) et blanches (case vide) de façon aléatoire, puis le programme évolu seul, génération par génération, en respectant 3 règles :<br>
      - Si une case vide possède 3 cellules voisines, alors une cellule naît sur cette même case à la génération suivante<br>
      - Si une cellule possède moins de 2 voisines, elle meurt à la génération suivante<br>
      - Si une cellule possède plus de 3 voisines, elle meurt à la génération suivante<br>
      Remarque : une cellule est considérée voisine si elle se trouve au Nord, au Nord-Est, à l'Est, au Sud-Est, au Sud, au Sud-Ouest, à l'Ouest ou au Nord-Ouest d'une autre cellule.<br>
      <b>J'ai trouvé assez amusant de réaliser ce programme en autonomie et de le voir évoluer au fil des génération, malgré que ce soit un petit projet.</b></p>

      <span class="ancres" id="fonctionnalites"></span>
      <h2>Résumé des fonctionnalités</h2>
      <div id='fonctio_conteneur'>
        <div class='fonctio'>
          Regarder évoluer un ensemble de cellules pouvant donner des résultats impressionnants avec des règles simplistes
        </div>
      </div>
    </div>
  </div>
</body>
</html>
