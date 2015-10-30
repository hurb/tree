<!doctype html>

<html>
<?php

$data = array(0, 1, 2, 3, 4, 5);

?>
  <head>
    <meta charset="utf-8">
    <title>Family Tree</title>
      <link type="text/css" rel="stylesheet" href="../style.css">
  </head>

  <body>
      <h1 align="center">Welcome to the <em> Root </em> of the Tree</h1>
      <!-- Or <center> hello </center>-->
      <p align="center">
          <a href="tree.php#lion"> <img src="../1.jpg"  title="lion cub!" alt="beauty" width = 400> </a>
	</p>
    <h2>
        Root is <em><font face="comic sans ms">as far as we go</font> </em>upwards in our family tree.
    </h2>
        <p class="info">
            write info about root here
        </p>
      
      1
      <h2>
         Root's children :<br>
      </h2>
      <p> print children here using <q>an elegent DS</q> and a loop</p>
      
      2 <br>
      <h2 id="lion">spotted lion cub!!</h2>
              <?php

$x = 0;
while($x <= 5)
    echo $data[$x++] . " "; 
  ?>
<br>  
<!--          <ul>-->
3
    <ol>
              <li></li>
              <ul>
					<li></li>
					<li></li>              
              </ul>
              <li></li>
<!--          </ul>-->
            </ol>        
            
            
            4
            <dl>
<dt>&lt;rajbir singh&gt;</dt>
<dd><son of balbir singh><br>and<br>jasbir kaur</dd>            
            </dl>
              
      5
      <br>
      <a href="Root.html" target="_blank" title="open link in a new tab!"> link to a new tab</a>


  </body>
    
</html>
