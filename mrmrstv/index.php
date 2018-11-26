<?php
	$global_root = $_SERVER['DOCUMENT_ROOT'];

	/* page specific */
	$website_page_heading = "Page heading";

	/* user input required */
	$website_aside_heading1 = "aside heading1";
	$website_aside_heading2 = "aside heading2";
	$website_aside_heading3 = "aside heading3";

	/* get from bot */
	$stream_latest_donator = "highest donation";
	$stream_latest_donator_amount = "highest donation";
	$stream_latest_follower = "latest follower";


?>

<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Mr Mrs TV</title>
  <meta name="description" content="Introducing MrMrs TV, a married couple doing what they love the most, spending time with one another playing video games. ">
  <meta name="author" content="MrMrsTV">

  <link rel="stylesheet" href="content/themes/vanilla/css/theme.css">
  <link rel="stylesheet" href="content/themes/vanilla/css/flexboxgrid.css">
</head>

<body>
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
