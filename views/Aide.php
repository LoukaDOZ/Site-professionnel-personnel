<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">

</head>

<body>
  <div id='article'>
    <h1 class='page_title'>Aide<div class="fil"><?= $fil ?></div></h1>
      <div class='contenu'>
        <span class="ancres" id="naviguer"></span>
    		<h2>Comment naviguer?</h2>

        Vous êtes actuellement sur mon site web pour en découvrir plus sur moi, mais vous vous demandez comment naviguer?<br>
        Sachez que plusieurs barres de naviguation vous permettent à tout moment de de vous déplacer sur mon site :<br>
        - La première se situe tout en haut de la page. Utilisez-la pour naviguer de page en page<br>
        - La seconde se situe a gauche et vous permet de naviguer entre les grands titres de la page dans laquelle vous vous situez<br>
        Vous croiserez aussi des liens durant votre visite, notament vers d'autres sites si vous souhaitez les visiter. Ces liens apparaissent <a href=''>comme ceci</a> (celui-çi est innutile).<br>
        Pour finir, retrouvez des liens vers d'autres sites et pages, situés en <a href='#footer'>bas de la page</a>.

        <span class="ancres" id="probleme"></span>
    		<h2>Un problème?</h2>

        Vous pouvez signaler un problème <a href="<?= base_url('Signaler'); ?>">ici</a>.<br>
        Un lien est aussi disponible en <a href="#footer">pied de page</a>.

        <span class="ancres" id="contact"></span>
      	<h2>Comment me contacter?</h2>

        Vous pouvez me contacter <a href="<?= base_url('Contact'); ?>">ici</a>.<br>
        Un lien est aussi disponible en <a href="#footer">pied de page</a>.
    </div>
  </div>
	</body>
</html>
