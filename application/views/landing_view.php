<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Google sign in needs -->
	<meta name="google-signin-client_id" content="342542727629-fh57sa47vtueellcf7nee05f4rq00cjr.apps.googleusercontent.com">
	<title>Triplen | Rencanakan Perjalananmu</title>
	<meta name="description" content="">
	<script src="<?php echo base_url() ?>assets/front/themekit/scripts/jquery.min.js"></script>
	<script src="<?php echo base_url() ?>assets/front/themekit/scripts/main.js"></script>
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/front/themekit/css/bootstrap-grid.css">
	<script src="https://kit.fontawesome.com/509c6b244a.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/front/themekit/css/style.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/front/themekit/css/glide.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/front/themekit/css/magnific-popup.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/front/themekit/css/content-box.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/front/skin.css">
	<link rel="icon" href="<?php echo base_url() ?>assets/front/media/favicon.png">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.0/axios.min.js"></script>
	<script src="<?php echo base_url() ?>assets/js/constant.js"></script>
</head>

<body>
	<div id="preloader"></div>
	<nav class="menu-classic menu-fixed menu-transparent menu-one-page align-right" data-menu-anima="fade-bottom" data-scroll-detect="true">
		<div class="container">
			<div class="menu-brand">
				<a href="#">
					<img class="logo-default" src="<?php echo base_url() ?>assets/front/media/Dark.png" alt="logo" />
					<img class="logo-retina" src="<?php echo base_url() ?>assets/front/media/Dark.png" alt="logo" />
				</a>
			</div>
			<i class="menu-btn"></i>
			<div class="menu-cnt">
				<ul>
					<li>
						<a href="#overview">Apa itu Triplen?</a>
					</li>
					<li>
						<a href="#feature">Fitur</a>
					</li>
					<li>
						<a href="#try">Coba Sekarang</a>
					</li>
				</ul>
				<!-- <div class="menu-right">
					<div class="menu-custom-area">
						<a class="btn btn-xs btn-circle" href="#">Sign up</a>
					</div>
				</div> -->
				<div class="clear"></div>
			</div>
		</div>
	</nav>
	<main>
		<section class="section-base section-full-width-right">
			<div class="container">
				<hr class="space" />
				<div class="row">
					<div class="col-lg-6">
						<hr class="space-lg hidden-md" />
						<h1>
							Temukan pengalaman liburan dalam ponselmu
						</h1>
						<p>
							Butuh aplikasi untuk membuat <b>timeline liburanmu</b> jadi lebih baik? Tapi malas install aplikasi yang meberatkan ponsel?
							<b>Triplen</b> memberikanmu solusi tanpa harus memberatkan ponsel, hanya dengan sekali install melalui tombol yang disediakan!
						</p>
						<div class="btn" id="my-signin2"></div>
					</div>
					<div class="col-lg-6">
						<hr class="space visible-md" />
						<img class="width-min-835" src="<?php echo base_url() ?>assets/front/media/destination.png" alt="" />
					</div>
				</div>
			</div>
		</section>

		<section id="overview" class="section-base">
			<div class="container">
				<hr class="space-lg" />
				<h2 class="align-center width-650">"Triplen app membuat pengalaman liburanmu menjadi lebih seru dan menakjubkan."</h2>
				<hr class="space-lg" />
				<hr class="space" />
				<div class="row align-items-center">
					<div class="col-lg-6 col-md-6" data-anima="fade-left" data-time="1000">
						<h2>Buat aktivitas liburanmu<br /> sendiri dengan drag & drop</h2>
						<p>
							Dapatkan petunjuk melalui Google Maps menuju destinasimu dengan sekali klik.
							Drag destinasi untuk membuat prioritas dan menandai bahwa destinasi yang dituju telah tercapai!
						</p>
					</div>
					<div class="col-lg-6 col-md-6" data-anima="fade-right" data-time="1000">
						<img src="<?php echo base_url() ?>assets/front/media/task.png" alt="" />
					</div>
				</div>
			</div>
		</section>

		<section id="feature" class="section-base section-color">
			<div class="container">
				<h2 class="align-center align-left-sm">Pengalaman pengguna adalah segalanya bagi kami.</h2>
				<p class="width-650 align-center align-left-sm">
					Memberikan pengalaman pengguna yang dapat menunjang liburan kalian menjadi lebih efisien dan terstruktur.
				</p>
				<hr class="space" />
				<div class="grid-list gap-60" data-columns="3" data-columns-md="2" data-columns-sm="1">
					<div class="grid-box">
						<div class="grid-item">
							<div class="cnt-box cnt-box-side-icon">
								<i class="fas fa-layer-group"></i>
								<div class="caption">
									<h2>Multi Task</h2>
									<p>
										Lakukan multi task pada satu travel plan dengan mudah dan cepat.
									</p>
								</div>
							</div>
						</div>
						<div class="grid-item">
							<div class="cnt-box cnt-box-side-icon">
								<i class="fab fa-codepen"></i>
								<div class="caption">
									<h2>Painless Data</h2>
									<p>
										Ringan untuk di install karena menggunakan web cached yang terdapat di browser anda.
									</p>
								</div>
							</div>
						</div>
						<div class="grid-item">
							<div class="cnt-box cnt-box-side-icon">
								<i class="fas fa-clock"></i>
								<div class="caption">
									<h2>Realtime Updates</h2>
									<p>
										Dapatkan data realtime dari travel plan milikmu tanpa menunggu delay.
									</p>
								</div>
							</div>
						</div>
						<div class="grid-item">
							<div class="cnt-box cnt-box-side-icon">
								<i class="fab fa-chromecast"></i>
								<div class="caption">
									<h2>Free Trial Every Month</h2>
									<p>
										Dapatkan kesempatan 2 kali dalam sebulan untuk membuat travel plan.
									</p>
								</div>
							</div>
						</div>
						<div class="grid-item">
							<div class="cnt-box cnt-box-side-icon">
								<i class="fas fa-mobile"></i>
								<div class="caption">
									<h2>Lightweight App</h2>
									<p>
										Pasang Triplen app di ponselmu tanpa memakan space memori ponselmu.
									</p>
								</div>
							</div>
						</div>
						<div class="grid-item">
							<div class="cnt-box cnt-box-side-icon">
								<i class="fas fa-map-marked-alt"></i>
								<div class="caption">
									<h2>Dapatkan Petunjuk Jalan</h2>
									<p>
										Dapatkan petunjuk ke tujuanmu dengan menggunakan Google Maps yang ter-integrasi.
									</p>
								</div>
							</div>
						</div>
					</div>
					<!-- <div class="list-pagination">
						<ul class="pagination align-center" data-page-items="6" data-pagination-anima="fade-bottom">
						</ul>
					</div> -->
				</div>
			</div>
		</section>
		<section class="section-image align-center light" style="background-image:url('<?php echo base_url() ?>assets/front/media/bg.svg')">
			<div class="container">
				<h2>Dapatkan Triplen App Sekarang</h2>
				<p class="width-650">
					Dapatkan Triplen App secara gratis dengan melakukan registrasi, kemudian install melalui browsermu.
				</p>
				<hr class="space-sm">
				<div class="btn g-signin2" data-longtitle="true" data-height="50" data-width="250" data-theme="dark" data-onsuccess="onSuccess">
				</div>
		</section>


		<section id="try" class="section-base section-color">
			<div class="container">
				<h2 class="align-center">Cara mudah gunakan Triplen.</h2>
				<p class="align-center width-650">
					<b>Triplen</b> di desain agar mudah digunakan dimanapun, kapanpun, dan oleh siapapun tanpa menyulitkan pengguna.
				</p>
				<hr class="space" />
				<div class="box-steps">
					<div class="step-item">
						<span>1</span>
						<div class="content">
							<h3>Pasang Aplikasi Triplen</h3>
							<div>
								<p>
									Pasang aplikasi melalui popup yang muncul di browser kalian, tanpa harus install melalui playstore.
								</p>
							</div>
						</div>
					</div>
					<div class="step-item">
						<span>2</span>
						<div class="content">
							<h3>Buat Plan Pertamamu</h3>
							<div>
								<p>
									Buat plan liburanmu dengan sekali klik pada app Triplen, dan tambahkan destinasi atau todo yang ingin dilakukan.
								</p>
							</div>
						</div>
					</div>
					<div class="step-item">
						<span>3</span>
						<div class="content">
							<h3>Tandai Segala Aktifitasmu</h3>
							<div>
								<p>
									Tandai aktifitasmu ketika telah marked as done, set berapa banyak budget yang dikeluarkan di destinasi tersebut.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>
	<i class="scroll-top-btn scroll-top show"></i>
	<footer class="footer-parallax light">

		<div class="footer-bar">
			<div class="container">
				<span>Copyright 2019 Triplen. All right reserved.</span>
				<span><img src="<?php echo base_url() ?>assets/front/media/Light.png" alt="" /></span>
			</div>
		</div>


		<script src="<?php echo base_url() ?>assets/front/themekit/scripts/parallax.min.js"></script>
		<script src="<?php echo base_url() ?>assets/front/themekit/scripts/glide.min.js"></script>
		<script src="<?php echo base_url() ?>assets/front/themekit/scripts/magnific-popup.min.js"></script>
		<script src="<?php echo base_url() ?>assets/front/themekit/scripts/tab-accordion.js"></script>
		<script src="<?php echo base_url() ?>assets/front/themekit/scripts/imagesloaded.min.js"></script>
		<script src="<?php echo base_url() ?>assets/front/themekit/scripts/contact-form/contact-form.js"></script>
		<script src="<?php echo base_url() ?>assets/front/themekit/scripts/progress.js"></script>
		<script src="<?php echo base_url() ?>assets/front/themekit/scripts/pagination.min.js"></script>
		<script src="<?php echo base_url() ?>assets/front/themekit/scripts/social.min.js"></script>
		<script src="<?php echo base_url() ?>assets/front/media/custom.js"></script>

		<!-- Custom -->
		<script src="https://apis.google.com/js/platform.js?onload=renderButton" async defer></script>
	</footer>
</body>
<script>
	$('#googleLogin').click(function() {
		$('#goGoogle').click();
	});

	function renderButton() {
		gapi.signin2.render('my-signin2', {
			'scope': 'profile email',
			'width': 240,
			'height': 50,
			'longtitle': true,
			'theme': 'dark',
			'onsuccess': onSuccess,
		});
	}

	function onSuccess(googleUser) {
		var profile = googleUser.getBasicProfile();
		const regData = {
			id_google: profile.getId(),
			email: profile.getEmail(),
			name: profile.getName(),
			image: profile.getImageUrl()
		};
		axios.post(apiBaseURL + 'user/auth', regData)
			.then((res) => {
				if (res.data.data === null) {
					localStorage.setItem('regData', JSON.stringify(regData));
					window.location.href = appBaseURL + 'register';
				} else {
					window.location.href = appBaseURL + 'app';
				}
			});
	}
</script>

</html>
