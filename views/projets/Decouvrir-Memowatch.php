<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <link rel="stylesheet" href="<?= css('Projets'); ?>" />

</head>

<body>
  <div id='article'>
    <h1 class='page_title'>Mémowatch<div class="fil"><?= $fil ?></div></h1>
    <div class='contenu'>
      <span class="ancres" id='maj'></span>
      <h3>Mises à jour</h3>
      <div class='row'>
        <div>
          Janvier 2019
        </div>
        <div>
          Ajout d'un moyen de revenir au menu principal sans devoir relancer le programme.
        </div>
          <div>
            Décembre 2019
          </div>
          <div>
            Projet achevé.
          </div>
      </div>

      <span class="ancres" id="description"></span>
      <h2>Description</h2>
      <a href="https://github.com/LoukaDOZ" target="_blank" id='link'>Liens vers GitHub</a>
      <p class='description'>J'ai réalisé ce projet, programmé en C, inspiré de l'univers d'<a href="https://playoverwatch.com/fr-fr/" target="_blank">Overwacth</a> et fait seul, dans le cadre de ma première année de DUT Informatique.<br>
      Le programme est un jeu du mémory, le but est de trouver les cartes paires, parmis des cartes face cachée, en moins de temps possible, en les retournant deux par deux. Si ce sont les mêmes, le joueur peux rejouer immédiatement, sinon, il doit attendre 1 seconde.<br>
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
    </div>
  </div>
</body>
</html>
