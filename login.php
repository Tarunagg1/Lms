<?php
include"connection.php";
?>
<!DOCTYPE html>
<html>
<head>
<img src="image/tarun.jpg"height="250"width="1350">
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
<div align="right"><u><b><a href="se.php">Privacy policy</a></u></b></div>


<div class="col-lg-12 text-center ">
    <h1 style="font-family:Lucida Console">Library  System</h1>
</div>

<br>

<body class="login">


<div class="login_wrapper">

    <section class="login_content">
        <form name="form1" action="" method="post">
            <h1>User Login Form</h1>

            <div>
                <input type="text" name="username" class="form-control" placeholder="Username" required=""/>
            </div>
            <div>
                <input type="password" name="password" class="form-control" placeholder="Password" required=""/>
            </div>
            <div>

                <input class="btn btn-default submit" type="submit" name="submit2" value="Login">
                  <a class="reset_pass" href="admin.php">Go to admin page</a>
               	
				
               	   </div>

            <div class="clearfix"></div>

            <div class="separator">
                
              <br> <a class="reset_pass" href="otp.php">Lost your password?</a>

			   </p>

                <div class="clearfix"></div>
                <br/>


            </div>
        </form>
    </section>
	
</body>
</html>


<?php
if(isset($_REQUEST['submit2']))
{
	
	$user=$_REQUEST['username'];
	$pass=$_REQUEST['password'];
	
	$query="select username,password from registration where username='$user'and password='$pass'";
	$res=mysqli_query($link,$query);
	$row=mysqli_num_rows($res);
	if($row <1)
	{
		?>
		<div class="alert alert-danger col-lg-6 col-lg-push-3">
    <strong style="color:white"></strong> note : plese enter password correct.
</div>
<?php	
	}
	else
	{
		
		$data=mysqli_fetch_assoc($res);
		$session['id']=$id;
		session_start();
		$_SESSION['uid']=$id;
		header('location:student.php');

		
	}
}
?>