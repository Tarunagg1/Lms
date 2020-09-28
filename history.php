
<?php
include"stheder.php";
include"connection.php";
?>

        <!-- page content area main -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>query history</h3>
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
                                <h2>your query</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
							
							<?php
							$res=mysqli_query($link,"select * from help");
							echo"<table class='table table=bordered'>";
						    echo"<tr>";
                                                    echo"<th>"; echo"query id"; echo"</th>";
							echo"<th>"; echo"roll num"; echo"</th>";
							echo"<th>";echo"username"; echo"</th>";
							echo"<th>";echo"query date"; echo"</th>";
							echo"<th>";echo"email id"; echo"</th>";
							echo"<th>";echo"query"; echo"</th>";
                                                        echo"<th>";echo"status"; echo"</th>";
                                                        echo"<th>";echo"delete"; echo"</th>";
							echo"</tr>";
							while($row=mysqli_fetch_array($res))
							{
							echo"<tr>";
                                                        echo"<td>";echo $row["id"];echo"</td>";
						    echo"<td>";echo $row["roll"];echo"</td>";
							echo"<td>";echo $row["username"]; echo"</td>";
							echo"<td>";echo $row["date"];echo"</td>";
							echo"<td>";echo $row["email"];echo"</td>";
							echo"<td>";echo $row["query"];echo"</td>";
                                                        echo"<td>";echo $row["status"];echo"</td>";
                                                         echo"<td>";
							?> <a href="deletemsg.php?id=<?php echo $row["id"];?>"class="btn btn-danger"><i class="fa fa-trash-o"></i>  Delete msg</a><?php echo"</td>";
								echo"</tr>";
							}
							echo"</table>";
							?>
							</table>
                                                                           
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
        