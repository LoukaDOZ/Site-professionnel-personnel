<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <link rel="stylesheet" href="<?= css('CV'); ?>" />
    <link rel="stylesheet" href="<?= css('Queries'); ?>" />

</head>

<body>

  <div id='article'>
    <h1 class='page_title'>C.V.<div class="fil"><?= $fil ?></div></h1>
    <div class='contenu'>
      <a href="<?= pdf('LoukaDOZ'); ?>" id="imprimer"><h2>Cliquez ici pour la version PDF imprimable et téléchargeable</h2></a>
      <div id="en-tete">
        <img id='img' src="<?= image('photo'); ?>">
        <div id="pres">
          <h4 id='nom'>Louka DOZ</h4>
          <span id='etude'>Ingénieur apprenti en informatique</span>
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

        <span class="ancres" id="objectif"></span>
        <h3>Objectif</h3>
        <p>
            Organisé, minutieux et appréciant le travail en équipe, je recherche une entreprise d’accueil pour effectuer mon diplôme « d’Ingénieur Spécialité Informatique » en apprentissage.
        </p>

        <span class="ancres" id="competences"></span>
        <h2>Compétences</h2>
        <h3>Informatique</h3>
        <h4>Programmation</h4>
        <div class='list'>
            <div>
                Java
            </div>
            <div>
                C
            </div>
            <div>
                PHP
            </div>
            <div>
                JavaScript
            </div>
        </div>

        <h4>Web</h4>
        <div class='list'>
            <div>
                HTML
            </div>
            <div>
                CSS
            </div>
            <div>
                AJAX
            </div>
        </div>

        <h4>Mobile</h4>
        <div class='list'>
            <div>
                Java (Android)
            </div>
            <div>
                XML (Android)
            </div>
        </div>

        <h4>Administration et réseau</h4>
        <div class='list'>
            <div>
                Scripting (Bash)
            </div>
            <div>
                Assembleur (ARM)
            </div>
        </div>

        <h4>Base de données</h4>
        <div class='list'>
            <div>
                Oracle SQL89-92
            </div>
            <div>
                PL/SQL
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

        <h4 class='margin2'>Tests</h4>
        <div class='list'>
            <div>
                JUnit
            </div>
            <div>
                Assertions Java
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

        <h4>Outils</h4>
        <div class='list'>
            <div>
                Git
            </div>
            <div>
                phpMyAdmin
            </div>
            <div>
                SQLite
            </div>
            <div>
                Android Studio
            </div>
            <div>
                Bootstrap
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
                <span>Vacataire - EHPAD <a href='http://mennecy.maisonsdefamille.com/les-etangs-accueil' target="_blank">maison de famille Les Etangs</a>, Mennecy (91) : commis de cuisine</span>
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
            Spécialité Informatique et Sciences du Numérique (ISN)<br>
            Lycée Marie Laurencin, Mennecy (91)
          </div>
          <div>
            2015
          </div>
          <div>
            Brevet d'Initiation à l'Aéronautique (BIA)
          </div>
        </div>

        <span class="ancres" id="interet"></span>
          <h2>Centres d'intérêt</h2>

        <div class='interet'>
          <p>- La programmation, les jeux vidéo, mécanique, robotique, intelligence artificielle, ingénierie et particulièrement dans l'aéronautique<br>
          - Les sciences de la vie, la physique, l'Histoire<br>
          - Le rugby, les sports de raquette notamment le tennis, le tennis de table, le badminton<br>
          - Guitare électrique, batterie, musique rock en général
        </div>

        <span class="ancres" id="divers"></span>
          <h2>Divers</h2>
            <h4>Permis</h4>
            <div class='list'>
                <div>
                    Permis B
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
              Guitare
            </div>
            <div class="do-not-break">
              2012 - 2013
            </div>
            <div>
              Tennis
            </div>
            <div class="do-not-break">
              2008 - 2018 (30/4)
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
    </div>
  </div>
  </body>
</html>
