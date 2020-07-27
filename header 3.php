<h1>My Page</h1>
<?php

$redirect_page ='http://google.co.uk';
$redirect = true;
if($redirect==true){
header('location: '.$redirect_page);
}
?>