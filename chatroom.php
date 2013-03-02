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
		
		<script src="/assets/js/bootstrap.min.js"></script>
		<script type="text/javascript">var switchTo5x=true;</script>
		<script src="http://w.sharethis.com/button/buttons.js"></script>
		<script src="http://s.sharethis.com/loader.js"></script>
	</head>

	<body>

		<header>
			<div class="header-bg"></div>
			<div class="logo"></div>
		</header>
		
		<div class="content">
				
			<div class="bgtext">
				<div class="form">
					<div id="chatpane">
						<ul id="chatbuffer"></ul>
					</div>

					<div id="userpane">
						<ul id="userlist"></ul>
					</div>

					<p class="clear">

					<div id="actions"> chat: 
					<a href="javascript:setsmiley(':)')"><img src="images/smile.gif" border="0" alt=":)" align="bottom"></a>
					<a href="javascript:setsmiley(':D')"><img src="images/laugh.gif" border="0" alt=":D" align="bottom"></a>
					<a href="javascript:setsmiley(':p')"><img src="images/tongue.gif" border="0" alt=":p" align="bottom"></a>
					<a href="javascript:setsmiley(';)')"><img src="images/wink.gif" border="0" alt=";)" align="bottom"></a>
					<a href="javascript:setsmiley(':kiss')"><img src="images/kiss.gif" border="0" alt=":kiss" align="bottom"></a>
					<a href="javascript:setsmiley(':(')"><img src="images/sad.gif" border="0" alt=":(" align="bottom"></a>
		
					</div>		
		
					<input class="mytext" id="mytext" name="mytext" type="text" onFocus="textFocus=true" onBlur="textFocus=false">	
							
					</p><p id="charcount">0 characters</p> <?
			  include("config.php");
			  if( $_SERVER['QUERY_STRING'] == $admin_num ) {
				echo "<a href='".$buffer_file."' target='_blank'>buffer</a> <a href='".$pings_file."' target='_blank'>pings</a> <a href='".$users_file."' target='_blank'>users</a>";
			  }
			?>
					<p id="stats"><strong>Quick Stats</strong> Pings: 0 Requests: 0 Posts: 0 </p>
							
				<div id="archivelink"><strong><a href="buffertext.php?u=<? echo $_SERVER['QUERY_STRING']; ?>&d=1" target="_blank">View Archive</a></strong></div>
				
				</div>
	
			
    <p>
      <script type="text/javascript">startChat();</script>
    </p>
				
				
		</div></div>

		<footer>
			<div class="footer-bg"></div>
			<div class="footer-container">
				<div class="footer-player">
					<script type="text/javascript" src="http://hosted.musesradioplayer.com/mrp.js"></script>
					<script type="text/javascript">
						MRP.insert({
							'url':'http://24.3.131.69:8000/listen',
							'lang':'en',
							'codec':'mp3',
							'volume':100,
							'autoplay':true,
							'buffering':5,
							'title':'UNDRGRND Radio',
							'welcome':'WELCOME TO...',
							'bgcolor':'#222222',
							'skin':'eastanbul',
							'width':467,
							'height':26
						});
					</script>
				</div>
				<div class="footer-social">
					<ul>
						<li><a href="/assets/m3u/UNDRGRNDRadio.m3u" id="m3u" title="Listen using iTunes or WMP"><img src="/assets/img/social/itunes.png" alt="Play in iTunes" /></a></li>
						<li><a href="https://facebook.com" target="_blank" id="facebook" title="Like us on Facebook"><img src="/assets/img/social/facebook.png" alt="Facebook" /></a></li>
						<li><a href="https://twitter.com" target="_blank" id="twitter" title="Follow us on Twitter"><img src="/assets/img/social/twitter.png" alt="Twitter" /></a></li>
					</ul>
				</div>
			</div>
		</footer>
		
		<script src="//twitter.github.com/bootstrap/assets/js/bootstrap-transition.js"></script>
		<script src="//twitter.github.com/bootstrap/assets/js/bootstrap-modal.js"></script>
		<script src="//twitter.github.com/bootstrap/assets/js/bootstrap-dropdown.js"></script>
		<script src="//twitter.github.com/bootstrap/assets/js/bootstrap-tooltip.js"></script>
		<script src="//twitter.github.com/bootstrap/assets/js/bootstrap-popover.js"></script>
		<script src="//twitter.github.com/bootstrap/assets/js/bootstrap-collapse.js"></script>
		<script src="//twitter.github.com/bootstrap/assets/js/bootstrap-carousel.js"></script>
		<script src="//raw.github.com/scottjehl/Respond/master/respond.min.js"></script>
		<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>
		<script>stLight.options({publisher: "c6f649d8-aa64-498c-a90e-93eb41d0400f", doNotHash: false, doNotCopy: false, hashAddressBar: true});</script>
		<script>var options={ "publisher": "c6f649d8-aa64-498c-a90e-93eb41d0400f", "position": "left", "ad": { "visible": false, "openDelay": 5, "closeDelay": 0}, "chicklets": { "items": ["facebook", "googleplus", "reddit", "twitter", "email", "sharethis"]}};
		var st_hover_widget = new sharethis.widgets.hoverbuttons(options);</script>
		<script>$('#m3u, #facebook, #twitter').tooltip({placement:'top'});</script>
	</body>
</html>