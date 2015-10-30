<!DOCTYPE html> 
<?php
session_start();


$titles = array(
	'Name', 'login', 'password', 'birth date', 'moto', 'gender', 'phone1', 'phone2', 'email1', 'email2', 'adress1', 'adress2', 'address3');
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
		<li class="selected"><a href="home.php">Home</a></li>
		<li><a href="blog.html">Blog</a></li>
		<li><a href="">photos</a></li>
		<li><a href="update_info.php">Update info</a></li>
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

<br>
<center><h2 style="font-family:COMIC SANS MS;">Update Details</h2></center>
<br>

<?php

 if(isset($_POST['title']))

foreach($titles as $i)
if($_POST['title'] == $i)
{
		header("Location: update_info3_$i.php");
}

	?>

	
<!--	Login Id    :   <input type="text" name="login"><br><br> <!--/**login id taken!!**/
	Password :  	<input type="text" name="pass"><br><br>
	Birth Date :  	<input type="text" name="birth"><br><br>
	moto    :       <textarea  name="moto" rows="5" cols="30"> </textarea>
	Gender  :
			<input type="radio" name="gender" value="female">Female
			<input type="radio" name="gender" value="male">Male
	phone 1 :  	<input type="text" name="ph1"><br><br>
	phone 2 :  	<input type="text" name="ph2"><br><br>
	email 1	:  	<input type="text" name="em1"><br><br>
	email 2 :  	<input type="text" name="em2"><br><br>
	Adress Line 1 :  	<input type="text" name="address1"><br><br>
	Adress Line 2 :  	<input type="text" name="address2"><br><br>
	Adress Line 3 :  	<input type="text" name="address3"><br><br>
-->	
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