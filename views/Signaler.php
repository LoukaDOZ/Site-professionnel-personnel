<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <link rel="stylesheet" href="<?= css('Contact'); ?>" />
    <script src="<?php echo js('Mail'); ?>"></script>

</head>

<body>
  <div id='article'>
    <h1 class='page_title'>Signaler un problème<div class="fil"><?= $fil ?></div></h1>
    <div class='contenu'>
      <h3>Signaler</h3>
      <p class='obligatoire'>* Champs obligatoires</p>

      <h4 id='pb'><span class='obligatoire'>*</span> Quel est votre problème?</h4>
      <div class="error"><p id='pb_error'></p></div>
  		<textarea id='pb_contenu' name="pb" placeholder="Signalez le problème"><?= set_value('pb'); ?></textarea>

      <br><input type="submit" value='Signaler' onclick="signalerProbleme();"></input>
    </div>
  </div>
	</body>
</html>
