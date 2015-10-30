<!DOCTYPE html> 
<?php
session_start();
require "Class_db.php";
$titles = array(
	'Name', 'login', 'password', 'birth date', 'moto', 'gender', 'phone1', 'phone2', 'email1', 'email2', 'adress1', 'adress2', 'address3');
	
if(!isset($_SESSION['id']))
{
	header("Location : home.php");
}
?>

<html>

<head>
    <meta charset="utf-8">
    <title>Update Info</title>
    <link rel="stylesheet" type="text/css" href="ftree.css">
  </head> 
  
  <body>
  
    <header class="top">
<!--      <img id="headerLogo"
           src="../images/headerLogo.gif" alt="Starbuzz Coffee header logo image">
      <img id="headerSlogan"
          src="../images/headerSlogan.gif" alt="Providing all the caffeine you need to power your life.">-->
    </header>
    
	<nav>
	<ul>
		<li class="selected"><a href="logged_in_home.php">Home</a></li>
		<li><a href="blog.html">Blog</a></li>
		<li><a href="">photos</a></li>
		<li><a href="update_info1.php">Update info</a></li>
		<li><a href="logout.php">Logout</a></li>
	</ul>
	
<div id="tableContainer">
	<div id="tableRow">	
	
<section id="left_bar"> 
      <h3> <a> discounts </h3> </a>
      <p align="center"> <span class="first"> awsome </span>,  <span class = "second"> discs on foods </span> </p>
      <h3> <a> request notes </h3> </a>
      <p align="center"> <span class="first"> request </span> <span class="second"> dr for notes </span> </p>
      <h3> <a> Contact Us </h3> </a>
      <p align="center"> <span class="first"> ur suggestions </span> <span class="second"> and reviews are important </span> </p>   
      </section>	
	
<section id="updateInfo">

<?php 
$result = $db->query("select * from pers_info where id = $_SESSION[id]");
 $row=mysqli_fetch_assoc($result);
 ?>
<table name="tab">
<h2 align="center"> Current Details </h2>

<br>
Name : <?php echo $row['name'];  ?>

<br>
Birth : <?php echo $row['birth'];  ?>

<br>
Gender : <?php echo $row['gender'];  ?>

<br>
Moto : <?php echo $row['moto'];  ?>

<br>
login : <?php echo $row['login'];  ?>

<br>
Pass : <?php echo $row['pass'];  ?>

<br>
Address1 : <?php echo $row['address1'];  ?>

<br>
Address2 : <?php echo $row['address2'];  ?>

<br>
Address3 : <?php echo $row['address3'];  

$result = $db->query("select * from contacts where c_id = $_SESSION[id]");
$row=mysqli_fetch_assoc($result);?>

<br>
phone1 : <?php echo $row['ph1'];?>

<br>
emial1 : <?php echo $row['em1'];?>

<br>
phone2 : <?php echo $row['ph2'];?>

<br>
email2 : <?php echo $row['em2'];?>

</table>
<br>
<center><h2 style="font-family:COMIC SANS MS;">Update Details</h2></center>
<br>
<h2>Select the field you wish to update.</h2>
<form action="update_info2.php" method="post" >
<select name="title" class="s2">


			<?php
			foreach ($titles as $value){
				printf('<option>%s</option>', $value);
			}
			?>
			</select>
			<pre>
<br>

	
	<input type="submit" value="Submit">
	</pre>
	</form>
	</section>
	
<aside>
      <p class="beanheading">
        <img src="images/bag.gif" alt="Bean Machine bag">
        <br>
        ORDER ONLINE
        with the 
        <a href="form.html">BEAN MACHINE</a>
        <br>
        <span class="slogan">
            FAST <br>
            FRESH <br>
            TO YOUR DOOR <br>
        </span>
      </p>
      <p>
        Why wait?  You can order all our fine coffees right from the Internet with our new, 
        automated Bean Machine.  How does it work?  Just click on the Bean Machine link, 
        enter your order, and behind the scenes, your coffee is roasted, ground 
        (if you want), packaged, and shipped to your door.
      </p>
    </aside>
	
	</div>
	</div>
	  <footer>
      &copy; 2012, Starbuzz Coffee
      <br>
      All trademarks and registered trademarks appearing on 
      this site are the property of their respective owners.
    </footer>
</font>
<pre><h1><a href="home.php">     Back </a></h1></pre>
</body>
</html>