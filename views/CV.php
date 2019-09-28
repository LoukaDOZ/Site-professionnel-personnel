<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <link rel="stylesheet" href="<?= css('CV'); ?>" />
    <link rel="stylesheet" href="<?= css('Queries/Queries_CV'); ?>" />

</head>

<body>

  <div id='article'>
    <h1 class='page_title'>Mon C.V.<div class="fil"><?= $fil ?></div></h1>
    <div class='contenu'>
      <a href="<?= base_url('CV/PDF/LoukaDOZ'); ?>" id="imprimer"><h2>Cliquez ici pour la version PDF imprimable</h2></a>
      <div id="en-tete">
        <img id='img' src="<?= image('photo'); ?>">
        <div id="pres">
          <h4 id='nom'>Louka DOZ</h4>
          <span id='etude'>Etudiant en Informatique</span>
          <div id='qualites'>
            Organisé, minutieux, autonome, à l’écoute, aime le travail en groupe
          </div>
        </div>
        <div id='contact'>
          <div>
            <img src="<?= image('telephone'); ?>">
            <span>06 88 32 34 38</span>
          </div>
          <div>
            <img src="<?= image('mail'); ?>">
            <span>dozlouka@gmail.com</span>
          </div>
          <div>
            <img src="<?= image('adresse'); ?>">
            <span>2 rue Pasteur, Milly La Forêt, 91490</span>
          </div>
        </div>
      </div>

      <span class="ancres" id="formation"></span>
				<h2>Formation</h2>
        <div class='row'>
          <div>
            Septembre 2019 - aujourd'hui
          </div>
          <div>
            Seconde année de DUT Informatique à l'UPEC site de Fontainebleau
          </div>
          <div>
            2018 - 2019
          </div>
          <div>
            Première année de DUT Informatique à l'UPEC site de Fontainebleau
          </div>
          <div>
            Juin 2018
          </div>
          <div>
            Baccalauréat S-SVT (mention assez-bien)<br>
  					Spécialité Informatique Science du Numérique (ISN)<br>
  					Lycée Marie Laurencin, Mennecy (91)
          </div>
          <div>
            2015
          </div>
          <div>
            Brevet d'Initiation à l'Aéronautique (BIA)
          </div>
        </div>

        <span class="ancres" id="competences"></span>
  				<h2>Compétences</h2>
          <h3>Informatique</h3>
          <h4>Programmation</h4>
          <div class='row'>
            <div>
              C
            </div>
            <div class='niveau'>
              <img src="<?= image('full'); ?>">
              <img src="<?= image('full'); ?>">
              <img src="<?= image('full'); ?>">
              <img src="<?= image('full'); ?>">
              <img src="<?= image('void'); ?>">
            </div>
            <div>
              Java
            </div>
            <div class='niveau'>
              <img src="<?= image('full'); ?>">
              <img src="<?= image('full'); ?>">
              <img src="<?= image('full'); ?>">
              <img src="<?= image('full'); ?>">
              <img src="<?= image('void'); ?>">
            </div>
            <div>
              JavaScript
            </div>
            <div class='niveau'>
              <img src="<?= image('full'); ?>">
              <img src="<?= image('full'); ?>">
              <img src="<?= image('full'); ?>">
              <img src="<?= image('half'); ?>">
              <img src="<?= image('void'); ?>">
            </div>
          </div>

          <h4>Web</h4>
          <div class='row'>
            <div>
              HTML
            </div>
            <div class='niveau'>
              <img src="<?= image('full'); ?>">
              <img src="<?= image('full'); ?>">
              <img src="<?= image('full'); ?>">
              <img src="<?= image('full'); ?>">
              <img src="<?= image('half'); ?>">
            </div>
            <div>
              CSS
            </div>
            <div class='niveau'>
              <img src="<?= image('full'); ?>">
              <img src="<?= image('full'); ?>">
              <img src="<?= image('full'); ?>">
              <img src="<?= image('full'); ?>">
              <img src="<?= image('half'); ?>">
            </div>
          </div>

          <h4>Administration et réseau</h4>
          <div class='row'>
            <div>
              Scripting (Bash)
            </div>
            <div class='niveau'>
              <img src="<?= image('full'); ?>">
              <img src="<?= image('full'); ?>">
              <img src="<?= image('full'); ?>">
              <img src="<?= image('void'); ?>">
              <img src="<?= image('void'); ?>">
            </div>
            <div>
              Assembleur (ARM)
            </div>
            <div class='niveau'>
              <img src="<?= image('full'); ?>">
              <img src="<?= image('full'); ?>">
              <img src="<?= image('full'); ?>">
              <img src="<?= image('void'); ?>">
              <img src="<?= image('void'); ?>">
            </div>
          </div>

          <h4>Base de données</h4>
          <div class='row'>
            <div>
              Oracle SQL89-92
            </div>
            <div class='niveau'>
              <img src="<?= image('full'); ?>">
              <img src="<?= image('full'); ?>">
              <img src="<?= image('full'); ?>">
              <img src="<?= image('void'); ?>">
              <img src="<?= image('void'); ?>">
            </div>
          </div>

          <h4>Systèmes d'exploitation</h4>
          <div class='list'>
            <div>
              Arch Linux
            </div>
            <div>
              Ubuntu
            </div>
            <div>
              Windows
            </div>
          </div>

          <h4 class='margin2'>Bureautique</h4>
          <div class='list'>
            <div>
              Microsoft Word
            </div>
            <div>
              Powerpoint
            </div>
            <div>
              Excel
            </div>
          </div>

          <h3 class='margin'>Langues</h3>
          <div class='row'>
            <div>
              Français
            </div>
            <div class="do-not-break">
              Langue natale
            </div>
            <div>
              Anglais
            </div>
            <div class="do-not-break">
              Bon niveau
            </div>
          </div>

        <span class="ancres" id="experience"></span>
    			<h2>Expérience professionnelle</h2>

          <div class='row'>
            <div>
              Janvier 2019 - Août 2019
            </div>
            <div>
              <span>Vacataire - EHPAD <a href='http://mennecy.maisonsdefamille.com/les-etangs-accueil' target="_blank">maison de famille Les Etants</a>, Mennecy (91) : commis de cuisine, aide au service et au ménage</span>
            </div>
          </div>

        <span class="ancres" id="interet"></span>
    			<h2>Centres d'intérêt</h2>

        <div class='interet'>
          - Mécanique, robotique, intelligence artificielle, ingénierie et particulièrement dans l'aéronautique, la programmation, les jeux vidéo<br>
    			- Voyager, imaginer, créer, construire<br>
    			- La gastronomie (surtout asiatique et italienne)<br>
          - Le rugby, les sports de raquette notamment le tennis, le tennis de table, le badminton<br>
          - Guitare électrique, batterie, musique rock en général
        </div>

        <span class="ancres" id="divers"></span>
    			<h2>Divers</h2>
          <h4>Logiciels</h4>
          <div class='row'>
            <div>
              Paint.net
            </div>
            <div>
              Utilisation pour modifier, détourer, créer des images, destinées principalement aux projets que je réalise<br>
              (Autodidacte)
            </div>
            <div>
              Audacity
            </div>
            <div>
              Utilisation pour le découpage audio (musiques, bruitages), destiné à l'utilisation personnelle mais aussi aux projets que je réalise<br>
              (Autodidacte)
            </div>
            <div>
              Unreal Engine 4
            </div>
            <div class="do-not-break">
              Début d'apprentissage<br>
              (Autodidacte)
            </div>
          </div>
          <h4>Loisirs et Sports</h4>
          <div class='row'>
            <div>
              Sports divers pratiqués en autonomie
            </div>
            <div class="do-not-break">
              2019 - aujourd'hui
            </div>
            <div>
              Tennis
            </div>
            <div class="do-not-break">
              2008 - 2018 (30/4)
            </div>
            <div>
              Guitare
            </div>
            <div class="do-not-break">
              2012 - 2013
            </div>
            <div>
              Rugby
            </div>
            <div class="do-not-break">
              2006 - 2007
            </div>
          </div>
          <h4>Voyages</h4>
          <div>
            Né en Malaisie, j'ai vécu au Brésil (3 ans) puis en République Tchèque (2 ans)<br>
    				Nombreux voyages à travers le monde (Asie, Amérique latine, Maghreb, Moyen Orient, Europe)
          </div>
          <h4>Autres</h4>
          <div class='list'>
            <div>
              Permis B
            </div>
          </div>
  	</div>
  </div>
	</body>
</html>
