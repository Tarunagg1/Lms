
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>WELCOME| LIBRARY MANAGEMENT 	 </title>


    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/nprogress.css" rel="stylesheet">
    <link href="css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 1;">
                    <a href="#" class="site_title"><i class="fa fa-book"></i> <span>LMS</span></a>
                </div>

                <div class="clearfix"></div>

                <!-- menu profile quick info -->
                <div class="profile clearfix">
                    <div class="profile_pic">
                        <img src="img.jpg" alt="..." class="img-circle profile_img">
                    </div>
					
					
					<div class="profile_update">
					<a class="profile_update" href="link.php">update profile </a>
					</div>
					
					
					
                    <div class="profile_info">
					 <span>Welcome,</span><br>

<?php
if(isset($_SESSION['s']))
{
  $username=$_SESSION['s'];
 echo"$username";
}
 ?>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <!-- /menu profile quick info -->

                <br/>

                <!-- sidebar menu -->
               <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type='text/css'>
                
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">
                        <h3>General</h3>
                        <ul class="nav side-menu">
                    

						<li><a href="student.php"><i class="fa fa-home"></i> Home<span class="fa fa-chevron-down"></span></a>
						
                            </li>
							
                            <li><a href="myissuebook.php"><i class="fa fa-book"></i> My Issued Book<span class="fa fa-chevron-down"></span></a>
						
                            </li>
                            <li><a href="stubookdisplay.php"><i class="fa fa-search"></i> Search Book <span class="fa fa-chevron-down"></span></a>


                            </li>
                                          
                     <li><a href="need.php"><i class="fa fa-mail-forward"></i> Need Help <span class="fa fa-chevron-down"></span></a>

                            </li>
                            
                               </li>
                                          
                     <li><a href="history.php"><i class="fa fa-info"></i> query history<span class="fa fa-chevron-down"></span></a>

                            </li>
							
							           </li>
                                          
                     <li><a href="sellerhome.php"><i class="fa fa-bank"></i>Business with us<span class="fa fa-chevron-down"></span></a>

                            </li>
							
							
                    </li>
                                          
                     <li><a href="history.php"><i class="fa fa-shopping-basket"></i>Book Purchase<span class="fa fa-chevron-down"></span></a>

                            </li>
                        
                        </ul>
                        
                        
                        
                        
                    </div>


                </div>

            </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <nav>
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>
                    

                    <ul class="nav navbar-nav navbar-right">
                        <li class="">
                            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown"
                               aria-expanded="false">
                                <img alt="">LOGOUT

USER

                                <span class=" fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu pull-right">
                                <li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
							</ul>     

		                     <li role="presentation" class="dropdown">
                            <a href="displaymsgstu.php" class="dropdown-toggle info-number" data-toggle="dropdown"
                               aria-expanded="false">
                                <i class="fa fa-bell"></i>
                                <span class="badge bg-green" onclick="window.location='displaymsgstu.php';">1</span>
                            </a>

                        </li>
						
                    </ul>
                </nav>
            </div>
        </div>
        <!-- /top navigation -->