<?php

session_start();
include "include/koneksi.php";
$lowongan = new Lowongan();
if (isset($_SESSION['user'])) {
	echo "<script language='javascript'> window.location.href='user/index.php'</script>";
}

?>
<!DOCTYPE html>
<html>

<head>
	<title>Lowongan Kerja</title>
	<meta charset="utf-8" />
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- css -->
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="css/style.css" rel="stylesheet" media="screen">
	<link href="css/custom.css" rel="stylesheet" media="screen">
	<link href="color/default.css" rel="stylesheet" media="screen">
	<script src="js/modernizr.custom.js"></script>
</head>

<body>
	<!-- <div class="menu-area">
		<div id="dl-menu" class="dl-menuwrapper">
			<button class="dl-trigger">Open Menu</button>
			<ul class="dl-menu">
				<li>
					<a href="#intro">Home</a>
				</li>
				<li><a href="#about">About</a></li>
				<li><a href="#penerimaan">Penerimaan</a></li>
				<li><a href="#galeri">Galeri</a></li>
				<li><a href="#contact">Contact</a></li>
			</ul>
		</div>
	</div>	 -->

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand scroll-page" href="#">Kuvukiland Tech</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link scroll-page" href="#intro">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link scroll-page" href="#about">About</a>
				</li>
				<li class="nav-item">
					<a class="nav-link scroll-page" href="#penerimaan">Penerimaan</a>
				</li>
				<li class="nav-item">
					<a class="nav-link scroll-page" href="#galeri">Galeri</a>
				</li>
				<li class="nav-item">
					<a class="nav-link scroll-page" href="#contact">Contact</a>
				</li>
			</ul>
		</div>
	</nav>

	<!-- intro area -->
	<div id="intro">

		<div class="intro-text">
			<div class="container">
				<div class="row">


					<div class="col-md-12">

						<div class="brand">
							<img src='img/uui.png'>
							<h1><a href="index.html">Lowongan Kerja<br></a></h1>

							<p><span>Bergabung bersama kami untuk mendapatkan karir yang lebih baik</span></p>
							<?php
							if (isset($_SESSION['user'])) {
							?>
								<button type="button" class="btn btn-success btn-lg">My Profile</button>
							<?php
							} else {
							?>
								<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModalRegister">Register</button>
								<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModalLogin">Login</button>
							<?php
							}
							?>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
	




	<!-- About -->
	<section id="about" class="mb-5">
		<div class="container">
			<div style="margin-top: -50px;" class="card pb-5">
				<div class="card-body">
					<h2 class="my-5">About us</h2>
					<div class="row">
						<div class="col-md-6 col-lg-6">
							<div class="img-about">
								<img src="img/works/project/Wolf.jpg" alt="">
							</div>
						</div>
						<div class="col-md-6 col-lg-6 mt-5 mt-md-0">
							<p class="text-justify px-5">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum ex maxime, suscipit ad tempora ipsum modi voluptatibus, fugit beatae aliquam a nobis in enim unde provident, esse molestiae neque voluptates?
							</p>
							<p class="text-justify px-5">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum ex maxime, suscipit ad tempora ipsum modi voluptatibus, fugit beatae aliquam a nobis in enim unde provident, esse molestiae neque voluptates?
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- spacer -->
	<section id="spacer1" class="home-section spacer">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="color-light">
						<h2 class="wow bounceInDown" data-wow-delay="1s">Partnership, Leadership, Battleship, Pokoknyaship</h2>
						<p class="lead wow bounceInUp" data-wow-delay="2s">Merdeka atau Mati</p>
						<?php
						if (isset($_SESSION['user'])) {
						?>
							<button type="button" class="btn btn-success btn-lg lead wow bounceInUp" data-wow-delay="1s">My Profile</button>
						<?php
						} else {
						?>
							<button type="button" class="btn btn-primary btn-lg lead wow bounceInUp" data-wow-delay="1s" data-toggle="modal" data-target="#myModalRegister">Register</button>
							<button type="button" class="btn btn-info btn-lg lead wow bounceInUp" data-wow-delay="1s" data-toggle="modal" data-target="#myModalLogin">Login</button>
						<?php
						}
						?>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Services -->
	<section id="penerimaan" class="bg-white" style="margin-top: 100px;">
		<div class="container">
			<h2>Penerimaan Pegawai</h2>
			<p>Sistem Pendukung Keputusan Penerimaan Pegawai</p>

			<div class="card my-5">
				<div class="card-body">
					<table class="table">
						<thead>
							<tr>
								<th>No.</th>
								<th>Penerimaan</th>
								<th>Kuota</th>
							</tr>
						</thead>

						<?php
						$get = $lowongan->GetData("where status='1'");
						$no = 1;
						while ($row = $get->fetch()) {
							echo "<tr>
								<td>$no</td>
								<td>$row[lowongan]</td>
								<td>$row[kuota]</td>
								<td><a href='#' class='show_rincian' data-id='$row[id_lowongan]' data-wow-delay='1s' data-toggle='modal' data-target='#myModalSyarat'>Syarat</a></td>
								</tr>";
						}
						?>
					</table>
				</div>
			</div>
		</div>
	</section>

	<section class="project-section py-5">
		<h2 class="mb-5 text-white">Project Kami</h2>
		<div class="slider-project">
			<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner">
					<div class="carousel-item active">
						<div class="card  border-0">
							<h4>Project 1</h4>
							<div class="card-body">
								<div class="img-slider">
									<img src="img/works/project/project1.webp" alt="">
									<div class="overlay d-flex align-items-center justify-content-center">
										<a class="btn btn-primary" href="#image-1">Lihat Project</a>
									</div>
								</div>
							</div>

							<div class="lb-overlay" id="image-1">
								<a href="#page" class="lb-close">X</a>
								<img src="img/works/project/project1.webp" alt="" />
								<div class="d-flex justify-content-center">
									<h3>Project 1</h3>
									<p>Project UI Dashboard</p>
								</div>

							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="card border-0">
							<h4>Project 2</h4>
							<div class="card-body">
								<div class="img-slider">
									<img src="img/works/project/project2.webp" alt="">
									<div class="overlay d-flex align-items-center justify-content-center">
										<a class="btn btn-primary" href="#image-2">Lihat Project</a>
									</div>
								</div>
							</div>

							<div class="lb-overlay" id="image-2">
								<a href="#page" class="lb-close">X</a>
								<img src="img/works/project/project2.webp" alt="" />
								<div class="d-flex justify-content-center">
									<h3>Project 2</h3>
									<p>Project UI Dashboard</p>
								</div>

							</div>
						</div>
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
					<button class="btn btn-secondary rounded-circle ">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					</button>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
					<button class="btn btn-secondary rounded-circle ">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
					</button>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
	</section>

	<!-- spacer 2 -->
	<section id="spacer2" class="home-section spacer mt-5">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="color-light">
						<h2 class="wow bounceInDown" data-wow-delay="1s">World Class Cyber Company</h2>
						<p class="lead wow bounceInUp" data-wow-delay="2s">Come Join to Our Team</p>
						<?php
						if (isset($_SESSION['user'])) {
						?>
							<button type="button" class="btn btn-success btn-lg lead wow bounceInUp" data-wow-delay="1s">My Profile</button>
						<?php
						} else {
						?>
							<button type="button" class="btn btn-primary btn-lg lead wow bounceInUp" data-wow-delay="1s" data-toggle="modal" data-target="#myModalRegister">Register</button>
							<button type="button" class="btn btn-info btn-lg lead wow bounceInUp" data-wow-delay="1s" data-toggle="modal" data-target="#myModalLogin">Login</button>
						<?php
						}
						?>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Contact -->
	<section id="contact" class="home-section bg-white">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-8">
					<div class="section-heading">
						<h2>Hubungi Kami</h2>
						<p>Contact via form below and we will be get in touch with you within 24 hours. </p>
					</div>
				</div>
			</div>

			<div class="row justify-content-center">
				<div class="col-7">
					<form class="form-horizontal m-auto" role="form">
						<div class="form-group">
							<input type="text" class="form-control" id="inputName" placeholder="Name">
						</div>
						<div class="form-group">
							<input type="email" class="form-control" id="inputEmail" placeholder="Email">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" id="inputSubject" placeholder="Subject">
						</div>
						<div class="form-group">
							<textarea name="message" class="form-control" rows="3" placeholder="Message"></textarea>
						</div>
						<div class="form-group">
							<button type="button" class="btn btn-theme btn-lg btn-block">Send message</button>
						</div>
					</form>
				</div>
			</div>
			<div class="row justify-content-center mt-5">
				<div class="col-md-8">
					<h5>We're on social networks</h5>
					<ul class="social-network">
						<li><a href="#">
							<span class="fa-stack fa-2x">
								<i class="fa fa-circle fa-stack-2x"></i>
								<i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
							</span></a>
						</li>
						<li><a href="#">
							<span class="fa-stack fa-2x">
								<i class="fa fa-circle fa-stack-2x"></i>
								<i class="fa fa-dribbble fa-stack-1x fa-inverse"></i>
							</span></a>
						</li>
						<li><a href="#">
							<span class="fa-stack fa-2x">
								<i class="fa fa-circle fa-stack-2x"></i>
								<i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
							</span></a>
						</li>
						<li><a href="#">
							<span class="fa-stack fa-2x">
								<i class="fa fa-circle fa-stack-2x"></i>
								<i class="fa fa-pinterest fa-stack-1x fa-inverse"></i>
							</span></a>
						</li>
					</ul>
				</div>
			</div>

		</div>
	</section>

	<div class="modal fade" id="myModalLogin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h4 class="modal-title" id="myModalLabel">Login</h4>
				</div>
				<div class="modal-body">
					<form role="form" method="post" action="login_user.php">
						<div class="form-group">
							<input type="text" name="username" class="form-control input-lg" placeholder="Username" tabindex="1">
						</div>
						<div class="form-group">
							<input type="password" name="password" class="form-control input-lg" placeholder="Password" tabindex="1">
						</div>

				</div>
				<div class="modal-footer">
					<input type="submit" class="btn btn-primary" value="Login">
				</div>
				</form>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->

	<div class="modal fade" id="myModalRegister" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h4 class="modal-title" id="myModalLabel">Register</h4>
				</div>
				<div class="modal-body">
					<form role="form" method="post" action="register.php">
						<div class="form-group">
							<input type="text" name="nama_lengkap" class="form-control input-lg" placeholder="Nama Lengkap" tabindex="1">
						</div>
						<div class="form-group">
							<input type="email" name="email" class="form-control input-lg" placeholder="Email" tabindex="1">
						</div>
						<div class="form-group">
							<input type="text" name="username" class="form-control input-lg" placeholder="Username" tabindex="1">
						</div>
						<div class="form-group">
							<input type="password" name="password" class="form-control input-lg" placeholder="Password" tabindex="1">
						</div>
				</div>
				<div class="modal-footer">
					<input type="submit" class="btn btn-primary" value="Register">
				</div>
				</form>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->

	<div class="modal fade" id="myModalSyarat" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h4 class="modal-title" id="myModalLabel">Syarat Penerimaan</h4>
				</div>
				<div class="modal-body-syarat">
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
				</form>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<p>Copyright &copy;2014 Mamba company. All rights reserved. By <a href="http://bootstraptaste.com">Bootstrap Themes</a></p>
				</div>
				<!-- 
                    All links in the footer should remain intact. 
                    Licenseing information is available at: http://bootstraptaste.com/license/
                    You can buy this theme without footer links online at: http://bootstraptaste.com/buy/?theme=Mamba
                -->
			</div>
		</div>
	</footer>

	<!-- js -->
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.smooth-scroll.min.js"></script>
	<script src="js/jquery.dlmenu.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/custom.js"></script>

	<script>
		$(document).ready(function() {
			$('.scroll-page').click(function(e) {
				var tujuan = $(this).attr('href');
				var elemenTujuan = $(tujuan);

				$('html , body').animate({
					scrollTop: elemenTujuan.offset().top - 70
				}, 1250, 'swing');
				e.preventDefault();
			});

			$(document).on('click', '.show_rincian', function(e) {
				e.preventDefault();
				$("#myModalSyarat").modal('show');
				$.post('syarat_lamaran.php', {
						id: $(this).attr('data-id')
					},
					function(html) {
						$(".modal-body-syarat").html(html);
					}
				);
			});
		});
	</script>

</html>