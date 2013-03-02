<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>500 Server Error</title>
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<meta name="author" content="Jonathan Graft">
		<meta name="description" content="UNDRGRND Radio is the primary online hard dance radio station for listeners, by listeners.">
		<link rel="stylesheet" href="http://radio.jonathangraft.com/assets/css/bootstrap.css">
		<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="http://radio.jonathangraft.com/assets/img/apple/apple-touch-icon-144-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="http://radio.jonathangraft.com/assets/img/apple/apple-touch-icon-114-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="http://radio.jonathangraft.com/assets/img/apple/apple-touch-icon-72-precomposed.png">
		<link rel="apple-touch-icon-precomposed" href="http://radio.jonathangraft.com/assets/img/apple/apple-touch-icon-57-precomposed.png">
		<link rel="icon" href="/favicon.png">
		<!--[if IE]><link rel="shortcut icon" href="/favicon.ico"><![endif]-->
		<meta name="application-name" content="500 Server Error">
		<meta name="msapplication-TileColor" content="#333333">
		<meta name="msapplication-TileImage" content="/tileicon.png">
		<link rel="author" href="/humans.txt">
		<link rel="publisher" href="https://plus.google.com/113351018978771685125">
	</head>
	<body style="background:#333; color:#999; padding-left:10px;">
		<h1>500 Server Error</h1>
		<p>A misconfiguration on the server has caused a problem.  In order for me to effectively fix this problem, please <a href="mailto:JonathanGraft@me.com?&amp;subject=UNDRGRND%20Radio%20500%20Server%20Error&amp;body=Hello%20Jonathan,">email me</a>.</p>
		<p>You tried viewing: <span class="label label-important"><?
			echo "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']."<br>\n";
			$fixer = "checksuexec ".escapeshellarg($_SERVER['DOCUMENT_ROOT'].$_SERVER['REQUEST_URI']);
			echo `$fixer`;
		?></span></p>
		<a href="/" class="btn">&crarr; Return to homepage</a>
	</body>
</html>