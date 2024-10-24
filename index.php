<?php
define("ROOT", "./");

require_once "./utils/database.php";

$conn = getConnection();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="google-site-verification" content="5IEGzDvQMPCwPElo5rwsOVLnP0eJMJuD1Y1LrgKwPGQ" />
	<meta name="text" content="" />
	<meta name="author" content="" />
	<link rel="shortcut icon" href="favicons/fav.png" />
	<title>Thilina Rathnayaka</title>
	<link rel="stylesheet" type="text/css" href="css/css-bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="css/css-plugins.css" />
	<link rel="stylesheet" type="text/css" href="css/css-settings.css" />
	<link rel="stylesheet" type="text/css" href="css/css-layers.css" />
	<link rel="stylesheet" type="text/css" href="css/css-navigation.css" />
	<link rel="stylesheet" type="text/css" href="css/css-revolution.addon.filmstrip.css" />
	<link rel="stylesheet" type="text/css" href="css/css-typewriter.css" />
	<link rel="stylesheet" type="text/css" href="css/type-icons.css" />
	<link rel="stylesheet" type="text/css" href="css/brailie-style.css" />
	<link rel="stylesheet" type="text/css" href="css/color-aqua.css" />
	<link rel="stylesheet" type="text/css" href="css/font-font6.css" />
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link
		href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans+Condensed:300,300i,400,400i,500,500i,600,600i,700,700i"
		rel="stylesheet" />
	<link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" />
	<link rel="stylesheet" href="css/elegant-icons.css" type="text/css" />
	<link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css" />
	<link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />
	<link rel="stylesheet" href="css/slicknav.min.css" type="text/css" />
	<link rel="stylesheet" href="css/style.css" type="text/css" />
</head>

<body class="onepage" data-spy="scroll" data-target=".navbar">
	<div class="content-wrapper">
		<nav class="navbar transparent absolute nav-wrapper-dark inverse-text navbar-expand-lg text-uppercase">
			<div class="container">
				<div class="navbar-header">
					<div class="navbar-brand">
						<a href="index.html"><img src="images/brailie-#"
								srcset="style/images/logo-light.png 1x, style/images/logo-light@2x.png 2x" alt="" /></a>
					</div>
					<div class="navbar-hamburger ml-auto d-lg-none d-xl-none">
						<button class="hamburger animate" data-toggle="collapse" data-target=".navbar-collapse">
							<span></span>
						</button>
					</div>
				</div>
				<!-- /.navbar-header -->
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav ml-auto">
						<li class="nav-item"><a class="nav-link scroll" href="#home">Home</a></li>
						<li class="nav-item"><a class="nav-link scroll" href="#services">Services</a></li>
						<li class="nav-item"><a class="nav-link scroll" href="#portfolio">Portfolio</a></li>
						<li class="nav-item"><a class="nav-link scroll" href="#about">About</a></li>
						<li class="nav-item"><a class="nav-link scroll" href="#contact">Contact</a></li>
					</ul>
					<!-- /.navbar-nav -->
					<div class="navbar-divider"></div>
					<ul class="social social-mute social-s">
						<li>
							<a href="https://x.com/ThilinaR011"><i class="fa fa-twitter"></i></a>
						</li>
						<li>
							<a href="https://www.facebook.com/thilinarathnayakaofficial"><i
									class="fa fa-facebook-f"></i></a>
						</li>
						<li>
							<a href="https://www.youtube.com/@thilinarathnayakaofficial"><i
									class="fa fa-youtube"></i></a>
						</li>
						<li>
							<a href="https://www.linkedin.com/in/thilina-rathnayaka-pvt/"><i
									class="fa fa-linkedin"></i></a>
						</li>
						<li>
							<a href="https://www.instagram.com/thilina011/"><i class="fa fa-instagram"></i></a>
						</li>
					</ul>
				</div>
				<!-- /.navbar-collapse -->
			</div>
			<!-- /.container -->
		</nav>

		<!-- /.navbar -->
		<section id="home" class="pt-0 mt-0">
			<div class="rev_slider_wrapper fullscreen-container">
				<div id="slider3" class="rev_slider fullscreenbanner light-spinner" data-version="5.4.8">
					<ul>
						<li data-transition="fade" data-fstransition="fade">
							<img src="images/images-dummy.png" alt="" />
							<div class="tp-caption font-weight-600 color-white text-uppercase text-center"
								data-x="center" data-y="middle" data-voffset="['-80','-80','-80','-80']"
								data-fontsize="['55','55','45','30']" data-lineheight="['65','65','55','40']"
								data-width="['1000','1000','700','450']"
								data-textalign="['center','center','center','center']"
								data-whitespace="['normal','normal','normal','normal']"
								data-frames='[{"from":"x:-50px;opacity:0;","speed":1000,"to":"o:1;","delay":1000,"ease":"Power2.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"}]'
								data-responsive="on" data-responsive_offset="on"
								style="z-index: 9; letter-spacing: 1px">
								Thilina Rathnayaka
							</div>
							<div class="tp-caption font-weight-400 color-white text-center" data-x="center"
								data-y="middle" data-voffset="['0','0','0','0']" data-fontsize="['28','28','22','20']"
								data-lineheight="['38','38,'32','30']" data-width="['1000','1000','700','450']"
								data-textalign="['center','center','center','center']"
								data-whitespace="['normal','normal','normal','normal']"
								data-frames='[{"from":"x:50px;opacity:0;","speed":1000,"to":"o:1;","delay":1500,"ease":"Power2.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"}]'
								data-responsive="on" data-responsive_offset="on" style="z-index: 9">
								Young Entrepreneur | Photographer | Content Creator
							</div>
							<a class="tp-caption btn btn-full-rounded btn-l btn-white scroll" data-x="center"
								data-y="middle" data-voffset="['85','85','85','85']"
								data-width="['auto','auto','auto','auto']"
								data-textalign="['center','center','center','center']"
								data-frames='[{"delay":1700,"speed":1200,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
								data-startslide="0" data-endslide="3" data-responsive="on" data-responsive_offset="on"
								style="z-index: 9" href="#portfolio">See My Portfolio</a>
						</li>
						<a class="tp-caption btn btn-full-rounded btn-l btn-white scroll" data-x="center"
							data-y="middle" data-voffset="['85','85','85','85']"
							data-width="['auto','auto','auto','auto']"
							data-textalign="['center','center','center','center']"
							data-frames='[{"delay":1700,"speed":1200,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
							data-startslide="0" data-endslide="3" data-responsive="on" data-responsive_offset="on"
							style="z-index: 9" href="#portfolio">See My Portfolio</a>
					</ul>
					<div class="tp-bannertimer tp-bottom"></div>
				</div>
				<!-- /.rev_slider -->
			</div>
			<!-- /.rev_slider_wrapper -->
		</section>

		<!-- /section -->
		<section id="services">
			<div class="wrapper inverse-text">
				<div class="container inner pt-60 pb-140">
					<h2 class="section-title section-title-upper text-center">My Specialties</h2>
					<p class="lead2 text-center">
						I would like to give you a unique photography experience, built to serve you best and<br />
						capture your special moments for you and your families creatively and beautifully
					</p>
					<div class="space20"></div>
					<div class="tiles">
						<div class="items row">
							<div class="item col-4">
								<figure class="overlay-info"><img src="images/ico/46.png" alt="" /></figure>

								<div class="d-flex">
									<h6 class="align-self-center mx-auto">Photography</h6>
								</div>
							</div>
							<!--/.item -->
							<div class="item col-4">
								<figure class="overlay-info" id="ico"><img src="images/ico/47.png" alt="" /></figure>
								<div class="d-flex">
									<h6 class="align-self-center mx-auto">Videography</h6>
								</div>
							</div>
							<!--/.item -->
							<div class="item col-4">
								<figure class="overlay-info"><img src="images/ico/45.png" alt="" /></figure>
								<div class="d-flex">
									<h6 class="align-self-center mx-auto">Content Creating</h6>
								</div>
							</div>
							<!--/.item -->
						</div>
						<!--/.row -->
					</div>
					<!-- /.tiles -->
				</div>
				<!-- /.container -->
			</div>
			<!-- /.wrapper -->
		</section>

		<!-- /section -->
		<section id="portfolio">
			<div class="wrapper inverse-text">
				<div class="container inner pt-60 pb-140">
					<h2 class="section-title section-title-upper text-center">Selected Shots</h2>
					<div id="cube-grid" class="cbp light-gallery" style="padding-top: 20px">
						<?php
						$sql = "SELECT * FROM shots WHERE visibility = 'visible'";
						$result = $conn->query($sql);

						while ($row = $result->fetch_assoc()) {
							?>
							<div class="cbp-item interior video">
								<figure class="overlay overlay2">
									<a href="images/2.jpg"><img src="<?php echo './uploads/' . $row['path']; ?>"
											alt="" /></a>
								</figure>
							</div>
							<?php
						}
						?>
					</div>
					<div style="margin-top: 10%" class="text-center">
						<a href="./gallery/gallery.html" class="btn btn-full-rounded scroll">See More</a>
					</div>
					<!--/.cbp -->
				</div>
				<!-- /.container -->
			</div>
			<!-- /.wrapper -->
		</section>

		<!-- /section -->
		<section id="about">
			<div class="wrapper inverse-text">
				<div class="container inner pt-60 pb-140">
					<h2 class="section-title section-title-upper mb-40 text-center">About Me</h2>
					<div class="row gutter-60">
						<div class="col-lg-5 order-lg-2 text-md-center me-image">
							<figure><img src="images/me.jpg" alt="" /></figure>
						</div>
						<!-- /column -->
						<div class="space30 d-lg-none d-xl-none"></div>
						<div class="col-lg-7">
							<p class="lead larger">
								Hello! I'm Thilina Rathnayaka, an Entrepreneur, Photographer &amp; Content Creator. I am
								very
								passionate about photography and it becomes quite obvious in the way I create portraits.
							</p>
							<p>
								I'm an undergraduate student in Mineral Resources and Technology at Uva Wellassa
								University,
								blending my passion for minerals and technology with creative pursuits. I explore the
								intersection of earth's resources and innovation while expressing my love for visual
								storytelling. As a digital content creator, I craft engaging multimedia experiences,
								bringing
								stories to life through video and photography. I capture moments through the lens and
								transform them into lasting memories, focusing on seamless narratives and meticulous
								editing
								to evoke emotions in each visual project.
							</p>
						</div>
						<!-- /column -->
					</div>
					<!-- /.row -->
					<div class="space50"></div>
					<div class="row">
						<div class="col-md-4">
							<h4 class="text-uppercase">What is My Process?</h4>
							<p>
								I begin with concept development, carefully plan each shot, and meticulously edit to
								create
								compelling stories that resonate.
							</p>
							<ol>
								<li>I research and plan for audience impact.</li>
								<li>I carefully plan shots for maximum effect.</li>
								<li>Editing refines everything with precise cuts and transitions.</li>
							</ol>
						</div>
						<!-- /column -->
						<div class="col-md-4">
							<h4 class="text-uppercase">Why Choose Me?</h4>
							<p>
								I combine technical expertise with creative storytelling to capture emotional, impactful
								moments.
							</p>
							<ul class="unordered-list list-default">
								<li>I have a talent for visual storytelling.</li>
								<li>My projects are crafted with precision to evoke emotions.</li>
								<li>I'm detail-oriented, ensuring top quality in every phase.</li>
							</ul>
						</div>
						<!-- /column -->
						<div class="col-md-4">
							<h4 class="text-uppercase">My Skills</h4>
							<ul class="progress-list">
								<li>
									<p>Photography</p>
									<div class="progressbar line border default" data-value="80"></div>
								</li>
								<li>
									<p>Videography</p>
									<div class="progressbar line border default" data-value="70"></div>
								</li>
								<li>
									<p>Premiere Pro</p>
									<div class="progressbar line border default" data-value="90"></div>
								</li>
								<li>
									<p>Photoshop</p>
									<div class="progressbar line border default" data-value="85"></div>
								</li>
							</ul>
							<!-- /.progress-list -->
						</div>
						<!-- /column -->
					</div>
					<!-- /.row -->
					<div class="space20"></div>
					<div class="text-center"><a href="#contact" class="btn btn-full-rounded scroll">Get in Touch</a>
					</div>
				</div>
				<!-- /.container -->
			</div>
			<!-- /.wrapper -->
		</section>

		<!-- /section -->
		<section id="contact">
			<div class="wrapper inverse-text">
				<div class="container inner pt-60 pb-140">
					<div class="row">
						<div class="col-lg-8 offset-lg-2">
							<h2 class="section-title section-title-upper mb-40 text-center">Get in Touch</h2>
							<p class="lead2 text-center">Reach out to collaborate and bring your vision to life!</p>
							<div class="space20"></div>
							<div class="row text-center">
								<div class="col-md-4">
									<span class="icon icon-color color-white fs-48 mb-10"><i
											class="si-camping_map"></i></span>
									<p>
										Anuradhapura<br />
										14/05 New Town, Anuradhapura
									</p>
								</div>
								<!--/column -->
								<div class="col-md-4">
									<span class="icon icon-color color-white fs-48 mb-10"><i
											class="si-phone_phone-ringing"></i></span>
									<p>
										(+94) 71 9853690<br />
										(+94) 77 2902251
									</p>
								</div>
								<!--/column -->
								<div class="col-md-4">
									<span class="icon icon-color color-white fs-48 mb-10"><i
											class="si-mail_mail-2"></i></span>
									<p>
										<a class="nocolor" href="/cdn-cgi/l/email-protection#7556"><span
												class="__cf_email__"
												data-cfemail="a7cac6c9c6c0c2d5e7c2cac6cecb89c4c8ca">[email&nbsp;protected]</span></a><br />
										<a class="nocolor" href="/cdn-cgi/l/email-protection#f9da"><span
												class="__cf_email__"
												data-cfemail="3352405a4047525d4773565e525a5f1d505c5e">[email&nbsp;protected]</span></a>
									</p>
								</div>
								<!--/column -->
							</div>
							<!--/.row -->
							<div class="space30"></div>
							<div class="form-container">
								<form action="contact/vanilla-form.php" method="post" class="vanilla vanilla-form"
									novalidate>
									<div class="row text-center">
										<div class="col-md-6 pr-10">
											<div class="form-group">
												<input type="text" class="form-control" name="name"
													placeholder="Your name" required="required" />
											</div>
											<!--/.form-group -->
										</div>
										<!--/column -->
										<div class="col-md-6 pl-10">
											<div class="form-group">
												<input type="email" class="form-control" name="email"
													placeholder="Your e-mail" required="required" />
											</div>
											<!--/.form-group -->
										</div>
										<!--/column -->
										<div class="col-md-6 pr-10">
											<div class="form-group">
												<input type="tel" class="form-control" name="tel" placeholder="Phone" />
											</div>
											<!--/.form-group -->
										</div>
										<!--/column -->
										<div class="col-md-6 pl-10">
											<div class="form-group">
												<input type="text" class="form-control" name="subject"
													placeholder="Subject" />
											</div>
											<!--/.form-group -->
										</div>
										<!--/column -->
										<div class="col-12">
											<textarea name="message" class="form-control" rows="3"
												placeholder="Type your message here..." required></textarea>
											<div class="space20"></div>
											<button type="submit" class="btn btn-full-rounded" data-error="Fix errors"
												data-processing="Sending..." data-success="Thank you!">
												Submit
											</button>
											<footer class="notification-box"></footer>
										</div>
										<!--/column -->
									</div>
									<!--/.row -->
								</form>
								<!--/.vanilla-form -->
							</div>
							<!--/.form-container -->
						</div>
						<!-- /column -->
					</div>
					<!-- /.row -->
				</div>
				<!-- /.container -->
			</div>
			<!-- /.wrapper -->
		</section>

		<!-- /section -->
		<footer class="inverse-text">
			<div class="sub-footer">
				<div class="container inner text-center">
					<img src="images/brailie-#"
						srcset="style/images/logo-light.png 1x, style/images/logo-light@2x.png 2x" alt="" />
					<div class="space25"></div>
					<p>&copy; 2024 Thilina Rathnayaka. All rights reserved.</p>
					<div class="space30"></div>
					<ul class="social social-bg social-s">
						<li>
							<a href="https://x.com/ThilinaR011"><i class="fa fa-twitter"></i></a>
						</li>
						<li>
							<a href="https://www.facebook.com/thilinarathnayakaofficial"><i
									class="fa fa-facebook-f"></i></a>
						</li>
						<li>
							<a href="https://www.youtube.com/@thilinarathnayakaofficial"><i
									class="fa fa-youtube"></i></a>
						</li>
						<li>
							<a href="https://www.linkedin.com/in/thilina-rathnayaka-pvt/"><i
									class="fa fa-linkedin"></i></a>
						</li>
						<li>
							<a href="https://www.instagram.com/thilina011/"><i class="fa fa-instagram"></i></a>
						</li>
					</ul>
				</div>
				<!-- /.container -->
			</div>
			<!--     <div style="padding-left: 20px; padding-bottom: 10px;">
	  <a href="./admin/signin.html"><button class="btn btn-full-rounded">Admin</button></a>
	</div> -->
			<!-- /.sub-footer -->
		</footer>
	</div>
	<!-- /.content-wrapper -->

	<script data-cfasync="false" src="js/cloudflare-static-email-decode.min.js"></script>
	<script src="js/js-jquery.min.js"></script>
	<script src="js/myjs.js"></script>
	<script src="js/js-popper.min.js"></script>
	<script src="js/js-bootstrap.min.js"></script>
	<script src="js/js-jquery.themepunch.tools.min.js"></script>
	<script src="js/js-jquery.themepunch.revolution.min.js"></script>
	<script src="js/js-revolution.addon.filmstrip.min.js"></script>
	<script src="js/js-revolution.addon.typewriter.min.js"></script>
	<script src="js/extensions-revolution.extension.actions.min.js"></script>
	<script src="js/extensions-revolution.extension.carousel.min.js"></script>
	<script src="js/extensions-revolution.extension.kenburn.min.js"></script>
	<script src="js/extensions-revolution.extension.layeranimation.min.js"></script>
	<script src="js/extensions-revolution.extension.migration.min.js"></script>
	<script src="js/extensions-revolution.extension.navigation.min.js"></script>
	<script src="js/extensions-revolution.extension.parallax.min.js"></script>
	<script src="js/extensions-revolution.extension.slideanims.min.js"></script>
	<script src="js/extensions-revolution.extension.video.min.js"></script>
	<script src="js/js-plugins.js"></script>
	<script src="js/js-scripts.js"></script>
	<script>
		$.backstretch(["images/bg.jpg"], { duration: 5000, fade: 1000 });
	</script>
</body>

</html>