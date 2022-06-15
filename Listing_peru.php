<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
		<title>Travel</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
		<link rel="stylesheet" href="assets/css/main.css">
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
<body class="landing is-preload">

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<header id="header">
						<h1><a href="index.html">Travel</a></h1>
						<nav id="nav">
							<ul>
								<li class="special">
									<a href="#menu" class="menuToggle"><span>Menu</span></a>
									<div id="menu">
										<ul>
											<li><a href="index.html">Home</a></li>
											<li><a href="register/index.html">Sign Up</a></li>
											<li><a href="Login_v2/index.html">Log In</a></li>
										</ul>
									</div>
								</li>
							</ul>
						</nav>
					</header>

				<!-- Main -->
					<article id="main">
						<header style="background-image: url('images/peru2.jpg');">
							<h2>Peru</h2>
							<p>Sacred Land of the Incas</p>
						</header>
						<section class="wrapper style5">
							<div class="inner">
							<section>
							<h5>Jacek Siwicki</h5>
									<blockquote>Our action-packed tour of Peru's most emblematic sights! Visit the incredible ruins of Machu Picchu, discover the vibrant food scene of Lima, explore Cuzco and uncover the secrets of the Sacred Valley.</blockquote>
							<h4>Perks</h4>
									<div class="row">
										<div class="col-6 col-12-medium">
											<h5>Trip Highlights</h5>
											<ul>
												<li>Cuzco</li>
												<li>Lima</li>
												<li>Machu Picchu</li>
												<li>Sacred Valley</li>
											</ul>

										</div>
										<div class="col-6 col-12-medium">
											<h5>Included</h5>
											<ul>
												<li>All flights</li>
												<li>Accomodation</li>
												<li>All transfers</li>
												<li>Activities</li>
												<li>All meals(Except breakfasts)</li>
											</ul>
										</div>
									<h4>Form</h4>
									<form method="post" action="booking.php">
										<div class="row gtr-uniform">
											<div class="col-6 col-12-xsmall">
												<input type="text" name="name" value="" placeholder="Name" />
											</div>
											<div class="col-6 col-12-xsmall">
												<input type="text" name="surname" id="demo-email" value="" placeholder="Surname" />
											</div>
											<div class="col-6 col-12-xsmall">
												<input type="email" name="email" id="demo-email" value="" placeholder="Email" />
											</div>											
											<div class="col-6 col-12-xsmall">
												<input type="date" name="trip" id="demo-email" value="2022-09-21" min="2022-12-12" max="2025-12-31" placeholder="Departure Date" />
											</div>
											<div class="col-12">
												<select name="package" id="demo-category">
													<option value="1">Normal</option>
													<option value="1">Business</option>
												</select>
											</div>
											<label for="demo-priority-normal">Priority:</label>

											<div class="col-4 col-12-small">
												<input type="radio" id="demo-priority-normal" name="priority" checked>
												<label for="demo-priority-normal">Normal</label>
											</div>
											<div class="col-4 col-12-small">
												<input type="radio" id="demo-priority-high" name="priority">
												<label for="demo-priority-high">High</label>
											</div>
											<div class="col-12">
												<textarea name="message" id="demo-message" placeholder="Enter your message regarding the trip and we will take it to consideration" rows="6"></textarea>
											</div>
											<div class="col-12">
												<ul class="actions">
													<li><input type="submit" value="Checkout" class="primary" /></li>
													<li><input type="reset" value="Reset" /></li>
												</ul>
											</div>
										</div>
									</form>
								</section>
							</div>
						</section>
					</article>

				<!-- Footer -->
					<footer id="footer">
						<ul class="icons">
							<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="#" class="icon brands fa-dribbble"><span class="label">Dribbble</span></a></li>
							<li><a href="#" class="icon solid fa-envelope"><span class="label">Email</span></a></li>
						</ul>
						<ul class="copyright">
							<li>© Jacek Siwicki</li><li>Design: <a href="https://bitbucket.org/verymadjack/">Jacek Siwicki</a></li>
						</ul>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script><div id="menu">
										<ul>
											<li><a href="index.html" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Home</a></li>
											<li><a href="#" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Sign Up</a></li>
											<li><a href="#" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Log In</a></li>
										</ul>
									<a href="#menu" class="close" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></a></div>

	
</body>
</html>