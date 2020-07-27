<?php
if (isset($_POST['roll'])) {
	$rand = rand(1, 6);
	echo 'you rolled a '.$rand;
}
?>
<form action="random number 5.php" method="POST">
	<input type="submit" name="roll" value="Roll dice.">

</form>
