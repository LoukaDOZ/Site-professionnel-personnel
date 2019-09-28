<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <link rel="stylesheet" href="<?= css('Contact'); ?>" />
    <link rel="stylesheet" href="<?= css('Queries/Queries'); ?>" />
    <script src="<?php echo js('Mail'); ?>"></script>

</head>

<body>
  <div id='article'>
    <h1 class='page_title'>Me contacter<div class="fil"><?= $fil ?></div></h1>
    <div class='contenu'>
      <h3>Coordonnées</h3>
      <div id='contact'>
        <div>
          <img src="<?= image('telephone_color'); ?>">
          <span>06 88 32 34 38</span>
        </div>
        <div>
          <img src="<?= image('mail_color'); ?>">
          <span>dozlouka@gmail.com</span>
        </div>
        <div>
          <img src="<?= image('adresse_color'); ?>">
          <span>2 rue Pasteur, Milly La Forêt, 91490</span>
        </div>
      </div>
      <h3>M'envoyer un email</h3>
      <p class='obligatoire'>* Champs obligatoires</p>

      <h4 id='genre'><span class='obligatoire'>*</span> Vous êtes?</h4>
      <div class="error"><p id="sexe_error"></p></div>
      <input type='radio' id='1' name="genre" value="mme" <?php if(set_value('genre') === 'mme') echo "checked='checked'"; ?>></input>
      <label for='1'>Madame</label>
      <input type='radio' id='2' name="genre" value="m" <?php if(set_value('genre') === 'm') echo "checked='checked'"; ?>></input>
      <label for='2'>Monsieur</label>
      <input type='radio' id='3' name="genre" value="autre" <?php if(set_value('genre') === 'autre') echo "checked='checked'"; ?>></input>
      <label for='3'>Autre</label>

      <h4 id='nom'><span class='obligatoire'>*</span> Votre prénom et nom :</h4>
      <div class="error" id="nom_error"><p id="nom_error"></p></div>
  		<textarea id="nom_contenu" name="nom" placeholder="Entrez votre nom"><?= set_value('nom'); ?></textarea>

      <h4 id='objet'><span class='obligatoire'>*</span> L'objet du mail :</h4>
      <div class="error" id="objet_error"><p id="objet_error"></p></div>
  		<textarea id="objet_contenu" name="objet" placeholder="Entrez l'objet du mail"><?= set_value('objet'); ?></textarea>

      <h4 id='msg'><span class='obligatoire'>*</span> Contenu du mail :</h4>
      <div class="error" id="msg_error"><p id="msg_error"></p></div>
      <textarea id="msg_contenu" name="msg" placeholder="Entrez le contenu du mail"><?= set_value('msg'); ?></textarea>

      <br><input type="submit" onclick='mail()' value='Envoyer'></input>
    </div>
  </div>
	</body>
</html>
