<?php

global $Wcms;

?>
<!DOCTYPE HTML>
<html>
	<head>
		<title><?= $Wcms->get('config', 'siteTitle') ?></title>
        <meta name="description" content="<?= $Wcms->page('description') ?>">
        <meta name="keywords" content="<?= $Wcms->page('keywords') ?>">

		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />


		<link rel="stylesheet" href="https://cdn.graphenedeployment.nl/animate.css/3.7.2/animate.min.css">
		<link rel="stylesheet" href="https://cdn.graphenedeployment.nl/w3css/4.13/w3.css">

		<?php if($Wcms->loggedIn) { ?>
			<link rel="stylesheet" href="<?= $Wcms->asset('assets/css/adminPanel.bootstrap.min.css') ?>" />
			<link rel="stylesheet" href="<?= $Wcms->asset('assets/css/node-editor.bootstrap.min.css') ?>" />
			<link rel="stylesheet" href="<?= $Wcms->asset('assets/css/note-popover.bootstrap.min.css') ?>" />
		<?php } ?>
		<?= $Wcms->css() ?>
		<link rel="stylesheet" href="https://cdn.graphenedeployment.nl/fontawesome/5.12.0/fontawesome-pro-5.12.0-web/css/all.min.css">

		<style media="screen">
			html, body {
				height: 100%;
			}

			.w3-social-row a {
				display: inline-flex;
				flex-direction: column;
				align-items: center;
				text-decoration: none;

				margin: 1em;
			}
			.w3-social-row .w3-small {
				padding-top: 1em;
			}
			.w3-social-row .fal, .w3-social-row .fab, .w3-social-row .far, .w3-social-row .fas, .w3-social-row .fad {
				width: 3em;
				height: 3em;
				display: inline-flex;
			}
			.w3-social-row .fal:before, .w3-social-row .fab:before, .w3-social-row .far:before, .w3-social-row .fas:before, .w3-social-row .fad:before {
				display: block;
				margin: auto;
			}
			label { display: none; }
			input, textarea { margin-bottom: 1em; }
			form { text-align: right;}
		</style>
	</head>
	<body class="w3-display-container">
        <?= $Wcms->alerts() ?>
        <?= $Wcms->settings() ?>

		<main class="w3-display-middle w3-center animated fadeIn" style="max-width:1500px; padding-bottom:128px; width:100%;">
			<header class="w3-panel w3-opacity" style="padding:64px 16px">
				<h1><?= $Wcms->page('title') ?></h1>
				<h1 class="w3-large w3-wide" style="text-transform:uppercase"><?= $Wcms->page('description') ?></h1>
			</header>

			<?= $Wcms->page('content') ?>
		</main>

		<footer class="w3-display-bottommiddle w3-padding w3-center w3-large">
			<?= $Wcms->block('footer') ?>
		</footer>

		<script src="<?= $Wcms->asset('assets/js/jquery.min.js') ?>"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous" type="text/javascript"></script>
		<?= $Wcms->js() ?>
	</body>
</html>
