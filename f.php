<?php
if(isset($_POST['name'])){
	$name=$_POST['name'];
	if(!empty($name)){
     $handle=fopen('name.txt','a');
     fwrite($handle,$name."\n");
     fclose($handle);
	}else{
		echo 'Please type a name.';
	}
}
?>
<form action="f.php" method="POST">
	Name:<br>
	<input type="text" name="name"><br><br>
	<input type="submit" value="SubmitS">
</form>