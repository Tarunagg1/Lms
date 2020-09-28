

<?php
$conn=mysqli_connect('localhost','root','','tarun')
or die('unable to connect with my sql db');
if(isset($_REQUEST['submit1']))
{
	$fname=$_REQUEST['firstname'];
	$lname=$_REQUEST['lastname'];
	$username=$_REQUEST['username'];
	$password=$_REQUEST['password'];
	$email=$_REQUEST['email'];
	$contact=$_REQUEST['contact'];
	$sem=$_REQUEST['sem'];
        $branch=$_REQUEST['branch'];
    $rollno=$_REQUEST['rollno'];
	$query="insert into registration value('$fname','$lname','$username','$password','$email','','$contact','$sem','$branch','$rollno')";
	
	$res=mysqli_query($conn,$query);
	
	if($res>0)
		echo "record inserted";
}





?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Student Registration Form | LMS </title>


    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/custom.min.css" rel="stylesheet">
	
</head>

<br>

<div class="col-lg-12 text-center ">
    <h1 style="font-family:Lucida Console">Library Management System</h1>
</div>


<body class="login" style="margin-top: -20px;">



    <div class="login_wrapper">

            <section class="login_content" style="margin-top: -40px;">
                <form name="form1" action="" method="post">
                    <h2>User Registration Form</h2><br>

                    <div>
                        <input type="text" class="form-control" placeholder="firstname" name="firstname" required=""/>
                    </div>
                    <div>
                        <input type="text" class="form-control" placeholder="lastname" name="lastname" required=""/>
                    </div>

                    <div>
                        <input type="text" class="form-control" placeholder="Username" name="username" required=""/>
                    </div>
                    <div>
                        <input type="password" class="form-control" placeholder="Password" name="password" required=""/>
                    </div>
                    <div>
                        <input type="text" class="form-control" placeholder="email" name="email" required=""/>
                    </div>
                    <div>
                        <input type="number" class="form-control" placeholder="contact" name="contact" required=""/>
                    </div>
                    <div>
                        <br><input type="text" class="form-control" placeholder="sem" name="sem" required=""/>
                    </div>
                    <div>
                    <select class="form-control selectpicker"placeholder="branch" name="branch" required="">
     
<option>select course</option>
<option>B.A</option>
<option>M.A</option>
<option>B.COM</option>
<option>M.COM</option>
<option>LLB</option>
<option>B.A LLB</option>
<option>BBA LLB</option>
<option>FINE ARTS</option>
<option>B.TECH(civil)</option>
<option>B.TECH(csc)</option>
<option>B.TECH(mecanical)</option>
<option>B.TECH(electronic)</option>
<option>BCA</option>
<option>MCA</option>
<option>BBA</option>
<option>MBA</option>
<option>B.SC(computer science)</option>
<option>B.SC(maths honours)</option>
<option>B.SC(physis honours)</option>
<option>B.SC(life scince)</option>
<option>B.SC(chemistry honours)</option>
<option>B.SC(english honours)</option>
<option>B.SC(biology honours)</option>
<option>B.SC(microbiology honours)</option>
<option>B.PHARMA</option>
<option>M.PHARMA</option>
<option>BDS</option>
<option>MDS</option>

</select>
                    </div>
                    
                    <div>
                      <br> <input type="text" class="form-control" placeholder="rollno" name="rollno" required=""/>
                    </div>
				
					<div class="col-lg-12  col-lg-push-3">
                        <input class="btn btn-default submit " type="submit" name="submit1" value="Register">
                    </div>
					<b><a class="login" font size="5" href="login.php">LOGIN PAGE</a><b>

                </form>
            </section>



    </div>


        
  <div class="alert alert-info">
  <strong>Info!</strong> Registration successfully, You will get email when your account is approved.
</div>


</body>
</html>
