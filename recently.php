<?php

include"connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>LIBRARY@LMS</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */
header {
  background-color: #666;
  padding: 10px;
  text-align: center;
  font-size: 35px;
  color: white;
}

/* Create two columns/boxes that floats next to each other */
nav {
  float: left;
  width: 20%;
  height: 500px; /* only for demonstration, should be removed */
  background: #ccc;
  padding: 20px;
}

/* Style the list inside the menu */
nav ul {
  list-style-type: none;
  padding: 0;
}

article {
  float: left;
  padding: 20px;
  width: 80%;
  background-color: #f1f1f1;
  height: 500px; /* only for demonstration, should be removed */
}

/* Clear floats after the columns */
section:after {
  content: "";
  display: table;
  clear: both;
}

/* Style the footer */
footer {
  background-color: #777;
  padding: 10px;
  text-align: center;
  color: white;
}

/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
@media (max-width: 600px) {
  nav, article {
    width: 100%;
    height: auto;
  }
}
</style>
</head>
<body>

<header>
  <h2><div align="Center"><font size="40"><font face="TIMES NEW ROMAN"><u><b>BOOK BUDDY UPDATES INFO</font></font></font></u></b></font></head>
</div> </h2>
</header>

<section>
  <nav>
    <ul>
     <img src="lib1.jpg"height="240"width="300">
     <img src="lib4.jpg"height="220"width="300">
     
    </ul>
  </nav>
  
  <article>
   
<marquee><u><b><font color="blue"><font size="7">FOR REGULAR UPDATE ARE HERE(BOOK BUDDY) </u></b> </font></font></font></marquee>
 <hr>
 <marquee><b><font color="orange"><font size="6">DOWNLOAD OUR NEW APP WHICH IS RELESE ON PLAYSTORE HAPTY BOOK BUDDY CLICK:-<a href="https://play.google.com/store/apps/details?id=com.wHaptyBookBuddy_8634135">Play store</a> </u></b> </font></font></font></marquee>
<hr>
<font colour="red"> <font size="5"><marquee>WE LAUNCH NEW BOOK AND TITLE FOR YOU REGISTER NOW TO ACCESS LOTS OF SERVICES</font></font></marquee>
 <hr>
 <marquee><b><font color="gray"><font size="6">E-BOok are also avilable as soon as possible</u></b> </font></font></font></marquee>
<hr>
<marquee><b><font color="black"><font size="5">Download our new hapty apps on play store just serch hapty keyword on playstore</u></b> </font></font></font></marquee>
<hr>
<marquee><b><font color="yellow"><font size="5">Any query you can mail us SUPPORT@LMS.COM</u></b> </font></font></font></marquee>
 <hr>
 
 
  </article>
</section>

<footer>

<?php
include"footer.php";

?>
</footer>

</body>
</html>


