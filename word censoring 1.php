<?php
if(isset($_POST['user_input'])&&!empty($_POST['user_input'])) {
	echo 'Works.';
}
?>
<hr>
<form action="word censoring 1.php" method="POST">
<textarea name="user_input" rows="6" cols="30"></textarea><br><br>
<input type="submit" value="submit">
</form>