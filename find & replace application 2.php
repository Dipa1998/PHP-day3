<?php

if (isset($_POST['text']) &&isset($_POST['searchfor'])&&isset($_POST['replacewith'] ) ) {
	$text = $_POST['text'];
	$Search = $_POST['searchfor'];
	$replace = $_POST['replacewith'];
	if(!empty($text)&&!empty($search)&&!empty($replace)) {
		echo 'OK.';
		} else {
		echo 'Please fill in all fields.';
	}
}


?>
<form action="find & replace application 2.php" method="POST">
	<textarea name="text" rows="6" cols="30"></textarea><br><br>
	Search for:<br>
	<input type="text" name="searchfor"><br><br>
	replace with:<br>
	<input type="text" name="replacewith"><br><br>
	<input type="submit" value="Find and replace">
</form>