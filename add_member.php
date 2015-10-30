<title>
Add customer
</title>

<style>
	a:link {color:#000000;}
	a:visited {color:#B80000;}
	a:hover {color:#FF0000;}
	a:active {color:#0000FF;}
	a:link { text-decoration:none; }
	a:visited { text-decoration:none; }
	a:hover { text-decoration:node; }
	a:active { text-decoration:node; }
	h1 { font-size: 25px; color:#C00000; }
	h2 { font-size: 30px; color:#C00000; }
</style>
<br>
<center><h2 style="font-family:COMIC SANS MS;">Add Details</h2></center>
<br>

<body bgcolor="LightYellow">
<form action="add_member_2.php" method="post" >
<br>
<font size="4" face="verdana">
<pre>
	Member Name	<input type="text" name="name"><br><br>
	Login Id		        <input type="text" name="login"><br><br> <!--/**login id taken!!**/-->
	Password		        <input type="text" name="pass"><br><br>
	Birth Date		        <input type="text" name="bd"><br><br>
	moto	<input type="text" name="mot"><br><br>
		Gender  :
			<input type="radio" name="gender" value="F">Female
			<input type="radio" name="gender" value="M">Male
	phone 1	<input type="text" name="ph1"><br><br>
	phone 2	<input type="text" name="ph2"><br><br>
	email 1	<input type="text" name="em1"><br><br>
	email 2	<input type="text" name="em2"><br><br>
	Address Line 1		<input type="text" name="ad1"><br><br>
	Address Line 2 	<input type="text" name="ad2"><br><br>
	Address Line 3		<input type="text" name="ad3"><br><br>
	<input type="submit" value="Submit">
</pre>
</font>
<pre><h1><a href="database.php">     Back </a></h1></pre>
</body>
</html>