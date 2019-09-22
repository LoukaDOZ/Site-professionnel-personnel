<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <link rel="stylesheet" href="<?= css('CV'); ?>" />

</head>

<body>

  <div id='article'>
    <h1 class='page_title'>Mon C.V.<div class="fil"><?= $fil ?></div></h1>
    <div class='contenu'>
        <iframe src="<?= pdf($pdf); ?>" width="100%" height="1500px" align="middle"></iframe>
    	</div>
    </div>
	</body>
</html>
