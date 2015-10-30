<?php
session_start();
//require_once("../using php with mysql - the right way/class.Class_Db.php");
include "Class_Db.php";

//connect to Db
$db->connect();


//read input params form previous form
$title = $db->quote($_POST['title']);
$content = $db->quote($_POST['content']);
$dt = date("d/m/Y");
$tm = date("h:i:sa");
$dtm = $db->quote($tm . ", " .$dt);
echo$dtm. "helloooo";
 $m_id = ($_SESSION['id']);
//insert data according to the params read from prev form
//INSERT INTO PERS_INFO
//mysqli_query() - > return value -> For successful SELECT, SHOW, DESCRIBE, or EXPLAIN queries it will return a mysqli_result object. For other successful queries it will return TRUE. FALSE on failure

$result = $db->query("insert into blog(`m_id`, `dtm`, `title`, `content`) values ($m_id, $dtm, $title, $content)");
if(!$db->error())
{
	/*$q_id = $db->query("select last_insert_id()");
	while ($row=mysqli_fetch_row($q_id))
    {
    printf ("%s\n",$row[0]);
    $id = $row[0];
    }
printf ("%s\n",$id);*/
header("Location:blog.php");

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