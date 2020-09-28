
<?php
include"header.php";
include"connection.php";

?>

        <!-- page content area main -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>WRITE SOMETHING</h3>
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
                                <h2>Add book info</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <form name="form1" action="" method="post" class="col-lg-6">
								 <table class="table table=bordered">
							<tr>	
               <td> <input type="text" name="id" class="form-control" placeholder="id" required=""/>
                              </td> </tr>
							   <tr>	
               <td> <input type="text" name="book_name" class="form-control" placeholder="book_name" required=""/>
                              </td> </tr>
						 
				 <tr>
			   <td>
			   book image
			   <input type="file" name="f" placeholder="book name" required=""/>
                              </td> </tr>			  
				 <tr>	
               <td>	<input type="text" name="book_author" class="form-control" placeholder="book_author_name" required=""/>
                              </td> </tr>
							   <tr>	
               <td> <input type="text"class="form-control" placeholder="date"
			                      name="date" value="<?php echo date("d-m-Y"); ?>"/>
                              </td>
							  </tr>
							  		   <tr>	
               <td> <input type="text" name="book_price" class="form-control" placeholder="book_price" required=""/>
                              </td> </tr>
							  		   <tr>	
               <td> <input type="text" name="book_qty" class="form-control" placeholder="book_qty" required=""/>
                              </td> </tr>
                     <tr>
					 <td> <input class="btn btn-default submit" type="submit" name="submit5" value="insert book details">
							   </td></tr>
							   
							   </table>
							   
<?php							   
$conn=mysqli_connect('localhost','root','','tarun')
or die('unable to connect with my sql db');
if(isset($_REQUEST['submit5']))
{
	$bid=$_REQUEST['id'];
	$bname=$_REQUEST['book_name'];
	$bimage=$_REQUEST['f'];
	$bauthor=$_REQUEST['book_author'];
	$adddate=$_REQUEST['date'];
	$bprice=$_REQUEST['book_price'];
	$bqty=$_REQUEST['book_qty'];
	$query="insert into add_book value('$bid','$bname','$bimage','$bauthor','$adddate','$bprice','$bqty')";
	
	$res=mysqli_query($conn,$query);
	
	if($res>0)
		echo "book inserted";
}
?>
							   
							   
							   
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->
		<?php
		include"footer.php"
		?>

