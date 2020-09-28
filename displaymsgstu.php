
<?php

include"stheder.php";
include"connection.php";
?>

        <!-- page content area main -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>ALL NOTIFICATION</h3>
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
                                <h2>message from librarian</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
							
							<?php
							$res=mysqli_query($link,"select * from message");
							echo"<table class='table table=bordered'>";
						     echo"<tr>";
                                                        echo"<th>"; echo"msg id"; echo"</th>";
							echo"<th>"; echo"name"; echo"</th>";
							echo"<th>"; echo"msg date"; echo"</th>";
							echo"<th>";echo"title"; echo"</th>";
							echo"<th>";echo"message"; echo"</th>";
                                                        echo"<th>"; echo"delete msg"; echo"</th>";
						
						
							echo"</tr>";
							while($row=mysqli_fetch_array($res))
							{
							echo"<tr>";
                                                         echo"<td>";echo $row["id"];echo"</td>";
						    echo"<td>";echo $row["dusername"];echo"</td>";
							echo"<td>";echo $row["date"];echo"</td>";
							echo"<td>";echo $row["title"]; echo"</td>";
							echo"<td>";echo $row["msg"];echo"</td>";
                                                          echo"<td>";
							?> <a href="deletestumsg.php?id=<?php echo $row["id"];?>"class="btn btn-danger">delete msg</a><?php echo"</td>";
							
								echo"</tr>";
							}
							echo"</table>";
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