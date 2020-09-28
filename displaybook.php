


<?php

include"header.php";
include"connection.php";
?>

        <!-- page content area main -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>ALL BOOKS</h3>
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
                                <h2>display & search book</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
							<form name="form1" action="" method="post">
							<input type="text" name="t1" class=="form control" placeholder="search books">
							<input type="submit" name="submit1" value="search books" class="btn btn-defult">
							</form>
							
							<?php
							if(isset($_post["submit1"]))
					        {
						$res=mysqli_query($link,"select * from add_book where books_name like('$_post[t1]')");
							echo"<table class='table table=bordered'>";
						    echo"<tr>";
							echo"<th>"; echo"id"; echo"</th>";
							echo"<th>";echo"book name"; echo"</th>";
							echo"<th>";echo"book image"; echo"</th>";
							echo"<th>";echo"author name"; echo"</th>";
							echo"<th>";echo"purchase date"; echo"</th>";
							echo"<th>";echo"book price"; echo"</th>";
							echo"<th>";echo"book qty"; echo"</th>";
							echo"</tr>";
							while($row=mysqli_fetch_array($res))
							{
							echo"<tr>";
						    echo"<td>";echo $row["id"];echo"</td>";
							echo"<td>";echo $row["books_name"]; echo"</td>";
							echo"<td>";echo $row["book_img"];echo"</td>";
							echo"<td>";echo $row["books_author_name"]; echo"</td>";
							echo"<td>";echo $row["books_purchase_date"];echo"</td>";
							echo"<td>";echo $row["books_price"];echo"</td>";
							echo"<td>";echo $row["books_qty"];echo"</td>";
							
								echo"</tr>";
							   
							}
							}
							else
							{
							$res=mysqli_query($link,"select * from add_book");
							echo"<table class='table table=bordered'>";
						    echo"<tr>";
							echo"<th>"; echo"id"; echo"</th>";
							echo"<th>";echo"book name"; echo"</th>";
							echo"<th>";echo"book image"; echo"</th>";
							echo"<th>";echo"author name"; echo"</th>";
							echo"<th>";echo"purchase date"; echo"</th>";
							echo"<th>";echo"book price"; echo"</th>";
							echo"<th>";echo"book qty"; echo"</th>";
							echo"<th>";echo"delete book"; echo"</th>";
							echo"</tr>";
							while($row=mysqli_fetch_array($res))
							{
							echo"<tr>";
						    echo"<td>";echo $row["id"];echo"</td>";
							echo"<td>";echo $row["books_name"]; echo"</td>";
							echo"<td>";echo $row["book_img"];echo"</td>";
							echo"<td>";echo $row["books_author_name"]; echo"</td>";
							echo"<td>";echo $row["books_purchase_date"];echo"</td>";
							echo"<td>";echo $row["books_price"];echo"</td>";
							echo"<td>";echo $row["books_qty"];echo"</td>";
					        echo"<td>";
							?> <a href="delete_book.php?id=<?php echo $row["id"];?>"class="btn btn-danger">delete book</a><?php echo"</td>";
								echo"</tr>";
							}
							echo"</table>";
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
include"footer.php";
?>