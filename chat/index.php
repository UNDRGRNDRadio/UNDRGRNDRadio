<!DOCTYPE html>
<html lang="en-US"><head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Chat - UNDRGRND Radio</title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta name="og:title" content="Chat">
	<meta name="og:url" content="http://UNDRGRNDRadio.com/chat/">
	<meta name="og:site_name" content="UNDRGRND Radio">
	<meta name="og:image" content="http://UNDRGRNDRadio.com/favicon.png">
	<meta name="og:description" content="UNDRGRND Radio is the primary online hard dance radio station for listeners, by listeners.">
	<meta name="author" content="Jonathan Graft">
	<meta name="description" content="UNDRGRND Radio is the primary online hard dance radio station for listeners, by listeners.">
	<meta name="application-name" content="UNDRGRND Radio">
	<meta name="msapplication-TileColor" content="#333333">
	<meta name="msapplication-TileImage" content="/tileicon.png">
	<link rel="author" href="/humans.txt">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="/assets/img/apple/apple-touch-icon-144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="/assets/img/apple/apple-touch-icon-114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="/assets/img/apple/apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="/assets/img/apple/apple-touch-icon-57-precomposed.png">
	<link rel="icon" href="/favicon.png">
	<link rel="publisher" href="https://plus.google.com/113351018978771685125">
	<!--[if IE]><link rel="shortcut icon" href="/favicon.ico"><![endif]-->
	<link rel="stylesheet" href="/assets/css/bootstrap.min.css">
	<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<link rel="stylesheet" href="/assets/css/icomoon.css">
	<!--[if lte IE 7]><script src="/assets/js/lte-ie7.js"></script><![endif]--> 
	<link rel="stylesheet" href="/assets/css/master.css">
</head>
<body>
	<header>
		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container">
					<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<div class="nav-collapse collapse">
						<ul class="nav">
							<li><a href="/" title="Home"><span aria-hidden="true" class="icon-home"></span></a></li>
							<li class="active"><a title="Chatroom"><span aria-hidden="true" class="icon-bubbles"></span></a></li>
						</ul>
						<ul class="nav pull-right">
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" title="Downloads"><span aria-hidden="true" class="icon-cloud-download"></span> <b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a href="http://goo.gl/zfNBY" target="_blank"><span aria-hidden="true" class="icon-file-zip"></span> March 7th</a></li>
									<li><a href="http://goo.gl/eJfLT" target="_blank"><span aria-hidden="true" class="icon-file-zip"></span> March 1st</a></li>
									<li><a href="http://goo.gl/WrGes" target="_blank"><span aria-hidden="true" class="icon-file-zip"></span> February 13th</a></li>
								</ul>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" title="Social Media"><span aria-hidden="true" class="icon-share"></span> <b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a href="https://facebook.com/pages/Undrgrnd-Radio/178806132205119" target="_blank"><span aria-hidden="true" class="icon-facebook"></span> Facebook</a></li>
									<li><a href="https://twitter.com/undrgrnd_radio" target="_blank"><span aria-hidden="true" class="icon-twitter"></span> Twitter</a></li>
									<li><a href="https://plus.google.com/114568745829090552832" target="_blank"><span aria-hidden="true" class="icon-google-plus"></span> Google+</a></li>
									<li><a href="mailto:info@UNDRGRNDRadio.com"><span aria-hidden="true" class="icon-mail"></span> Email</a></li>
									<li class="divider"></li>
									<li><div class="qr qr-chat" title="QR Code"></div></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="logo"></div>
	</header>
	<div class="container">
		<div class="well chat">
			<iframe class="radioapp" src="/player/index.html" frameborder='0' scrolling='no'></iframe>
			<div id="tlkio" data-channel="UNDRGRNDRadio" data-theme="http://undrgrndradio.com/assets/css/theme-chat.css"></div>
			<script async src="http://tlk.io/embed.js" type="text/javascript"></script>
		</div>
	</div>
	<footer>
		<p class="muted credit"><span title="Copyright">&copy;</span> <a href="/">UNDRGRNDRadio.com</a> <?php echo date("Y"); ?></p>
		<!-- <a href="/releasenotes.html" target="_blank">Version 1.0.0 <span title="Beta">&beta;</span></a> -->
	</footer>

	<script src="/assets/js/bootstrap.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script src="http://twitter.github.com/bootstrap/assets/js/bootstrap-dropdown.js"></script>
	<script>
		var message="";
		function clickIE() {if (document.all) {(message);return false;}}
		function clickNS(e) {if 
		(document.layers||(document.getElementById&&!document.all)) {
		if (e.which==2||e.which==3) {(message);return false;}}}
		if (document.layers) 
		{document.captureEvents(Event.MOUSEDOWN);document.onmousedown=clickNS;}
		else{document.onmouseup=clickNS;document.oncontextmenu=clickIE;}
		document.oncontextmenu=new Function("return false")
	</script>
</body></html>