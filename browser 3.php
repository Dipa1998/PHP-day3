<?php
$browser = get_browser(null, true);
$browser = strtolower($browser['browser']);
echo $browser;
die();
if($browser!='chrome') {
}
?>