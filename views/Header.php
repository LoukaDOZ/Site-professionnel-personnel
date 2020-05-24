<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <link rel="stylesheet" href="<?= css('Template'); ?>" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=0.4">
    <title>Louka DOZ</title>

</head>
<body>

	<nav id='nav'>
		<a href="<?= base_url('Home'); ?>" <?php if($page == 1) echo "id='current'"; ?>>Page d'accueil</a>
		<a href="<?= base_url('Etudes'); ?>" <?php if($page == 2) echo "id='current'"; ?>>Choix d'études</a>
		<a href="<?= base_url('Loisirs'); ?>" <?php if($page == 3) echo "id='current'"; ?>>Mes centres d'intérêt</a>
		<a href="<?= base_url('Voyages'); ?>" <?php if($page == 4) echo "id='current'"; ?>>Mes voyages</a>
		<a href="<?= base_url('Projets'); ?>" <?php if($page == 5) echo "id='current'"; ?>>Mes réalisations</a>
		<a href="<?= base_url('CV'); ?>" <?php if($page == 6) echo "id='current'"; ?>>Mon CV</a>
    <a href="<?= base_url('Contact'); ?>" <?php if($page == 7) echo "id='current'"; ?>>Me contacter</a>
	</nav>

</body>
</html>
