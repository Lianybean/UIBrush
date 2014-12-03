<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $page_title; ?></title>

	<!-- CSS links -->
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/main.css">

	<!-- Font links -->
	<link href='http://fonts.googleapis.com/css?family=Ubuntu:400,500' rel='stylesheet' type='text/css'>

	<!-- Slider links -->
	<!-- Important Owl stylesheet -->
	<link rel="stylesheet" href="plugins/owl-carousel/owl-carousel/owl.carousel.css">
	 
	<!-- Default Theme -->
	<link rel="stylesheet" href="plugins/owl-carousel/owl-carousel/owl.theme.css">
	 
	<!--  jQuery 1.7+  -->
	<script src="plugins/owl-carousel/assets/js/jquery-1.9.1.min.js"></script>
	<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	 
	<!-- Include js plugin -->
	<script src="plugins/owl-carousel/owl-carousel/owl.carousel.js"></script>

	<!-- Font awesome -->
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

	<!-- Viewport -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

	<div class="container">
		<div id="navbutton"><i class="fa fa-bars fa-2x"></i></div>
		<h1 class="logo"><a href="index.php"><span class="color-accent">UI</span>Brush</a></h1>
		<nav>
			<ul>
				<li><a <?php if($page_title == "UIBrush | Home" ) {echo 'class="active"';} ?> href="index.php">home</a></li>
				<li><a <?php if($page_title == "UIBrush | About Us" ) {echo 'class="active"';} ?> href="about.php">about us</a></li>
				<li><a href="">services</a></li>
				<li><a <?php if($page_title == "UIBrush | Portfolio" ) {echo 'class="active"';} ?> href="portfolio.php">portfolio</a></li>
				<li><a href="">contact us</a></li>
			</ul>
		</nav>
	</div>