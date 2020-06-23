<?php
	function baseUrl($append = '') {
		$base_url = 'http://testim.kontikimedia.fr/teamtool/';
		return $base_url . $append;
	}
?>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Teamtool - made in 🇲🇬 ❤️</title>
	<link rel="icon" type="icon" href="public/src/favicon.ico" />
	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<link rel="stylesheet" href="public/css/master.css">
	<link href="https://fonts.googleapis.com/css2?family=Lato&family=Merienda+One&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/7f150bd29b.js" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
	<!-- production version, optimized for size and speed -->
	<script src="https://cdn.jsdelivr.net/npm/vue"></script>
</head>

<body>
	<nav class="teamtool-nav">
		<img src="public/src/logo.png" class="logo super-rotate--2t" alt="Teamtool">
		<a class="navbar-brand heading ml-2" href="<?= baseUrl('') ?>">Teamtool</a>
		<div class="navbar-container container-fluid">
			<ul class="navbar-nav flex fl-x fl-center">
				<li class="teamtool-nav__item">
		      <a class="teamtool-nav__link" href="<?= baseUrl('') ?>">Home</a>
		    </li>
				<li class="teamtool-nav__item">
		      <a class="teamtool-nav__link" href="<?= baseUrl('infos.php') ?>">Infos</a>
		    </li>
				<li class="teamtool-nav__item">
		      <a class="teamtool-nav__link" href="<?= baseUrl('help.php') ?>">Help</a>
		    </li>
			</ul>
		</div>
	</nav>
