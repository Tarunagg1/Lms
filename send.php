
<?php
include"header.php";
include"connection.php";
$conn=mysqli_connect('localhost','root','','Tarun')
or die('unable to connect with my sql db');
if(isset($_REQUEST['submit1']))
{
	$duser=$_REQUEST['dusername'];
	$date=$_REQUEST['date'];
	$user=$_REQUEST['user'];
	$title=$_REQUEST['title'];
    $ms=$_REQUEST['msg'];
	
	$query="insert into message values('','$duser','$date','$user','$title','$ms','n')";
	
	$res=mysqli_query($conn,$query);
	
	if($res>0)
		echo "record inserted";
}

?>



        <!-- page content area main -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>SEND MSG TO STUDENT</h3>
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
                                <h2>send msg</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
							  <form name="form1" action="" method="post" class="col-lg-6" enctype="multipart/form-data">
								 <table class="table table=bordered">
							<tr>	
                               <td>
                                <select class="form-control" name="dusername">
								
								<?php
							  $res=mysqli_query($link,"select * from registration");
							  while($row=mysqli_fetch_array($res))
							  {
                              ?><option value="<?php echo $row["username"]?>">
							  <?php echo $row["username"]."(".$row["rollno"].")"; ?>
							  </option><?php
							  }
                                    ?>					   
							   </select>			   
                              </td> </tr>
							  			   <tr>	
               <td> <input type="text"class="form-control" placeholder="books issue date"
			                      name="date" value="<?php echo date("d-m-Y"); ?>"/>
							  </td></tr>
							  <tr>
							  <td> <input type="text" class="form-control" name="user" placeholder="enter username" </td>
							  </tr>
				
							  <tr>
							  <td> <input type="text" class="form-control" name="title" placeholder="enter title" </td>
							  </tr>
							  
							  <tr>
							  <td> 
							  message<br>
							  <textarea name="msg" class="form-control">
							  
							  </textarea>
							
							  </td>
							  </tr>
							  
							  <tr>
							  <td> <input type="submit" name="submit1"value="send msg"></td>
							  
							  </tr>
							  
							  
							  </table>
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