<!DOCTYPE html>
<html lang="en-US"><head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Login - UNDRGRND Radio</title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta name="og:title" content="Login">
	<meta name="og:url" content="http://UNDRGRNDRadio.com">
<?php echo file_get_contents('assets/txt/meta.txt'); ?>
</head>
<body>
	<header>
<?php echo file_get_contents('assets/txt/header.txt'); ?>
	</header>
	<div class="content">
		<p id="intro">Choose a username and login. A password is only required for administrators.</p><br />
		<p id="error-msg"><?
			// errors 
			if ( $_GET['alert'] == 1 ) {
			  echo "That username already exists.<br>";
			} else if ( $_GET['alert'] == 2 ) {
			  echo "The username may not contain spaces or html, and must be between 1 and 20 characters in length.<br>"; 
			} else if ( $_GET['alert'] == 3 ) {
			  echo "If you're the administator, please enter the correct password. Otherwise, enter another name.<br>";
			}
		?></p>
		<h1>Chat Login</h1>
		<div class="well login-well">
			<form name="form1" method="post" action="/chat/login.php" class="form-horizontal">
				<div class="input-prepend">
					<span class="add-on"><i class="icon-user"></i></span>
					<input class="span3" id="prependedInput" type="text" placeholder="Username" name="u"><br />
				</div>
				<div class="input-prepend">
					<span class="add-on"><i class="icon-lock"></i></span>
					<input class="span3" id="prependedInput" id="p" type="password" placeholder="Password (admin only)" name="p">
				</div><br />
				<input type="submit" name="Submit" class="btn btn-large btn-inverse" value="Sign In" style="margin-top:10px;">					
			</form>
			<hr />
			<p>
				<small>
					<span title="Copyright">&copy;</span> <?php echo date("Y"); ?> UNDRGRND Radio<br />
					<a href="/releasenotes.html" target="_blank">Version 0.9.2 <span title="Beta">&beta;</span></a><br />
					<a href="/humans.txt" target="_blank"><img src="/assets/img/humanstxt.png" alt="Humans.TXT" /></a>
				</small>
			</p>
		</div>
		
		<div class="well well-small twitter">
			<p class="tweet"><span id="tweet"></span><br /><a href="https://twitter.com/undrgrnd_radio" target="_blank" style="float:right;">@UNDRGRND_Radio</a></p>
		</div>
		<div class="skull"></div>
	</div>
	<footer>
<?php echo file_get_contents('assets/txt/footer.txt'); ?>
	</footer>

	<script src="/assets/js/bootstrap.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script src="//twitter.github.com/bootstrap/assets/js/bootstrap-transition.js"></script>
	<script src="//twitter.github.com/bootstrap/assets/js/bootstrap-tooltip.js"></script>
	<script src="//twitter.github.com/bootstrap/assets/js/bootstrap-popover.js"></script>
	<script src="http://w.sharethis.com/button/buttons.js"></script>
	<script src="http://s.sharethis.com/loader.js"></script>
	<script>var switchTo5x=true;</script>
	<script>$.getJSON("https://api.twitter.com/1/statuses/user_timeline/undrgrnd_radio.json?count=5&include_rts=5&callback=?", function(data) {$("#tweet").html(data[0].text);});</script>
	<script>stLight.options({publisher: "c6f649d8-aa64-498c-a90e-93eb41d0400f", doNotHash: false, doNotCopy: false, hashAddressBar: true});</script>
	<script>var options={ "publisher": "c6f649d8-aa64-498c-a90e-93eb41d0400f", "position": "left", "ad": { "visible": false, "openDelay": 5, "closeDelay": 0}, "chicklets": { "items": ["facebook", "googleplus", "reddit", "twitter", "email", "sharethis"]}};
	var st_hover_widget = new sharethis.widgets.hoverbuttons(options);</script>
	<script>$('#m3u, #facebook, #twitter, #cal, #downloads').tooltip({placement:'top'});</script>
	<script>$('#cal, #downloads').popover({html:'true'});</script>
</body></html>