 <DOCTYPE html>
 <?php session_start();
 
if(!isset($_SESSION["login"]))
{
header("Location: home.php");
}
 
 ?>
 <html>
  <head>
    <meta charset="utf-8">
    <title>Family Tree</title>
    <link rel="stylesheet" type="text/css" href="ftree.css">
  </head> 
  
  <body>
    <header class="top">
      <img id="headerLogo"
           src="../images/headerLogo.gif" alt="Starbuzz Coffee header logo image">
      <img id="headerSlogan"
          src="uploaded_files/<?php echo "$_SESSION[id]"."_0.png";?>" height=108 width=98 alt="<?php echo "uploaded_files/$_SESSION[id]"."_0.png";?>">
    </header>

	<nav>
	<ul>
		<li class="selected"><a href="">Home</a></li>
		<li><a href="blog.php">Blog</a></li>
		<li><a href="photos.php">photos</a></li>
		<li><a href="update_info1.php">Update info</a></li>
		<li><a href="logout.php">Logout</a></li>
	</ul>
</nav>
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
      
<section id="main"> 
		<?php $dt = date("d/m/Y");
						$tm = date("h:i:sa");
						echo $tm . ", " .$dt; ?>
      <h3> <a> discounts </h3> </a>
      <p align="center"> <span class="first"> <?php  echo $_SESSION['id'] .' '.$_SESSION["login"];  ?> awsome </span>,  <span class = "second"> discs on foods </span> </p>
      <h3> <a> request notes </h3> </a>
      <p align="center"> <span class="first"> request </span> <span class="second"> dr for notes </span> </p>
      <h3> <a> Contact Us </h3> </a>
      <p align="center"> <span class="first"> ur suggestions </span> <span class="second"> and reviews are important </span> </p>   
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
    
    	</div> <!-- tableRow -->
	</div> <!-- tableContainer -->

    <footer>
      &copy; 2012, Starbuzz Coffee
      <br>
      All trademarks and registered trademarks appearing on 
      this site are the property of their respective owners.
    </footer>
	
	
	</body>
	</html>