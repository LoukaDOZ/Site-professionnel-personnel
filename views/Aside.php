<!DOCTYPE html>
<html lang="fr">
<head>

    <link rel="stylesheet" href="<?= css('Template'); ?>" />

</head>
<body>

  <div id="aside">
    <?php
      foreach($aside as $a){

        echo "<a href='#".$a['ref']."' class='naviguation'>".$a['titre']."</a>";
      }
    ?>
    <a href="#" class='naviguation'>Haut de page</a>
    <a href="#footer" class='naviguation'>Pied de page</a>

      <?php
        if(!empty($retour)){

          echo "<div id='retour'>";
          echo "<a href='".base_url($retour['ref'])."' class='naviguation'><img src='".image('fleche_short_gauche')."'>Retour</a>";
        }else{

          echo "<div id='retour' style='display:none;'>";
        }
      ?>
  	</div>
	</div>

</body>
</html>
