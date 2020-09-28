
<?php

$conn=mysqli_connect('localhost','root','','tarun')
or die('unable to connect with my sql db');
if(isset($_REQUEST['submit9']))
{
$pass1=$_REQUEST['password'];
$emailid=$_REQUEST['email'];
$query="update registration set email='$emailid'where password='$pass1'";
$res=mysqli_query($conn,$query);	
if($res>0)
	echo "record found";
}


?>





<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Student update profile | LMS </title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/custom.min.css" rel="stylesheet">
</head>

<br>

<div class="col-lg-12 text-center ">
    <h1 style="font-family:Lucida Console">Library  System</h1>
</div>

<br>

<body class="login">


<div class="login_wrapper">

    <section class="login_content">
        <form name="form1" action="" method="post">
            <h1>email update</h1>

            <div>
                <input type="password" name="password" class="form-control" placeholder="enter password" required=""/>
            </div>
            <div>
              <br><input type="text" name="email" class="form-control" placeholder="enter new email" required=""/>
           </div>
		
			
			
            <div>

                <input class="btn btn-default submit" type="submit" name="submit9" value="update profile">
                <a class="login page" href="student.php">GO TO HOME PAGE</a>
				 <br><br><a class="login page" href="link.php">GO TO link PAGE</a>
		
               </div>
			   
            <div class="clearfix"></div>

            <div class="separator">
                <!--<p class="change_link">New to site?
                    <a href="registration.php"> Create Account </a>
                </p>-->

                <div class="clearfix"></div>
                <br/>
            </div>
        </form>
    </section>
 </body>
</html> 
			   
			   
			  
