<!DOCTYPE html>
<html lang="en-US"><head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Public Chat Room - UNDRGRND Radio</title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta name="og:title" content="Public Chat Room">
	<meta name="og:url" content="http://UNDRGRNDRadio.com/chat/chat.php">
<?php echo file_get_contents('../assets/txt/meta.txt'); ?>
	<script src="md4.js"></script>
	<script src="chatclient.js"></script>
	<script>
		<!--
		function setsmiley(what){
			tmp=document.getElementById("mytext");
		    tmp.value = tmp.value+" "+what+" ";
		    tmp.focus();
		}
		//-->
	</script>
</head>
<body>
	<header>
<?php echo file_get_contents('../assets/txt/header.txt'); ?>
	</header>
	<div class="content">
		<div class="well chat-well">
			<div class="form">
				<div id="chatpane">
					<ul id="chatbuffer"></ul>
				</div>
				<div id="userpane">
					<ul id="userlist"></ul>
				</div>
				<p class="clear">
					<div id="actions">
						<ul>
							<li><a href="javascript:setsmiley(':)')"><img src="/assets/img/smile/nice.png" alt=":)" align="bottom" /></a></li>
							<li><a href="javascript:setsmiley(':(')"><img src="/assets/img/smile/sad.png" alt=":(" align="bottom"></a></li>
							<li><a href="javascript:setsmiley(':D')"><img src="/assets/img/smile/great.png" alt=":D" align="bottom"></a></li>
							<li><a href="javascript:setsmiley(':P')"><img src="/assets/img/smile/just-like-that.png" alt=":p" align="bottom"></a></li>
							<li><a href="javascript:setsmiley(':S')"><img src="/assets/img/smile/awww.png" alt=":s" align="bottom" /></a></li>
							<li><a href="javascript:setsmiley(':|')"><img src="/assets/img/smile/disheartened.png" alt=":|" align="bottom" /></a></li>
							<li><a href="javascript:setsmiley('xD')"><img src="/assets/img/smile/ecstatic.png" alt="xD" align="bottom" /></a></li>
							<li><a href="javascript:setsmiley(':X')"><img src="/assets/img/smile/mouthshut.png" alt=":x" align="bottom" /></a></li>
							<li><a href="javascript:setsmiley(':O')"><img src="/assets/img/smile/omg.png" alt=":o" align="bottom" /></a></li>
							<li><a href="javascript:setsmiley(':kill:')"><img src="/assets/img/smile/kill-u.png" alt=":kill:" align="bottom" /></a></li>
							<li><a href="javascript:setsmiley('???')"><img src="/assets/img/smile/i-think.png" alt="???" align="bottom" /></a></li>
							<li><a href="javascript:setsmiley(':angel:')"><img src="/assets/img/smile/angel.png" alt=":angel:" align="bottom" /></a></li>
							<li><a href="javascript:setsmiley(':plus:')"><img src="/assets/img/smile/like.png" alt=":plus:" title="Like this track" align="bottom" /></a></li>
							<li><a href="javascript:setsmiley(':minus:')"><img src="/assets/img/smile/dislike.png" alt=":minus:" title="Dislike this track" align="bottom" style="margin-left:4px;" /></a></li>
							<li><a href="#" title="More Emoticons" id="extrasmiley" data-toggle="popover" data-placement="right" data-content="<iframe src='/smiley.php' style='border:0; width:152px; height:240px;' frameborder='0' scrolling='yes'></iframe>">&hellip;</a></li>
						</ul>
					</div>
					<input class="mytext" id="mytext" name="mytext" type="text" placeholder="PLUR" onFocus="textFocus=true" onBlur="textFocus=false">
				</p>
				<div class="extras">
					<span class="label label-inverse">
						<p id="charcount">0 characters</p>
					</span>
					<span class="label label-inverse">
						<p id="stats">Pings: 0 Requests: 0 Posts: 0</p>
					</span>
					<div id="archivelink">
						<a href="#" class="btn btn-inverse" onclick="window.open( 'buffertext.php?u=<? echo $_SERVER['QUERY_STRING']; ?>&d=1', 'name', 'location=no,scrollbars=no,status=no,toolbar=no,resizable=yes' )">View Chat Logs</a>
					</div>
				</div>
			    <p>
			    	<script>startChat();</script>
			    </p>
			</div>
		</div>
	</div>	
	<footer>
<?php echo file_get_contents('../assets/txt/footer.txt'); ?>
	</footer>

	<script src="/assets/js/bootstrap.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script src="//twitter.github.com/bootstrap/assets/js/bootstrap-transition.js"></script>
	<script src="//twitter.github.com/bootstrap/assets/js/bootstrap-tooltip.js"></script>
	<script src="//twitter.github.com/bootstrap/assets/js/bootstrap-popover.js"></script>
	<script src="http://w.sharethis.com/button/buttons.js"></script>
	<script src="http://s.sharethis.com/loader.js"></script>
	<script>var switchTo5x=true;</script>
	<script>stLight.options({publisher: "c6f649d8-aa64-498c-a90e-93eb41d0400f", doNotHash: false, doNotCopy: false, hashAddressBar: true});</script>
	<script>var options={ "publisher": "c6f649d8-aa64-498c-a90e-93eb41d0400f", "position": "left", "ad": { "visible": false, "openDelay": 5, "closeDelay": 0}, "chicklets": { "items": ["facebook", "googleplus", "reddit", "twitter", "email", "sharethis"]}};
	var st_hover_widget = new sharethis.widgets.hoverbuttons(options);</script>
	<script>$('#m3u, #facebook, #twitter, #cal, #downloads').tooltip({placement:'top'});</script>
	<script>$('#cal, #downloads, #extrasmiley').popover({html:'true'});</script>
</body></html>