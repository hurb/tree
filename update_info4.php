<!DOCTYPE html> 
<?php
session_start();
include "Class_Db.php";

$titles = array(
	'Name', 'login', 'password', 'birth date', 'moto', 'gender', 'phone1', 'phone2', 'email1', 'email2', 'adress1', 'adress2', 'address3');
?>

<html>
<?php
	if(isset($_POST['inputName']))
	{
	$name = $db->quote($_POST['inputName']);
	$db->query("update pers_info set name = $name where id = $_SESSION[id]");
	
if(!$db->error())
{
	echo "succesfully updated the field";
//	header("Location : home.php");																											/**why does'nt this line work??**/
	header("Location: logged_in_home.php");
}
else echo "trouble while inserting into contacts" . $db->error();
}
?>
</html>