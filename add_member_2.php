<?php

//require_once("../using php with mysql - the right way/class.Class_Db.php");
include "Class_Db.php";

//connect to Db
$db->connect();


//read input params form previous form
$name = $db->quote($_POST['name']);
$bd = $db->quote($_POST['bd']);
$moto = $db->quote($_POST['mot']);
$ph1 = $db->quote($_POST['ph1']);
$ph2 = $db->quote($_POST['ph2']);
$em1 = $db->quote($_POST['em1']);
$em2 = $db->quote($_POST['em2']);
$login = $db->quote($_POST['login']);
$pass = $db->quote($_POST['pass']);
$ad1 = $db->quote($_POST['ad1']);
$ad2 = $db->quote($_POST['ad2']);
$ad3 = $db->quote($_POST['ad3']);
 $gender = $db->quote($_POST['gender']);
//insert data according to the params read from prev form
//INSERT INTO PERS_INFO
//mysqli_query() - > return value -> For successful SELECT, SHOW, DESCRIBE, or EXPLAIN queries it will return a mysqli_result object. For other successful queries it will return TRUE. FALSE on failure

$result = $db->query("insert into pers_info(`name`, `birth`, `gender`, `moto`, `login`, `pass`, `address1`, `address2`, `address3`) values ($name, $bd, $gender, $moto, $login, $pass, $ad1, $ad2, $ad3)");
if(!$db->error())
{
	/*$q_id = $db->query("select last_insert_id()");
	while ($row=mysqli_fetch_row($q_id))
    {
    printf ("%s\n",$row[0]);
    $id = $row[0];
    }
printf ("%s\n",$id);*/
header("Location:home.php");

}
else 
{
	echo " trouble inserting into pers_info" . $db->error();
}


//insert data according to the params read from prev form
//INSERT CONTACTS (first set)
$result = $db->query("insert into contacts(`c_id`, `ph1`,  `em1`, `ph2`,  `em2`) values ($id, $ph1, $em1, $ph2, $em2)");
if(!$db->error())
{
/*	$q_c_id = $db->query("select last_insert_id()");
while ($row=mysqli_fetch_row($q_c_id))
    {
    printf ("%s\n",$row[0]);
    $c_id = $row[0];
    }*/
}
else
{
	echo "trouble while inserting into contacts" . $db->error();
}

?>