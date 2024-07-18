<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=w, initial-scale=1.0">
    <title><?= $title ?></title>
	<link rel="stylesheet" href="<?= base_url('res/style.css') ?>">
</head>
<body>
<header>
		<h1>Ha kisállatra vágysz, a legjobb helyen jársz!</h1>

		<nav>
			<ul>
				<li><a href="<?= base_url() ?>"><strong>Kezdőlap</strong></a></li>
				<li><a href="<?= base_url('animals') ?>"><strong>Állatkáink</strong></a></li>
				<li><a href="<?= base_url('services') ?>"><strong>Szolgáltatások</strong></a></li>
				<li><a href="<?= base_url('contact') ?>"><strong>Kapcsolat</strong></a></li>
			</ul>
		</nav>
</header>
	