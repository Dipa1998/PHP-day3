<?php
$filename='name.txt';
$handle=fopen($filename, 'r');
$datain=fred($handle,filesize($filename));
$names_array=explode(',', $datain);
echo $names_array[0];
?>