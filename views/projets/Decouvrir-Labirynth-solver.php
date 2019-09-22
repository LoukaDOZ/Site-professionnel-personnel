<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <link rel="stylesheet" href="<?= css('Projets'); ?>" />

</head>

<body>
  <div id='article'>
    <h1 class='page_title'>Labirynth solver<div class="fil"><?= $fil ?></div></h1>
    <div class='contenu'>
      <span class="ancres" id='maj'></span>
      <h3>Mises à jour</h3>
      <div class='row'>
          <div>
            Mai 2019
          </div>
          <div>
            Projet achevé.
          </div>
      </div>

      <span class="ancres" id="description"></span>
      <h2>Description</h2>
      <a href="https://github.com/LoukaDOZ" target="_blank" id='link'>Liens vers GitHub</a>
      <p class='description'>Programme réalisé en binôme en Java avec l'interface graphique Swing, il fais partie des projet que j'ai réalisé en première anées de DUT Informatique.<br>
      Le programme devait être capable de se déplacer de case en case dans un labyrinthe et de retenir par où il est déjà passé, ainsi que la position des murs, pour en déduire où se trouve la sortie. La possibilité de créer et sauvegarder les labyrithes faisait aussi partie de l'exercice.<br>
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
          Voir en combien de coups le programme réussi à sortir du labyrinthe
        </div>
      </div>
    </div>
  </div>
</body>
</html>
