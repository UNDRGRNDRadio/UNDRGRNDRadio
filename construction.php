<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>UNDRGRND Radio</title>
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<meta name="author" content="Jonathan Graft">
		<meta name="description" content="UNDRGRND Radio is the primary online hard dance radio station for listeners, by listeners.">
		<link rel="stylesheet" href="/assets/css/bootstrap.css">
		<link rel="stylesheet" href="/assets/css/style.css">
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Iceland">
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="/assets/img/apple/apple-touch-icon-144-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="/assets/img/apple/apple-touch-icon-114-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="/assets/img/apple/apple-touch-icon-72-precomposed.png">
		<link rel="apple-touch-icon-precomposed" href="/assets/img/apple/apple-touch-icon-57-precomposed.png">
		<link rel="shortcut icon" href="/favicon.ico">
		<link rel="author" href="http://jonathangraft.com/humans.txt">
		<link rel="publisher" href="https://plus.google.com/113351018978771685125">
	</head>

	<body>
		<header>
			<?php echo file_get_contents('assets/txt/header.txt'); ?>
		</header>
		
		<div class="content">
			<?php echo file_get_contents('assets/txt/login.txt'); ?>
			
			<div class="well well-small twitter">
				<p class="tweet"><span id="tweet"></span><br /><a href="https://twitter.com/undrgrnd_radio" target="_blank" style="float:right;">@UNDRGRND_Radio</a></p>
			</div>
		</div>


		<footer>
			<?php echo file_get_contents('assets/txt/footer.txt'); ?>
		</footer>
		
		<script src="/assets/js/bootstrap.min.js"></script>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script src="//twitter.github.com/bootstrap/assets/js/bootstrap-transition.js"></script>
		<script src="//twitter.github.com/bootstrap/assets/js/bootstrap-tooltip.js"></script>
		<script src="http://w.sharethis.com/button/buttons.js"></script>
		<script src="http://s.sharethis.com/loader.js"></script>
		<script>var switchTo5x=true;</script>
		<script>$.getJSON("https://api.twitter.com/1/statuses/user_timeline/undrgrnd_radio.json?count=5&include_rts=5&callback=?", function(data) {$("#tweet").html(data[0].text);});</script>
		<script>stLight.options({publisher: "c6f649d8-aa64-498c-a90e-93eb41d0400f", doNotHash: false, doNotCopy: false, hashAddressBar: true});</script>
		<script>var options={ "publisher": "c6f649d8-aa64-498c-a90e-93eb41d0400f", "position": "left", "ad": { "visible": false, "openDelay": 5, "closeDelay": 0}, "chicklets": { "items": ["facebook", "googleplus", "reddit", "twitter", "email", "sharethis"]}};
		var st_hover_widget = new sharethis.widgets.hoverbuttons(options);</script>
		<script>$('#m3u, #facebook, #twitter').tooltip({placement:'top'});</script>
	</body>
</html>