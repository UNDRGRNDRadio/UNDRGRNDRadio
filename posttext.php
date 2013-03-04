<?
include("config.php");
$user = $_GET['u'];
$text = $_GET['t'];
echo $text;
$type = 0; // default to user regular message => css class: usermsg
$post = 0; // only post if it's a valid user
$header = " ";

if( $user == $admin_id ) {
  // system message => css class: systemmsg
  $type = 1;  
  $post = 1;
}
else
{
  $file = file_get_contents($users_file);
  $lines = explode("\n",$file);
  $num = count($lines);

  if( !(strpos($text, '/me') === false) && ( strpos($text, '/me') == 0 || strpos($text, '/me') == 1) ) {
    $type = 2;  // user action message => css class: actionmsg
  }	

  // use uid to grab username from users file
  for( $i = 0; $i < $num; $i++ ) {
    $data = explode(",",$lines[$i]); 
    $uid = $data[0];
	if( $user == $uid && count($data) > 1 ) { 
	  $post = 1;
	  if( $type == 0 ) { 
	    $header = '<span class="msg-user">&lt;' . $data[1] . "&gt;</span> "; 
	  }
	  else if ($type == 2) {
	    $header = $data[1] . " "; 
	    $text = substr($text,4);
	  }  
	} 
  }
}

/*$text = preg_replace('/<.*?>/','',$text);*/
$text = htmlspecialchars($text);

// Patch for Turkish Language in MESSAGE.
// Codes from http://www.uspto.gov/teas/standardCharacterSet.html
$trans = array("%u015F"=>"&#351;","%u015E"=>"&#350;","%u0131"=>"&#305;","%u0130"=>"&#304;","%u011F"=>"&#287;","%u011E"=>"&#286;","ö"=>"&#246;","Ö"=>"O","ü"=>"&#252;","Ü"=>"&#220;","ç"=>"&#231;","Ç"=>"&#199;");
$text=strtr($text,$trans);

//Smileys
$text=str_replace(":)","<img src='/assets/img/smile/nice.png' align='absmiddle' alt='Happy'>",$text);
$text=str_replace(":(","<img src='/assets/img/smile/sad.png' align='absmiddle' alt='Sad'>",$text);
$text=str_replace(":D","<img src='/assets/img/smile/great.png' align='absmiddle' alt='Laughing'>",$text);
$text=str_replace(":P","<img src='/assets/img/smile/just-like-that.png' align='absmiddle'>",$text);
$text=str_replace(":p ","<img src='/assets/img/smile/just-like-that.png' align='absmiddle'>",$text);
$text=str_replace(":S","<img src='/assets/img/smile/awww.png' align='absmiddle' alt='Awww'>",$text);
$text=str_replace(":s ","<img src='/assets/img/smile/awww.png' align='absmiddle' alt='Awww'>",$text);
$text=str_replace(":|","<img src='/assets/img/smile/disheartened.png' align='absmiddle'>",$text);
$text=str_replace(":l ","<img src='/assets/img/smile/disheartened.png' align='absmiddle'>",$text);
$text=str_replace("xD","<img src='/assets/img/smile/ecstatic.png' align='absmiddle'>",$text);
$text=str_replace(":X","<img src='/assets/img/smile/mouthshut.png' align='absmiddle'>",$text);
$text=str_replace(":x ","<img src='/assets/img/smile/mouthshut.png' align='absmiddle'>",$text);
$text=str_replace(":O","<img src='/assets/img/smile/omg.png' align='absmiddle' alt='OMG'>",$text);
$text=str_replace(":o ","<img src='/assets/img/smile/omg.png' align='absmiddle' alt='OMG'>",$text);
$text=str_replace(":kill:","<img src='/assets/img/smile/kill-u.png' align='absmiddle' alt='Kill You'>",$text);
$text=str_replace("???","<img src='/assets/img/smile/i-think.png' align='absmiddle' alt='???'>",$text);
$text=str_replace(":angel:","<img src='/assets/img/smile/angel.png' align='absmiddle' alt='Angel'>",$text);
$text=str_replace(":johnny:","<img src='/assets/img/smile/johnnyhardstyle.png' align='absmiddle' alt='Johnny Hardstyle'>",$text);
$text=str_replace(":undrgrnd:","<img src='/assets/img/smile/undrgrnd.png' align='absmiddle' alt='UNDRGRND Radio'>",$text);
$text=str_replace(":favicon:","<img src='/assets/img/smile/favicon.png' align='absmiddle' alt='UNDRGRND Radio Favicon'>",$text);
$text=str_replace(":u:","<img src='/assets/img/smile/u.png' align='absmiddle' alt='U'>",$text);
$text=str_replace(":U:","<img src='/assets/img/smile/u.png' align='absmiddle' alt='U'>",$text);
$text=str_replace("3=D","<img src='/assets/img/smile/dick.gif' align='absmiddle' alt='Penis'>",$text);
$text=str_replace(":dick:","<img src='/assets/img/smile/dick.gif' align='absmiddle' alt='Penis'>",$text);
$text=str_replace(":poop:","<img src='/assets/img/smile/poop.png' align='absmiddle' alt='Poop'>",$text);
$text=str_replace(":like:","<img src='/assets/img/smile/like.png' align='absmiddle' alt='Like'>",$text);
$text=str_replace("(y)","<img src='/assets/img/smile/like.png' align='absmiddle' alt='Like'>",$text);
$text=str_replace("(Y)","<img src='/assets/img/smile/like.png' align='absmiddle' alt='Like'>",$text);
$text=str_replace(":dislike:","<img src='/assets/img/smile/dislike.png' align='absmiddle' alt='Dislike'>",$text);
$text=str_replace("(n)","<img src='/assets/img/smile/dislike.png' align='absmiddle' alt='Dislike'>",$text);
$text=str_replace("(N)","<img src='/assets/img/smile/dislike.png' align='absmiddle' alt='Dislike'>",$text);
$text=str_replace(":shark:","<img src='/assets/img/smile/shark.png' align='absmiddle' alt='Shark'>",$text);
$text=str_replace(":penguin:","<img src='/assets/img/smile/penguin.png' align='absmiddle' alt='Penguin'>",$text);
$text=str_replace(":cd:","<img src='/assets/img/smile/cd.png' align='absmiddle' alt='CD'>",$text);
$text=str_replace(":CD:","<img src='/assets/img/smile/cd.png' align='absmiddle' alt='CD'>",$text);
$text=str_replace(":gold:","<img src='/assets/img/smile/cd-gold.png' align='absmiddle' alt='Gold CD'>",$text);
$text=str_replace(":platinum:","<img src='/assets/img/smile/cd-platinum.png' align='absmiddle' alt='Platinum CD'>",$text);
$text=str_replace(":heart:","<img src='/assets/img/smile/heart.png' align='absmiddle' alt='Heart'>",$text);
$text=str_replace(":beer:","<img src='/assets/img/smile/beer.png' align='absmiddle' alt='Beer'>",$text);
$text=str_replace(":note:","<img src='/assets/img/smile/note.png' align='absmiddle' alt='Music Note'>",$text);
$text=str_replace(":notes:","<img src='/assets/img/smile/notes.png' align='absmiddle' alt='Music Notes'>",$text);
$text=str_replace(":save:","<img src='/assets/img/smile/save.png' align='absmiddle' alt='Save'>",$text);
$text=str_replace(":star:","<img src='/assets/img/smile/star.png' align='absmiddle' alt='Star'>",$text);
$text=str_replace(":*:","<img src='/assets/img/smile/star.png' align='absmiddle' alt='Star'>",$text);

//Curse Words
$curse_words = array('cock', 'cunt', 'fuck', 'faggot', 'fag');
foreach ($curse_words as $curse) {
	$stars = '';
	for ($i = 0; $i < strlen($curse); $i++)
		$stars .= '*';
	$text = str_ireplace($curse, $stars, $text);
}

//Formatting
$text=str_replace("[b]","<strong>",$text);
$text=str_replace("[/b]","</strong>",$text);
$text=str_replace("[i]","<i>",$text);
$text=str_replace("[/i]","</i>",$text);
$text=str_replace("[r]","<span style='background:red;color:#fff;'>",$text);
$text=str_replace("[/r]","</span>",$text);
$text=str_replace("[br]","<br>",$text);
$text=str_replace(":hack:","<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>",$text);
$text=str_replace(":announce:","
1
 ",$text);
$text=str_replace(":track:","Current track title&hellip;
1
 <img src='/assets/img/smile/cd.png' align='absmiddle' alt='Track'> <strong>TRACK:</strong> ",$text);
$text=str_replace(":artist:","Current artist name&hellip;
1
 <img src='/assets/img/smile/note.png' align='absmiddle' alt='Artist'> <strong>ARTIST:</strong> ",$text);
$text=str_replace(":plus:","I like this.
2
 <img src='/assets/img/smile/like.png' align='absmiddle' alt='Artist'> I like this",$text);
$text=str_replace(":minus:","I do not like this.
2
 <img src='/assets/img/smile/dislike.png' align='absmiddle' alt='Artist'> I do not like this",$text);

$fp = fopen($buffer_file,"a");
if( $header && $text !== false && $post == 1) {
  fputs($fp, "$type\n");
  fputs($fp, '<span class="msg-time">' . date('[h:i:s A]') . '</span> ' . $header . '<span class="msg-tex">' . $text . "</span>\n");
}
fclose($fp);
?>