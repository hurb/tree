<!DOCTYPE html> 
<?php
session_start();
include "Class_Db.php";

$titles = array(
	'Name', 'login', 'password', 'birth date', 'moto', 'gender', 'phone1', 'phone2', 'email1', 'email2', 'adress1', 'adress2', 'address3');
?>

<html>

<form action="update_info4.php" method="post" >
<br>
<pre>
Name :  	<input type="text" name="inputName"><br><br>
	<input type="submit" value="Submit">
	</pre>
	</form>
	
	</section>
	</html>