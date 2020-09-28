
<!--
session_start();
if($_SESSION[''])
{
	echo $_SESSION['uid'];
}
else
{
	echo "error";
}-->
<?php
include"stheder.php";

?>

        <!-- page content area main -->
		
		<marquee><font size="5"><font face="TIMES NEW ROMAN"><font color="white"><b>WELCOME USER IN LIBRARY MANAGEMENT SYSTEM (LMS)</b></marquee>
         	<div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>HII USER</h3>
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
                                <h2>welcome user</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                            <meta name="viewport" content="width=device-width, initial-scale=1.0">

							<u><br><div align="center"><font face="arial"><font size="3"><a href="student.php" >HOME&nbsp;&nbsp;||&nbsp;&nbsp;<a href="vision.php">VISION &nbsp;&nbsp;&nbsp;||&nbsp;<a href="contact.php">CONTACT US&nbsp;&nbsp;&nbsp;||&nbsp;<a href="about.php">ABOUT US</a></u></div></font>
									
							    <div align="center"><img src="lib.jpg" height="700" width="1090">

			
							<meta></div>
						
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->

<?php
include"footer.php";
?>