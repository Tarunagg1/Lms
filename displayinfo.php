

<?php

include"header.php";
include"connection.php";
?>

        <!-- page content area main -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>ALL STUDENT INFO</h3>
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
                                <h2>student info</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
							<?php
							$res=mysqli_query($link,"select * from registration");
							echo"<table class='table table=bordered'>";
						    echo"<tr>";
							echo"<th>"; echo"first name"; echo"</th>";
							echo"<th>";echo"last name"; echo"</th>";
							echo"<th>";echo"user name"; echo"</th>";
							echo"<th>";echo"email_id"; echo"</th>";
							echo"<th>";echo"contact no"; echo"</th>";
							echo"<th>";echo"sem"; echo"</th>";
							echo"<th>";echo"rollno"; echo"</th>";
							echo"</tr>";
							while($row=mysqli_fetch_array($res))
							{
							echo"<tr>";
						    echo"<td>";echo $row["firstname"];echo"</td>";
							echo"<td>";echo $row["lastname"]; echo"</td>";
							echo"<td>";echo $row["username"];echo"</td>";
							echo"<td>";echo $row["email"]; echo"</td>";
							echo"<td>";echo $row["contactno"];echo"</td>";
							echo"<td>";echo $row["sem"];echo"</td>";
							echo"<td>";echo $row["rollno"];echo"</td>";
								echo"</tr>";
							}
							echo"</table>";
							?>
                                                        <html>

                                									
										 
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

