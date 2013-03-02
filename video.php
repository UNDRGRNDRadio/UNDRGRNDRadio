<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>Video Feed - UNDRGRND Radio</title>
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<meta name="og:title" content="Video Feed"/>
		<meta name="og:url" content="http://Radio.JonathanGraft.com/video"/>
<?php echo file_get_contents('assets/txt/meta.txt'); ?>
		<style>
			#VideoStream, #SocialStream, .copyright {
				width: 720px;
				border: none;
			}
			#VideoStream {
				background: #000;
				height: 437px;
			}
			#SocialStream {
				background: transparent;
				position: relative;
				height: 250px;
				top: -41px;
			}
			.vstream {
				height: 650px;
				width: 720px;
				position: relative;
				top: -30px;
				margin: 0 auto;
			}
			.logo {z-index: 9999;}
			.coverup {
				background: #00ff00;
				position: relative;
				margin: 0 auto;
				width: 720px;
				height: 30px;
			}
			#VideoStream, #SocialStream {position: relative;}
			#VideoStream {top: -30px;}
			#SocialStream {top:-71px;}
		</style>
	</head>

	<body>
		<header>
			<?php echo file_get_contents('assets/txt/header.txt'); ?>
		</header>
		<div class="content">
			<div class="well vstream">
				<div class="coverup"></div>
				<iframe id="VideoStream" src="https://www.ustream.tv/embed/13502286" scrolling="no" frameborder="0"></iframe>
				<iframe id="SocialStream" src="https://www.ustream.tv/socialstream/13502286" scrolling="no" frameborder="0" allowtransparency="true"></iframe>
			</div>
		</div>
		<!--
		<footer>
			<?php echo file_get_contents('assets/txt/footer.txt'); ?>
		</footer>
		-->
		<script src="/assets/js/bootstrap.min.js"></script>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script src="//twitter.github.com/bootstrap/assets/js/bootstrap-transition.js"></script>
		<script src="//twitter.github.com/bootstrap/assets/js/bootstrap-tooltip.js"></script>
		<script src="//twitter.github.com/bootstrap/assets/js/bootstrap-popover.js"></script>
		<script>$('#m3u, #facebook, #twitter, #cal, #downloads').tooltip({placement:'top'});</script>
		<script>$('#cal, #downloads').popover({html:'true'});</script>
	</body>
</html>