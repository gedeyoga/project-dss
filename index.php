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
	
	<!-- Navbar -->
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
					<a class="nav-link scroll-page" href="#about">Tentang</a>
				</li>
				<li class="nav-item">
					<a class="nav-link scroll-page" href="#penerimaan">Penerimaan</a>
				</li>
				<li class="nav-item">
					<a class="nav-link scroll-page" href="#projectkami">Projek Kami</a>
				</li>
				<li class="nav-item">
					<a class="nav-link scroll-page" href="#contact">Kontak</a>
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
								<button type="button" class="btn btn-secondarry btn-lg">Profile Saya</button>
							<?php
							} else {
							?>
								<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModalRegister">Daftar</button>
								<button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModalLogin">Login</button>
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
					<h2 class="my-5">Tentang Kita</h2>
					<div class="row lead wow fadeInDown" data-wow-delay="1">
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
						<h2 class="wow fadeInDown" data-wow-delay="1s">Mitra Kerja dan Kepemimpinan</h2>
						<p class="lead wow fadeInUp" data-wow-delay="1.5s">Selalu Melakukan Yang Terbaik Untuk Masa Depan</p>
						<?php
						if (isset($_SESSION['user'])) {
						?>
							<button type="button" class="btn btn-info btn-lg lead wow fadeInUp" data-wow-delay="1s">Profile Saya</button>
						<?php
						} else {
						?>
							<button type="button" class="btn btn-primary btn-lg lead wow fadeInUp" data-wow-delay="1s" data-toggle="modal" data-target="#myModalRegister">Register</button>
							<button type="button" class="btn btn-success btn-lg lead wow fadeInUp" data-wow-delay="1s" data-toggle="modal" data-target="#myModalLogin">Login</button>
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

	<!-- Galeri -->
	<section id="projectkami"class="project-section py-5">
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
						<h2 class="wow fadeInDown" data-wow-delay="1s">Perusahaan Cyber Kelas Dunia</h2>
						<p class="lead wow fadeInUp" data-wow-delay="2s">Bergabunglah Berasama Kita</p>
						<?php
						if (isset($_SESSION['user'])) {
						?>
							<button type="button" class="btn btn-secondary btn-lg lead wow fadeInUp" data-wow-delay="1s">My Profile</button>
						<?php
						} else {
						?>
							<button type="button" class="btn btn-primary btn-lg lead wow fadeInUp" data-wow-delay="1s" data-toggle="modal" data-target="#myModalRegister">Register</button>
							<button type="button" class="btn btn-success btn-lg lead wow fadeInUp" data-wow-delay="1s" data-toggle="modal" data-target="#myModalLogin">Login</button>
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
						<p>Hubungi kami melalui form dibawah, kami akan membalas dalam 24 jam. </p>
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
							<button type="button" class="btn btn-theme btn-lg btn-block">Kirim pesan</button>
						</div>
					</form>
				</div>
			</div>
			<div class="row justify-content-center mt-5">
				<div class="col-md-8">
					<h5>Media sosial kami</h5>
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
						<li><a href="https://www.youtube.com/watch?v=iik25wqIuFo">
							<span class="fa-stack fa-2x">
								<i class="fa fa-circle fa-stack-2x"></i>
								<i class="fa fa-youtube fa-stack-1x fa-inverse"></i>
							</span></a>
						</li>
					</ul>
				</div>
			</div>

		</div>
	</section>

	<!-- Modal Login -->
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

	<!-- Modal Daftar -->
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

	<!-- Modal Syarat -->
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

	<!-- Footer -->
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<p>Copyright &copy;2022 Kuvukiland Company. All rights reserved.</p>
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