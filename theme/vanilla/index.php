<?php
	// global_config
	include('config.php');

?>
<!doctype html>

<html lang="en">
	<head>
		<!-- start of head ** this can be external to reduce size of index and stop from being edited accidently-->

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="author" content="MrMrsTV, http://mrmrs.tv">
		<meta name="robots" content="index,follow">

		<title>MrMrsTV | Twitch Streamers</title>
		<meta name="description" content="MrMrsTV features a married couple, Aimee and Liam on their Dual Twitch Stream.">

	  <link rel="stylesheet" href="<?php echo $theme_root ?>/css/theme.css">
	  <link rel="stylesheet" href="<?php echo $theme_root ?>/css/flexboxgrid.css">

		<link rel="shortcut icon" href="http://www.twitch.tv/favicon.ico">

	</head>

	<body>

		<header role="banner">
			<div id="logo">
				<a href="text" alt="text" title="text">
					<img src="#">
				</a>
			</div>

	<?php
		$streamstatus = "live";

		if $streamstatus == 'live' {
	?>
		<span class="live">Now Live</span>
	<?php
	} else {
	?>
		<span class="offline">Offline</span>
	<?php
	}
	?>


			<div id="status">
				<span>LIVE</span>
		</header>


		<!-- to wrap the background image around the nav and the entry content -->
		<div id="banner">
			<header class="header">
				<nav>
					<li class="left">
						<a href="#">Link1</a>
					</li>
					<li class="left">
						<a href="#">Link2</a>
					</li>
					<li class="right">
						<a href="#">Link3</a>
					</li>
					<li class="right">
						<a href="#">Link4</a>
					</li>
				</nav>
			</header>
		</div>

		<div id="content" class="row container-fluid">
			<h1><?php echo $website_page_heading ?></h1>
			<p>This website is under construction, you can watch it slowly build or you can come back in a few weeks to see how we're getting on. We'll launch it on social media once it is ready so you can see what we have in store for you! See you soon! MrMrsTV.</p>

		</div>

		<aside class="row aside">
			<section>
				<header><?php echo $website_aside_heading1; ?></header>
				<article>Some text goes here</article>
				<button>Click me</button>
			</section>

			<section>
				<header><?php echo $website_aside_heading2; ?></header>
				<article>Some text goes here</article>
				<button>Click me</button>
			</section>

			<section>
				<header><?php echo $website_aside_heading3; ?></header>
				<article>Some text goes here</article>
				<button>Click me</button>
			</section>
		</aside>



		<footer class="row footer">
			<footer class="main">

			</footer>
			<footer class="secondary">
				<ul>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
				</ul>
			</footer>
		</footer>

		<script src="js/scripts.js"></script>
	</body>
</html>
