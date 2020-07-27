<?php

if(isset($_GET['day']) && isset($_GET['date']) && isset($_GET['year'])) {
	$day = $_GET['day'];
	$dat = $_GET['date'];
	if(!empty($day)&&!empty($date)&&!empty($year)) {
		echo 'It is '.$day.' '.$date.' '.$year;
	} else {
		echo 'fill in all field.';
	}

}

?>
<form action=" get variable 3.php" method="GET">
Day!<br><input type="text" name="day"><br>
Date!<br><input type="text" name="date"><br>
Year!<br><input type="text" name="year"><br><br>
<input type="submit" value="submit">
</form>
