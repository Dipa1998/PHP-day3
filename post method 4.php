<?Php

$match = 'dipa1234';

if (isset($_POST['password'])) {
	$password = $_POST['password'];
	if(!empty ($password)) {
	if($password==$match) {
echo 'correct';
	} else {
		echo 'incorrect';
	}
} else {
	echo 'please enter the password';
}
} 
?>
<form action=" " method="POST">
password:<br>
<input type="password" name="password"><br><br>
<input type="submit" value ="submit">
</form>