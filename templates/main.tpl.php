<?php
	/**
	 * This is a main template that a php script can include. The following variables should be set
	 * before this file is included:
	 *	$_title
	 *	$_author
	 *	$_description
	 *	
	 */
?>
><!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en"> <!--<![endif]-->
	<head>
	  <meta charset="utf-8">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	  <title><?php if(isset($_title)){ echo $_title;}?></title>
	  <meta name="description" content="<?php if(isset($_description)){ echo $_description;}?>">
	  <meta name="author" content="<?php if(isset($_author)){ echo $_author;}?>">

	  <!-- Mobile viewport optimized: j.mp/bplateviewport -->
	  <meta name="viewport" content="width=device-width,initial-scale=1">

	  <!-- CSS: implied media=all -->
	  <link rel="stylesheet" href="css/style.css">
	  <!-- end CSS-->


	  <script src="js/libs/modernizr-2.0.6.min.js"></script>
	</head>

	<body>

	  <div id="container">
		<header>
			<?php if(isset($_header)){ echo $_header;}?>
		</header>
		<div id="main" role="main">
			<?php if(isset($_main)){ echo $_main;}?>
		</div>
		<footer>
			<?php if(isset($_footer)){ echo $_footer;}?>
		</footer>
	  </div> <!--! end of #container -->



	  <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
	  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
	  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.6.2.min.js"><\/script>')</script>


	  <!-- scripts concatenated and minified via ant build script-->
	  <script defer src="js/plugins.js"></script>
	  <script defer src="js/script.js"></script>
	  <!-- end scripts-->



	  <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
		   chromium.org/developers/how-tos/chrome-frame-getting-started -->
	  <!--[if lt IE 7 ]>
		<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
		<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
	  <![endif]-->
	  
	</body>
</html>
