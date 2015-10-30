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


//execute query base on params
if ($result=$db->query("select * from pers_info where `name`= $name"))
  {
  	
  // Fetch one and one row
  //query resulted in no successful selection of any row, $result has 0 rows
  while ($row=mysqli_fetch_row($result))
    {
    printf ("%s (%s)\n",$row[0],$row[1]);
    }

     // Free result set
  mysqli_free_result($result);
  }
  
  ?>
