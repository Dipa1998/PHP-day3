<?php
$handle=fopen('names.txt', 'w');
fwrite($handle,'tiya'."\n");
fwrite($handle, 'torsa');
fclose($handle);
echo 'Written.';
?>