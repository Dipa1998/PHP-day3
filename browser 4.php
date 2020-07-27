<?php
$browser = get_browser(null, true);
$browser = strtolower($browser['browser']);
echo $browser;
die();
if($browser!='chrome') {
	echo 'You\'re not using google chrome.please do!';
}
?>