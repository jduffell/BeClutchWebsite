<!doctype html>

<html>

	<head>

		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>

		<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

		<link rel="stylesheet" href="font/font-awesome/css/font-awesome.min.css">
		
		<script src="https://kit.fontawesome.com/a1ba7e80e8.js" crossorigin="anonymous"></script>

		<link href="https://fonts.googleapis.com/css?family=Arima+Madurai" rel="stylesheet">

		<link rel="stylesheet" href="/css/style.css">


		<!-- Javascript / JQuery -->

		<script src="/js/jquery-3.1.1.min.js"></script>

		<script src="/js/main.js"></script>


		<!-- Jquery Modal -->

		<link rel="stylesheet" href="/js/modal/jquery.modal.min.css">

		<script src="/js/modal/jquery.modal.min.js"></script>


		<!-- Fav icon -->

		<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">

		<link rel="icon" href="/favicon.ico" type="image/x-icon">

		<!-- SEO -->

		<meta property="og:url" content="http://beclutch.club/">

		<meta property="og:image" content="http://sierralingo.twdesign.se/img/facebook-og.png">

		<meta property="og:title" content="BeClutch">

		<meta property="og:description" content="BeClutch was designed with the sole purpose of providing a platform for businesses, clubs and teams to communicate and meet all the needs of a group of any size.">

		<meta name="description" content="BeClutch was designed with the sole purpose of providing a platform for businesses, clubs and teams to communicate and meet all the needs of a group of any size."/>

		<title><?php echo $template_title?></title>

	</head>

	<body>

		<div id="scroll-top-button">

			<i class="fa fa-arrow-circle-up" aria-hidden="true"></i>

		</div>

		<div id="header">

			<div id="header-inner">

				<a class="header-logo" href="/"></a>

				<div id="header-menu">

					<a href="/">Home</a>

					<a href="/#features">Features</a>

					<a href="/#app">App</a>

					<a href="/#contact">Contact</a>

                    <a href="/support">Support</a>

				</div>

			</div>

		</div>


		<div id="header-responsive">

			<div>Menu</div>

			<side>

				<a href="/">Home</a>
				
				<a href="/#features">Features</a>				

				<a href="/#app">App</a>

				<a href="/#contact">Contact</a>

                <a href="/support">Support</a>

			</side>

		</div>
		
		

		<div id="main">

			<?php echo $template_content?>

		</div>

		<div id="footer">

			<div id="footer-inner">Copyright © 2024 BeClutch.club<br>All Rights Reserved</div>

		</div>

	</body>

</html>