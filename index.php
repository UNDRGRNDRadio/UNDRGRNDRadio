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
		<p>Choose a username to login and join the group chat.</p><br />
		<?
			if ( $_GET['alert'] == 1 ) {
			  echo "<span class='label label-warning'>That username already exists.</span><br>";
			} else if ( $_GET['alert'] == 2 ) {
			  echo "<span class='label label-warning'>The username may not contain spaces or HTML.</span><br>"; 
			} else if ( $_GET['alert'] == 3 ) {
			  echo "<span class='label label-warning'>You tried logging in as the administrator! Try another username.</span><br>";
			}
		?>
		<h1>Chat Login</h1>
		<div class="well login-well">
			<form name="form1" method="post" action="/login.php" class="form-horizontal">
				<div class="input-prepend">
					<span class="add-on"><i class="icon-user"></i></span>
					<input class="span3" id="prependedInput" type="text" placeholder="Username" name="u" maxlength="20"><br />
				</div>
				<!-- <div class="input-prepend">
					<span class="add-on"><i class="icon-lock"></i></span>
					<input class="span3" id="prependedInput" id="p" type="password" placeholder="Password (admin only)" name="p">
				</div><br /> -->
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
	<script>$.getJSON("https://api.twitter.com/1/statuses/user_timeline/undrgrnd_radio.json?count=5&include_rts=5&callback=?", function(data) {$("#tweet").html(data[0].text);});</script>
	<script>$('#m3u, #facebook, #twitter, #cal, #downloads').tooltip({placement:'top'});</script>
	<script>$('#cal, #downloads').popover({html:'true'});</script>
</body></html>