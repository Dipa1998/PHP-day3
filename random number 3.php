<?php
if (isset($_POST['roll'])) {
	$rand = rand();
	echo 'you rolled a '.$rand;
}
?>
<form action="random number 3.php" method="POST">
	<input type="submit" name="roll" value="Roll dice.">

</form>
