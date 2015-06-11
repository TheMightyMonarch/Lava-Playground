<?php
echo '
<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	
	<title>Lava Playground</title>
	<meta name="description" content="">
	
	<!-- Mobile viewport optimized: h5bp.com/viewport -->
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	
	<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
	<meta content="utf-8" http-equiv="encoding">
	
	<link rel="stylesheet" media="screen" href="css/superfish.css" /> 
	<link rel="stylesheet" href="css/nivo-slider.css" media="all"  /> 
	<link rel="stylesheet" href="css/tweet.css" media="all"  />
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" media="all" href="css/lessframework.css"/>
	<link rel="icon" 
      type="image/png" 
      href="img/img-home/flavecon.png">
	
	<!-- All JavaScript at the bottom, except this Modernizr build.
	   Modernizr enables HTML5 elements & feature detects for optimal performance.
	   Create your own custom Modernizr build: www.modernizr.com/download/ -->
	<script src="js/modernizr-2.5.3.min.js"></script>
	
</head>

<header>
		
		<!-- header wrapper -->
		<div class="wrapper cf">
			<div id="logo">
				<a href="index.php" ><img src="img/lavalogomid.png" ></a>
			</div>
		</div><!-- ENDS header wrapper -->
		
		
		
		<!-- nav -->
		<nav class="cf">
			<div class="wrapper cf">
				<ul id="nav" class="sf-menu">
					<li><a href="index.php">HOME<i><b></b></i></a></li>
					<li><a href="podcasts/bedtimestory/podcast-bedtimestory.php">podcasts<i><b></b></i></a>
						<ul>
							<li><a href="podcasts/bedtimestory/podcast-bedtimestory.php">Bed Time Story</a></li> <!--
							<li><a href="podcasts/bedtimestory/podcast-bedtimestory.php">Sam Squared Power Hour</a></li>
							<li><a href="podcasts/bedtimestory/podcast-bedtimestory.php">I Want to Play THat</a></li> -->
						</ul>
					</li>
					<li><a href="blogs/seventh-valkyrie/blog-seventhvalkyrie.php">BLOGS<i><b></b></i></a>
						<ul>
							<li><a href="blogs/seventh-valkyrie/blog-seventhvalkyrie.php">Seventh Valkyrie</a></li> <!--
							<li><a href="blog-home.php">Other Sam</a></li>
							<li><a href="blog-home.php">Ben</a></li>
							<li><a href="blog-home.php">Rohan</a></li> -->
						</ul>	
					</li>						
					<li><a href="stream-home.php">STREAMING<i><b></b></i></a></li>
					<li><a href="contact.php">CONTACT<i><b></b></i></a></li>
				</ul>
				<div id="combo-holder"></div>
			</div>
		</nav>
		<!-- ends nav -->
			
	</header>
	<!-- ENDS HEADER -->';
?>