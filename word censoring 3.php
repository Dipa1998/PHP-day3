<?php
$find =  array('alex','billy','dale');
$replace = array('a**x','b***y','d**e');
if (isset($_POST['user_input'])&&!empty ($_POST['user_input'] ) ) {
	$user_input= $_POST['user_input'] ;
	$user_input_new= str_replace($find, $replace, $user_input) ;
	echo user_input_new;
}

?>

<hr>

<form action="word censoring 3.php" method="POST">
<textarea name="user_input" rows="6" cols="30"><?php echo $user_input; ?></textarea><br><br>
<input type="submit" value="submit">
</form>