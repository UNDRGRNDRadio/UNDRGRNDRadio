<?
include("config.php");

$userid = $_GET['u'];
$d = $_GET['d'];

#$userid = 3077432343;
$type = 0;

$users = @file_get_contents($users_file);
if( strstr($users, $userid) == 0 ) {

  echo $userid."timeout<br><br><br><br><br><br><br><br><br><center><li class='servermsg'>You have timed out, please <a href='".$path_to_chat."' target='_top'>login</a> again</li></center>";
# i want to stop the incessant requests on the client side...if I send you back your own id, your client stops updating.
  exit();
}

$file = file_get_contents($buffer_file);
$lines = explode("\n",$file);
$num = count($lines);
$num--; #cuz there's always a whitespace line at the end.
if( $num < $maxlines * 2 || $d == 1 ) { $start = 0; }
else { $start = $num - ($maxlines  * 2) ; }
if ( $d == 1 ) { echo "<!DOCTYPE html><html><head><meta charset='utf-8'><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><title>UNDRGRND Radio Chat Logs</title><meta name='viewport' content='width=device-width,initial-scale=1.0'><link rel='stylesheet' href='/assets/css/bootstrap.css'><link rel='stylesheet' href='/assets/css/style.css'><!--[if lt IE 9]><script src='http://html5shim.googlecode.com/svn/trunk/html5.js'></script><![endif]--><link rel='apple-touch-icon-precomposed' sizes='144x144' href='/assets/img/apple/apple-touch-icon-144-precomposed.png'><link rel='apple-touch-icon-precomposed' sizes='114x114' href='/assets/img/apple/apple-touch-icon-114-precomposed.png'><link rel='apple-touch-icon-precomposed' sizes='72x72' href='/assets/img/apple/apple-touch-icon-72-precomposed.png'><link rel='apple-touch-icon-precomposed' href='/assets/img/apple/apple-touch-icon-57-precomposed.png'><link rel='icon' href='/favicon.png'><!--[if IE]><link rel='shortcut icon' href='/favicon.ico'><![endif]--><meta name='application-name' content='UNDRGRND Radio Login'><meta name='msapplication-TileColor' content='#333333'><meta name='msapplication-TileImage' content='/tileicon.png'><link rel='author' href='/humans.txt'><link rel='publisher' href='https://plus.google.com/113351018978771685125'><style>.usermsg{background:transparent !important;color:#000 !important;border:none !important;text-shadow:none !important;}.footer-social{top:75px;}.footer-social ul li{margin:0 2px;}</style></head><body><header><div class='header-bg'></div><div class='logo archive-logo'></div></header><div class='well archive-well'><div id='chatpane' class='archive-log'><ul id='chatbuffer'>"; }
echo "<div width='50%'>";
for($i = $start; $i < $num; $i = $i + 2) {
  $lines[$i+1] = stripslashes($lines[$i+1]);
  $lines[$i+1] = preg_replace('/(http:\/\/\S*)/','<a href="$1" target="_blank">$1</a>',$lines[$i+1]);
  
  $type = rtrim($lines[$i]);
  if( $type == '0') { 
    echo "<li class='usermsg'>" . $lines[$i+1] . "</li>";
  }
  else if ( $type == '1' ) { 
    echo "<li class='servermsg'>" . $lines[$i+1] . "</li>";
  }
  else if ( $type == '2' ) { 
    echo "<li class='actionmsg'>" . $lines[$i+1] . "</li>";
  } 
}
echo "</div>";
if ( $d == 1 ) { echo "</div></div></ul><div class='footer-bg'></div><div class='footer-container'><div class='footer-social'><ul><li><a href='/assets/m3u/UNDRGRNDRadio.m3u' id='m3u' title='Listen using iTunes or WMP'><img src='/assets/img/social/itunes.png' alt='Play in iTunes' /></a></li><li><a href='https://facebook.com/pages/Undrgrnd-Radio/178806132205119' target='_blank' id='facebook' title='Like us on Facebook'><img src='/assets/img/social/facebook.png' alt='Facebook' /></a></li><li style='margin-right:0;'><a href='https://twitter.com/undrgrnd_radio' target='_blank' id='twitter' title='Follow us on Twitter'><img src='/assets/img/social/twitter.png' alt='Twitter' /></a></li></ul></div></div></body></html>"; }
?>