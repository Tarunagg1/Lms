
<?php
$conn=mysqli_connect('localhost','root','','Tarun')
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
include"stheder.php";
include"connection.php";
?>
        <!-- page content area main -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>FOR ANY QUERY</h3>
                    </div>

                    <div class="title_right">
                        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>
                <div class="row" style="min-height:500px">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>student query</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
							



            

            <div><form name="form1"action=""method="post">
							<table>
			     <div>
                        <br><input type="password" class="form-control" placeholder="enter password for info" name="enr"/>
                    </div>
						  </td>
							<td>
							
							 <input class="form-control bta-bta-defult" type="submit" name="submit2" value="search">
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
                        
                        
                 <br> <div><a href="history.php"class="btn btn-default submit">Go to query history>></i></a></div>      
                        
			
			<div class="separator">
			</div>
			
    <div class="alert alert-success col-lg-6 col-lg-push-3">
        you will get answer in 24 hours on your email id
    </div>
   
    
    
			        </form>
    </section>
</head>
<?php
include"footer.php";
?>