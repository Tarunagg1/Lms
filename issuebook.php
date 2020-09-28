<?php
include"header.php";
include"connection.php";
?>

<?php
$conn=mysqli_connect('localhost','root','','Tarun')
or die('unable to connect with my sql db');
if(isset($_REQUEST['submit10']))
{
	$roll=$_REQUEST['rollnum'];
	$name=$_REQUEST['studentname'];
	$sem=$_REQUEST['studentsem'];
	$num=$_REQUEST['studentcontact'];
	$email=$_REQUEST['studentemail'];
	$book=$_REQUEST['bookname'];
	$issue_date=$_REQUEST['bookissuedate'];
	$username=$_REQUEST['studentusername'];
	
	echo $query="INSERT INTO `issue_book`(`rollno`, `student_name`, `student_sem`, `student_contact`, `student_email`, `book_name`, `book_issue_date`,`student_username`) VALUES('$roll','$name','$sem','$num','$email','$book','$issue_date','$username')";
      
	
	$res=mysqli_query($conn,$query);
	
	if($res>0)
		echo "<script>alert('data inserted')</script>";
}

?>


        <!-- page content area main -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>FOR ISSUE BOOK</h3>
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
                                <h2>issue book</h2>
								

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
							 <form name="form1"action=""method="post">
							
								     <div>
                        <br><input type="text" class="form-control" placeholder="enter rollno" name="enr"/>
                    </div
	
							
						<table>	<td>
	         <br> <input class="form-control bta-bta-defult" type="submit" name="submit2" value="search">
							       
			             </td>
						 </tr>
                                </table>
								
								<?php
								if(isset($_POST['submit2']))
								{
									$res5=mysqli_query($link,"select * from registration where rollno='$_POST[enr]'");
									if($res5 == 0){
									    echo "<script>alert('not found')</script>";
									}
									while($row5=mysqli_fetch_array($res5))
									{
										$firstname=$row5["firstname"];
										$lastname=$row5["lastname"];
										$username=$row5["username"];
										$email=$row5["email"];
										$contactno=$row5["contactno"];
										$sem=$row5["sem"];
										$rollno=$row5["rollno"];
									}	
									?>
							      <table class="table table=bordered">
							<tr>	
               <td> <input type="text"class="form-control" placeholder="roll no"
			                    name="rollnum" value="<?php echo$rollno; ?>"/>
                              </td>
							  </tr>
							  	<tr>	
               <td> <input type="text" class="form-control" placeholder="student name"
                                name="studentname" value="<?php echo$firstname.''.$lastname; ?>" />
                              </td>
							  </tr>
							  <tr>	
               <td> <input type="text" class="form-control" placeholder="student sem" 
			          name="studentsem" value="<?php echo$sem; ?>"/>
                              </td>
							  </tr>
							  <tr>	
               <td> <input type="number" class="form-control" placeholder="student contact"
			       name="studentcontact"value="<?php echo$contactno; ?>"/>
                              </td>
							  </tr>
							  <tr>	
               <td> <input type="text" class="form-control" placeholder="student email"
			                   name="studentemail"value="<?php echo$email; ?>" />
                              </td>
							  </tr>
							  <tr>
							  <td>
							  <select name="bookname" class="form-control selectpicker">
							  <?php
								$res=mysqli_query($link,"select books_name from add_book");
								while($row=mysqli_fetch_array($res))
								{
									  echo"<option>";
							  echo$row["books_name"];
							  
							         echo"</option>";
									
								}
							  ?>
							
							  </select>
							   <tr>	
               <td> <input type="text"class="form-control" placeholder="books issue date"
			                      name="bookissuedate" value="<?php echo date("d-m-Y "); ?>"/>
                              </td>
							  </tr>
                             <tr>	
               <td> <input type="text"class="form-control" placeholder="student username"
			                          name="studentusername" value="<?php echo$username; ?> "/>
                              </td>
							  </tr>
							  <tr>
							   <td><input class="form-control" type="submit" name="submit10" value="submit query">
							 </tr></td>
							 </table>
							  
							        <?php
								}
							
								     ?>
								
																
								
								</form>
							
							
								
								
								
				                  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->
		
<?php
include"footer.php";
?>


