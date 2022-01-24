<?php

	session_start();
	include "../include/koneksi.php";
	if(isset($_SESSION['user'])){

?>
<!DOCTYPE html>
<html>
  <head>
    <title>Lowongan Kerja</title>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- css -->
    <link href="../css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="../css/style.css" rel="stylesheet" media="screen">
	<link href="../color/default.css" rel="stylesheet" media="screen">
	<script src="../js/modernizr.custom.js"></script>
	</head>
  <body>
	<!-- <div class="menu-area">
			<div id="dl-menu" class="dl-menuwrapper">
						<button class="dl-trigger">Open Menu</button>
						<ul class="dl-menu">
							<li><a href="index.php">Profil</a></li>
							<li><a href="?page=download">Download</a></li>
							<li><a href="?page=penerimaan">Penerimaan</a></li>
							<li><a href="?page=pengumuman">Pengumuman</a></li>
							<li><a href="logout_user.php">Logout</a></li>
						</ul>
					</div>/dl-menuwrapper -->

			<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand scroll-page" href="#">Kuvukiland Tech</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link" href="#intro">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="?page=download">Download</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="?page=penerimaan">Penerimaan</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="?page=pengumuman">Pengumuman</a>
				</li>
				<li class="nav-item">
					<a class="nav-link"href="logout_user.php">Logout</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#contact">Kontak</a>
				</li>
			</ul>
		</div>
	</nav>

	<?php
		include "page.php";


	}else{

		echo "<script language='javascript'> window.location.href='../index.php'</script>";

	}
	?>
	  
	</body>

	<!-- js -->
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
	<script src="../js/jquery.smooth-scroll.min.js"></script>
	<script src="../js/jquery.dlmenu.js"></script>
	<script src="../js/wow.min.js"></script>
	<script src="../js/custom.js"></script>
</html>
