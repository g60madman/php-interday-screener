<?php
//grab info from marketwach.com
$graburl = file_get_contents("");

//clean data
$string = preg_replace('/[^A-Za-z\-]/', '', $graburl);

//find stock symbol between colahrefinvestingstock & profile lines
preg_match_all("/colahrefinvestingstock(.*?)profile/", $string, $matches, PREG_SET_ORDER);

//print stock symbols on it's own line after cleaning colahrefinvestingstock & profile from text
foreach ($matches as $val) {
	echo str_replace(array('colahrefinvestingstock', 'profile'), array('', '<br>'), $val[0]);
}

?>
