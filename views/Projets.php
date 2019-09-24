<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <link rel="stylesheet" href="<?= css('Projets'); ?>" />
    <link rel="stylesheet" href="<?= css('Queries/Queries_projets'); ?>" />

</head>

<body>
  <div id='article'>
    <h1 class='page_title'>Mes réalisations<div class="fil"><?= $fil ?></div></h1>
      <div class='contenu'>
        <h2>Mes réalisations</h2>
          <div id="projets">
            <?php
            foreach($projets as $projet){

              echo "<div class='projet'>";
                echo "<div id='titre'>";
                  echo $projet['titre'];
                echo "</div>";

                echo "<div id='description'>";
                  echo "<p>".$projet['description']."</p>";
                echo "</div>";
                $projet['titre'] = str_replace(' ','-',$projet['titre']);
                $projet['titre'] = str_replace('/','-',$projet['titre']);
                $projet['titre'] = str_replace('é','e',$projet['titre']);
                echo "<a class='see' href='".base_url('Projets/projet/'.$projet['titre'])."'><div id='decouvrir'>";
                  echo "<p>Détails</p><img src='".image('fleche_short_droite')."'>";
                echo "</div></a>";
                echo "<div class='liste_langages'>";

                  foreach($projet['langages'] as $langage=>$langue){

                    echo "<div>".$langue."</div>";
                  }
                echo "</div>";
              echo "</div>";
            }
            ?>
          </div>
      </div>
    </div>
	</body>
</html>
