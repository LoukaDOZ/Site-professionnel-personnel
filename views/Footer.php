<!DOCTYPE html>
<html lang="fr">
<head>

    <link rel="stylesheet" href="<?= css('Template'); ?>" />

</head>
<body>

  <div id="footer">
    <div id="me">
      Louka DOZ<br>
      22/09/2019
  	</div>

    <div class="link">
      <ul>
        <li><a href="https://github.com/LoukaDOZ" target="_blank">GitHub</a></li>
        <li><a href="https://www.linkedin.com/in/louka-doz-23b916192/" target="_blank">Linkedin</a></li>
        <li><a href="https://fr.viadeo.com/fr/" target="_blank">Viadeo</a></li>
      </ul>
    </div>
    <div class="link">
      <ul>
        <li><a href="<?= base_url('Contact') ?>">Me contacter</a></li>
        <li><a href="<?= base_url('Signaler') ?>">Signaler un problème</a></li>
        <li><a href="<?= base_url('Aide') ?>">Aide</a></li>
      </ul>
    </div>
    <div class="link">
      <ul>
        <li><a href="<?= base_url($page.'?lang=fr') ?>">Français</a></li>
        <!--<li><a href="<?= base_url($page.'?lang=eng') ?>">English</a></li>-->
      </ul>
    </div>
    	<a href="https://www.iut-fbleau.fr" target="_blank"><img id="logo" src="<?= image('logo'); ?>" alt="Logo IUT Sénart Fontainebleau" title="Accéder au site web"></a>
	</div>

</body>
</html>
