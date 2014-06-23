<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if IE 9]> <html class="no-js lt-ie10" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
	<head>
    <meta charset="UTF-8">
    <!--[if ie]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
    <meta name="description" content="A&amp;P">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimal-ui">
    <title>A&amp;P</title>    
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/img/touch/apple-touch-icon-144x144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/img/touch/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/img/touch/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="/img/touch/apple-touch-icon-57x57-precomposed.png">
    <link rel="shortcut icon" sizes="196x196" href="/img/touch/touch-icon-196x196.png">
    <link rel="shortcut icon" href="/img/touch/apple-touch-icon.png">
    <meta name="msapplication-TileImage" content="/img/touch/apple-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#fea501">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="">
	<meta name="author" content="A&amp;P www.thinkap.com">
	<meta property="og:title" content="A&amp;P" >
	<meta property="og:description" content="A&amp;P" >
	<meta property="og:image" content="http://www.thinkap.com/img/share.jpg" >
	<meta property="og:type" content="website" >
	<meta property="og:url" content="http://www.thinkap.com/" >
	<meta property="og:site_name" content="A&amp;P" >
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="css/custom.css?v=1.0">
	<link rel="stylesheet" href="css/print.css" media="print"> 
    <script src="js/modernizr.custom.55666.js"></script>
    </head>    
    <body>    
    <!--[if lt IE 8]><p class=chromeframe>Your browser is very outdated or in compatability mode. To use this site to its full potential please <a href="http://browsehappy.com/">upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a>.</p><![endif]-->
	<?php include_once('template_inc/google-analytics.php'); ?>

	<div class="container">
	      <div class="row">
		      <div class="col-md-12">
		      
		        <h1>%CONTENT%</h1>
		        <p>%CONTENT% %CONTENT% %CONTENT% %CONTENT%</p>
				
				<button class="btn btn-block">Button</button>
				
		      </div>
	      </div>
	</div>

	<script>
        Modernizr.load([{
		   test: Modernizr.boxshadow,
		   yep:'//code.jquery.com/jquery-2.1.0.min.js',
		   nope: '//code.jquery.com/jquery-1.11.0.min.js',
		   callback: function(url, result, key){
				<?php // LOAD THE CORRECT JQUERY VERSION // ?>
				if (url === '//code.jquery.com/jquery-1.11.0.min.js') { if ( !window.jQuery ) { Modernizr.load('/js/jquery-1.11.0.min.js'); }; } else if (url === '//code.jquery.com/jquery-2.1.0.min.js') { if ( !window.jQuery ) { Modernizr.load('/js/jquery-2.1.0.min.js'); }; };				
			},
			complete: function() {
				<?php // LOAD OVER SCRIPTS // ?>
				Modernizr.load([{ test: $('.map').length > 0, yep: '//maps.google.com/maps/api/js?sensor=false' },'/js/bootstrap.min.js','ielt9!/js/respond.min.js','/js/plugins.js?v=1.0','/js/load.js?v=1.0']);
				<?php // RUN PAGE SCRIPT FUNCTION // ?>
				pageinit ();
			}
        }]);		
		function pageinit () {
			<?php // O_o // ?>
		};
    </script>    
</body>
</html>