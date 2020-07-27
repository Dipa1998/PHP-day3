<?php

if (isset($_POST['text']) &&isset($_POST['searchfor'])&&isset($_POST['replacewith'] ) ) {
	echo $text = $_POST['text'];
	echo $Search = $_POST['searchfor'];
	echo $replace = $_POST['replacewith'];
}


?>
<form action="find & replace application 1.php" method="POST">
	<textarea name="text" rows="6" cols="30"></textarea><br><br>
	Search for:<br>
	<input type="text" name="searchfor"><br><br>
	replace with:<br>
	<input type="text" name="replacewith"><br><br>
	<input type="submit" value="Find and replace">
</form>