<?php
$time = time();



$time_now = date ('D M Y @ H:i:s', $time);
$time_modified = date ('D M Y @ H:i:s', $time-60);
echo 'The time now is '.$time_now.'<br>The time modified is '.$time_modified;
echo $time_modified;
?>