
<?php
session_start();
include "Class_db.php";

//if login has been set (this very page sets it though)
if(isset($_SESSION["login"]))
{
header("Location: logged_in_home.php");
}
else
if(isset($_POST["login"])) {
	
	$login = $db->quote($_POST['login']);
	$pass = $db->quote($_POST['pass']);

$result = $db->query("SELECT * FROM `pers_info` WHERE `login`=$login AND `pass`=$pass");

$check_user = mysqli_num_rows($result);

if($check_user>0){
while ($row=mysqli_fetch_assoc($result))
    {
$_SESSION['id'] = 	$row['id'];
$_SESSION['login'] = 	$row['login'];
$_SESSION['name'] =  $row['name'];
$_SESSION['birth'] =  $row['birth'];
$_SESSION['moto'] =  $row['moto'];
$_SESSION['photo_count'] = $row['photo_count'];
    }
header("Location: home.php");
}
//if user has'nt logged in yet redirect him to login.php
else 
{
	echo "<script>alert(‘Email or password is not correct, try again!’)</script>";
	header("Location: login.php");
}
}
else{
	header("Location: login.php");
}

?>
 