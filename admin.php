




<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>admin login Form | LMS </title>

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
            <h1>Admin Login here</h1>

            <div>
                <input type="text" name="name" class="form-control" placeholder="admin name" required=""/>
            </div>
			 <div>
                <input type="text" name="email" class="form-control" placeholder="email id" required=""/>
            </div>
            <div>
                <input type="password" name="password" class="form-control" placeholder="Password" required=""/>
            </div>
            <div>

                <input class="btn btn-default submit" type="submit" name="submit4" value="Login">
               <a class="reset_pass" href="adminreset.php">RESET ADMIN PASSWORD</a>
			   </div>
				 <div class="clearfix"></div>

            <div class="separator">
			<a class="reset_pass" href="index.php">LOGIN PAGE</a>
          

               <!-- <div class="clearfix"></div>
                <br/>-->


            </div>
				
            </div>
        </form>
    </section>
	<?php
$conn=mysqli_connect('localhost','root','','tarun')
or die('unable to connect with my sql db');
if(isset($_REQUEST['submit4']))
{
	$aname=$_REQUEST['name'];
	$id=$_REQUEST['email'];
    $password=$_REQUEST['password'];
	$query="select adminname,emailid,password from admin where adminname='$aname'and emailid='$id'and password='$password'";
	$res=mysqli_query($conn,$query);
    $count=mysqli_fetch_row($res);
	
		
if($count==0)
{
?>
<div class="alert alert-danger col-lg-6 col-lg-push-3">
    <strong style="color:white"></strong> note : plese enter password correct.
</div>	
<?php
}
else
{
$_SESSION["library"]=$_REQUEST["name"];	
?>
<script type="text/javascript">
window.location="home.php";
</script>
<?php
}}
?>

</head>
</head>