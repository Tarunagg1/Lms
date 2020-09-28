<?php

$conn=mysqli_connect('localhost','root','','tarun')
or die('unable to connect with my sql db');
if(isset($_REQUEST['submit3']))
{
$uname=$_REQUEST['username'];
$contact=$_REQUEST['number'];
$rollno=$_REQUEST['rollno'];
$pass=$_REQUEST['password'];
$query="update registration set password='$pass'where username='$uname' and contactno='$contact' and rollno='$rollno'";
$res=mysqli_query($conn,$query);	
if($res>1)

	echo "record  found";
else
{
	echo "record not found";
}
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

    <title>Student Login Form | LMS </title>

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
            <h1>reset password form</h1>

            <div>
                <input type="text" name="username" class="form-control" placeholder="Username" required=""/>
            </div>
            <div>
                <input type="number" name="number" class="form-control" placeholder="contact number" required=""/>
            </div>
			 <div>
              <br>  <input type="number" name="rollno" class="form-control" placeholder="roll no" required=""/>
            </div>
			<div>
                <br><input type="password" name="password" class="form-control" placeholder="new password" required=""/><br>
            </div>
			<div>
                <input type="text" name="conform" class="form-control" placeholder="conform password" required=""/>
            </div>
            <div>

                <input class="btn btn-default submit" type="submit" name="submit3" value="reset pass">
                <a class="login page" href="index.php">GO TO LOGIN PAGE</a>
		
            </div>
			   
            <div class="clearfix"></div>

            <div class="separator">
                

                <div class="clearfix"></div>
                <br/>
            </div>
			</div>
        </form>
    </section>
 </body>
</html> 		  
