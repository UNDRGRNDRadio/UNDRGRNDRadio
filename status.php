<?
include("config.php");
include("timeout.php");
$lines = file ($users_file);
$num_lines = count ($lines);
echo "<a class='chatcount' href='".$path_to_chat."'>Chatr (".$num_lines.")</a>";
?>