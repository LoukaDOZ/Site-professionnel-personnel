<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <link rel="stylesheet" href="<?= css('Projets'); ?>" />

</head>

<body>
  <div id='article'>
    <h1 class='page_title'>Site professionnel/personnel<div class="fil"><?= $fil ?></div></h1>
    <div class='contenu'>
      <span class="ancres" id='maj'></span>
      <h3>Mises à jour</h3>
      <div class='row'>
        <div>
          Septembre 2019
        </div>
        <div>
          <span>Refonte totale du css vers un style et des couleurs qui me correspondent plus, plus modernes, plus lisses. Refonte avec du PHP avec le framework <a href='https://codeigniter.com/' target="_blank">CodeIgniter</a>.<span>
        </div>
          <div>
            Mars 2019
          </div>
          <div>
            Projet achevé.
          </div>
      </div>

      <span class="ancres" id="description"></span>
      <h2>Description</h2>
      <a href="http://dwarves.iut-fbleau.fr/~dozl/Louka_DOZ/" target="_blank" id='link'>Liens vers le site</a>
      <p class='description'>Ce site web réalisé seul, dans le cadre de ma première année en DUT Informatique, est une sorte de C.V. amélioré avec beaucoup plus d'informations personnelles.<br>
      Ce site est dabord dédié à la recherche de stage de ma seconde année en DUT Informatique.<br>
      Il était de base en HTML et CSS uniquement, avant que je ne le modifie en septembre 2019, en y ajoutant du PHP.<br>
      <b>J'aime beaucoup l'idée de se projet, aller plus loin que la formalité du C.V., c'est très intéressant.</b></p>

      <span class="ancres" id="fonctionnalites"></span>
      <h2>Résumé des fonctionnalités</h2>
      <div id='fonctio_conteneur'>
        <div class='fonctio'>
          En découvrir plus sur moi
        </div>
        <div class='fonctio'>
          Me contacter
        </div>
        <div class='fonctio'>
          Accéder à d'autre liens tels que <a href="https://github.com/LoukaDOZ" target="_blank">GitHub</a> ou <a href="https://www.linkedin.com/in/louka-doz-23b916192/" target="_blank">Linkedin</a>
        </div>
        <div class='fonctio'>
          Signaler un problème
        </div>
      </div>
    </div>
  </div>
</body>
</html>
