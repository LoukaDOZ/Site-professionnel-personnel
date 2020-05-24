<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <link rel="stylesheet" href="<?= css('Contact'); ?>" />
    <link rel="stylesheet" href="<?= css('Queries'); ?>" />
    <script src="<?php echo js('Mail'); ?>"></script>

</head>

<body>
  <div id='article'>
    <h1 class='page_title'>Signaler un problème<div class="fil"><?= $fil ?></div></h1>
    <div class='contenu'>
      <h3>Signaler</h3>
      <h5 class="warning">Note : cet hébergeur, sur lequel mon site est posté, ne me permet pas d'envoyer directement des emails. Votre application de messagerie par défaut s'ouvrira avec les informations que vous rentrez ci-dessous, vous n'aurez plus qu'à envoyer l'email.</h5>
      <p class='obligatoire'>* Champs obligatoires</p>

      <h4 id='pb'><span class='obligatoire'>*</span> Quel est votre problème?</h4>
      <p id='pb_error' class="error">Complétez ce champ s'il vous plaît.</p>
  		<textarea id='pb_contenu' name="pb" placeholder="Signalez le problème"><?= set_value('pb'); ?></textarea>

      <br><input type="submit" value='Signaler' onclick="signalerProbleme('fr');"></input>
    </div>
  </div>
	</body>
</html>
