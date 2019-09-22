<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <link rel="stylesheet" href="<?= css('Projets'); ?>" />

</head>

<body>
  <div id='article'>
    <h1 class='page_title'>MySuperForm<div class="fil"><?= $fil ?></div></h1>
    <div class='contenu'>
      <span class="ancres" id='maj'></span>
      <h3>Mises à jour</h3>
      <div class='row'>
        <div>
          Juillet 2019 - Août 2019
        </div>
        <div>
          Refonte totale du css vers un style et des couleurs qui me correspondent plus, amélioration, optimisation du site.
        </div>
          <div>
            Juin 2019
          </div>
          <div>
            Projet achevé.
          </div>
      </div>

      <span class="ancres" id="description"></span>
      <h2>Description</h2>
      <a href="http://dwarves.iut-fbleau.fr/~dozl/MySuperForm/" target="_blank" id='link'>Liens vers le site</a>
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
    </div>
  </div>
</body>
</html>
