<?php

$conn=mysqli_connect('localhost','root','','tarun')
or die('unable to connect with my sql db');
if(isset($_REQUEST['submit5']))
{
$aname=$_REQUEST['name'];
$aid=$_REQUEST['email'];
$apass=$_REQUEST['password'];
$query="update admin set password='$apass'where adminname='$aname' and emailid='$aid'";
$res=mysqli_query($conn,$query);	
	  $count=mysqli_fetch_row($res);
	

if($count==0)
{
?>
<script>
function funky()
{
alert("register successfully")
}	
funky();
</script>

<?php
}
else
{
$_SESSION["library"]=$_REQUEST["name"];	
?>
<script type="text/javascript">
window.location="index.php";
</script>
<?php
}}
?>


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
            <h1>reset admin password</h1>

            <div>
                <input type="text" name="name" class="form-control" placeholder="name" required=""/>
            </div>
            <div>
                <input type="text" name="email" class="form-control" placeholder="email id" required=""/>
            </div>
			 <div>
                <input type="password" name="password" class="form-control" placeholder="password" required=""/>
            </div>
			 <div>
                <input type="text" name="conform" class="form-control" placeholder="conform password" required=""/>
            </div>
			<div>
			 <input class="btn btn-default submit" type="submit" name="submit5" value="reset pass">
			 <a class="reset_pass" href="admin.php">GO TO ADMIN LOGIN PAGE </a>
			 </div>
			           
			</form>
			  <div class="separator">
						 </div>
			</section>
			</body>
			</head>
			</html>