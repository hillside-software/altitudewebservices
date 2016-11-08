<?php
if (isset($_POST['send'])) {
  $to = 'info@altitudewebservices.com';
  $subject = 'New Inquiry';
  $message = 'Name: ' . $_POST['name'] . "r\n\r\n";
  $message = 'Company: ' . $_POST['company'] . "r\n\r\n";
  $message = 'Email: ' . $_POST['email'] . "r\n\r\n";
  $message = 'Phone: ' . $_POST['phone'] . "r\n\r\n";
  $message = 'Message: ' . $_POST['message'];
}
$success = mail($to, $subject, $message, $headers);
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Custom Services | Altitude Web Services</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Altitude Web Services Web Design and Development Custom Services">
	<meta name="author" content="Altitude Web Services">
	<!-- CSS -->
	<link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/main.css" rel="stylesheet" type="text/css">
	<link href="assets/css/my-custom-styles.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="assets/css/pricing-tables.css"> <!-- Resource style -->
	<script src="assets/js/plugins/animated-signup/modernizr.js"></script> <!-- Modernizr -->
	
	<!-- IE 9 Fallback-->
	<!--[if IE 9]>
		<link href="assets/css/ie.css" rel="stylesheet">
	<![endif]-->
	<!-- GOOGLE FONTS -->
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400italic,400,600,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300italic,400italic,700,400,300' rel='stylesheet' type='text/css'>
	<!-- FAVICONS -->
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/aws144x144.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/aws114x114.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/aws72x72.png">
	<link rel="apple-touch-icon-precomposed" href="assets/ico/aws57x57.png">
	<link rel="shortcut icon" href="assets/ico/favicon.png">
</head>

<body>
	<!-- WRAPPER -->
	<div class="wrapper">
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav">
						<span class="sr-only">Toggle Navigation</span>
						<i class="fa fa-bars"></i>
					</button>
					<a href="index.html" class="navbar-brand navbar-logo">
						<img src="assets/img/logo/Altitude Web Services Logo Transparent.png" alt="Altitude Web Services - Custom Affordable Web Design and Development">
					</a>
				</div>
				<!-- MAIN NAVIGATION -->
				<div id="main-nav" class="navbar-collapse collapse navbar-mega-menu">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="service-menu.html">Service Menu</a></li>
						<li><a href="custom-services.html" class="active">Custom Services</a></li>
						<li><a href="about.html">About Us</a></li>
						<li><a href="contact.html">Contact</a></li>
            <li><a href="blog.html">Blog</a></li>
					</ul>
				</div>
				<!-- END MAIN NAVIGATION -->
			</div>
		</nav>
		<!-- END NAVBAR -->
		<!-- PAGE CONTENT -->
		<div class="page-content">
			<div class="container">
        <div class="row pt-75">
          <h1>Confirmation</h1>
          <hr></hr>
        </div>
				<!-- CONFIRMATION -->
        <div class="row">
          $success = mail($to, $subject, $message, $headers);
          <h1>Thank you!</h1>
          <p>An Altitude Web Services Representative will be in touch shortly.</p>
          <h1>Oops!</h1>
          <p>It looks like there was a problem sending your form. Please try again or call us at (720) 399-7330. We apologize about the inconvenience.</p>
        </div>
        <!-- END CONFIRMATION -->
			</div>
		</div>
		<!-- END PAGE CONTENT -->
		<!-- FOOTER -->
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<!-- COLUMN 1 -->
						<h3 class="sr-only">ABOUT US</h3>
						<img src="assets/img/logo/Altitude Web Services Logo Transparent White.png" class="logo" alt="Altitude Web Services">
						<p>Altitude Web Services - based out of Denver, CO - provides quality, custom web design and web development services at an affordable cost, thanks to our core services menu.</p>
						<!-- END COLUMN 1 -->
					</div>
					<div class="col-md-4">
						<!-- COLUMN 2 -->
						<h3 class="footer-heading">USEFUL LINKS</h3>
						<div class="row margin-bottom-30px">
							<div class="col-xs-6">
								<ul class="list-unstyled footer-nav">
									<li><a href="index.html">Home</a></li>
                  <li><a href="service-menu.html">Service Menu</a></li>
									<li><a href="custom-services.html">Custom Services</a></li>
								</ul>
							</div>
							<div class="col-xs-6">
								<ul class="list-unstyled footer-nav">
									<li><a href="about.html">About</a></li>
                  <li><a href="contact.html">Contact</a></li>
                  <li><a href="blog.html">Blog</a></li>
								</ul>
							</div>
						</div>
						<!-- END COLUMN 2 -->
					</div>
					<div class="col-md-4">
						<!-- COLUMN 3 -->
						<div class="social-connect">
							<h3 class="footer-heading">CONNECT WITH US</h3>
							<ul class="list-inline social-icons">
								<li><a href="https://www.facebook.com/altitudewebservices/" target="_blank" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>
								<li><a href="https://twitter.com/web_altitude" target="_blank" class="twitter-bg"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#" class="rss-bg"><i class="fa fa-rss"></i></a></li>
							</ul>
						</div>
						<!-- END COLUMN 3 -->
					</div>
				</div>
			</div>
			<!-- COPYRIGHT -->
			<div class="text-center copyright">
				&copy;2016 Altitude Web Services. All Rights Reserved.
			</div>
			<!-- END COPYRIGHT -->
		</footer>
		<!-- END FOOTER -->
	</div>
	<!-- END WRAPPER -->
	<!-- JAVASCRIPTS -->
	<script src="assets/js/jquery-2.1.1.min.js"></script>
	<script src="assets/js/plugins/scrollto/jquery.localscroll-1.2.7.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/plugins/autohidingnavbar/jquery.bootstrap-autohidingnavbar.min.js"></script>
	<script src="assets/js/repute-scripts.js"></script>
	<script src="assets/js/plugins/animated-signup/velocity.min.js"></script>
	<script src="assets/js/plugins/animated-signup/main.js"></script> <!-- Resource jQuery -->

</body>

</html>
