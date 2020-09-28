
<?php
$conn=mysqli_connect('localhost','root','','tarun')
or die('unable to connect with my sql db');
if(isset($_REQUEST['submit6']))
{
	$roll=$_REQUEST['roll'];
	$uname=$_REQUEST['name'];
	$date=$_REQUEST['date'];
	$query=$_REQUEST['email'];
	$email=$_REQUEST['query'];

	$query="insert into help value('','$roll','$uname','$date','$query','$email','')";
	
	$res=mysqli_query($conn,$query);
	
	if($res>0)
		echo "query successfully submited";
}

?>


<?php
include"connection.php";
?>
       

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> LMS | help center </title>

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
            <h1>Lms help center</h1>>
							



            

            <div><form name="form1"action=""method="post">
							<table>
			     <div>
                        <br><input type="text" class="form-control" placeholder="enter password for info" name="enr"/>
                    </div>
						  </td>
							<td>
							
							<br> <input class="form-control bta-bta-defult" type="submit" name="submit2" value="search">
							 </td>
						 </tr>
                                </table>
								
							 
							 
							 <?php
								if(isset($_POST['submit2']))
								{
									$res5=mysqli_query($link,"select * from registration where password='$_POST[enr]'");
									while($row5=mysqli_fetch_array($res5))
									{
										$username=$row5["username"];
										$email=$row5["email"];
								       $rollno=$row5["rollno"];
									}
									?>
							 
							  <table class="table table=bordered">
							<tr>	
							 
			<td><input type="varchar"class="form-control" placeholder="roll no"
			                    name="roll" value="<?php echo$rollno; ?>"/>
                        </td></tr>
						
				</tr>						 
			<br></td><input type="text"class="form-control" placeholder="username"
			                    name="name" value="<?php echo$username; ?>"/>
                   </td></tr>

				   <tr>	
               <td> <input type="text"class="form-control" placeholder="date"
			                      name="date" value="<?php echo date("d-m-Y"); ?>"/>
                              </td>
							  </tr>
				   	
					<tr>								 
			<td><input type="text"class="form-control" placeholder="email"
			                    name="email" value="<?php echo$email; ?>"/>
				</td></tr>
				   
	
	<tr>
			<td> <textarea name="query" class="form-control">
				  </textarea>
				  </tr></td>
		
				   
				 <tr>  
           <td><input class="btn btn-default submit" type="submit" name="submit6" value="submit">
			</td></tr>
			</table>				   
				
				<?php
				
				}
				
				?>
				
			</form>
			
			
			</div>
                        
                        
              
                        
			
			<div class="separator">
			</div>
			
    <div class="alert alert-success col-lg-6 col-lg-push-3">
        you will get answer in 24 hours on your email id
    </div>
   
    
    
			        </form>
    </section>
</head>
