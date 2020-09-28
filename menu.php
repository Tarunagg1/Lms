<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<title>library|book buddy</title>

	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,300,500,600,800,900,200,100' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Noticia+Text:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Raleway:500,600,700,400,200,300' rel='stylesheet' type='text/css'>


	<link rel="stylesheet" type="text/css" href="csse/bootstrap.css" media="screen">	

    <!-- REVOLUTION BANNER CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="csse/fullwidth.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="css/settings.css" media="screen" />

	<link rel="stylesheet" type="text/css" href="csse/font-awesome.css" media="screen">
	<link rel="stylesheet" type="text/css" href="csse/jquery.bxslider.css" media="screen">
	<link rel="stylesheet" type="text/css" href="csse/style.css" media="screen">
	<link rel="stylesheet" type="text/css" href="csse/responsive.css" media="screen">
	
	<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
	<link rel="icon" href="images/favicon.png" type="image/x-icon">

	<!-- Style Switcher -->
	<link rel="alternate stylesheet" type="text/css" href="css/colors/yellow-black.css" title="yellow" media="screen" />
   	<link rel="alternate stylesheet" type="text/css" href="css/colors/violet-black.css" title="black" media="screen" />
	<link rel="alternate stylesheet" type="text/css" href="css/colors/orange-black.css" title="orange" media="screen" />
	<link rel="alternate stylesheet" type="text/css" href="css/colors/blue-black.css" title="blue" media="screen" />
	<link rel="stylesheet" type="text/css" href="css/colors/red-black.css" title="red" media="screen" />
	<link rel="alternate stylesheet" type="text/css" href="css/colors/green-black.css" title="green" media="screen" />
	<link rel="alternate stylesheet" type="text/css" href="css/colors/pink-black.css" title="pink" media="screen" />
	<link rel="alternate stylesheet" type="text/css" href="css/colors/pale-green-black.css" title="pale-green" media="screen" />

</head>
<body>

<!-- Preloader -->
<div id="preloader">
    <div id="status">&nbsp;</div>
</div>

	<!-- Container -->
	<div id="container">
		<!-- Header
		    ================================================== -->
		<header class="clearfix">

			<div class="top-line">
				<div class="container">
					<div class="left-line">
						<ul class="lang clearfix">
							<li><span>Language: </span> <a href="#">Eng <i class="fa fa-angle-down"></i></a>
								<ul class="drop-down2">
									<li><a href="#">Fra</a></li>
									<li><a href="#">Rus</a></li>
								</ul>
							</li>
						</ul>
						<ul class="curr clearfix">
							<li><span>Currency: </span><a href="#">Usd <i class="fa fa-angle-down"></i></a>
								<ul class="drop-down2">
									<li><a href="#">GPB</a></li>
									<li><a href="#">Eur</a></li>
								</ul>
							</li>
						</ul>

						<div class="mobile-a">
							<a href="#login-box" class="login-window"><i class="fa fa-user"></i></a>
							<a href="#login1-box" class="login-window"><i class=" fa fa-user-circle"></i></a>
						<a href="#login2-box" class="login-window"><i class="fa fa-user-database"></i></a>
						</div>
					</div>
					<div class="right-line clearfix">
						<ul>
					
							<li><a href="#login-box" class="login-window">Login</a></li>
							<li><a href="#login1-box" class="login-window">Registration</a></li>
							<li><a href="#login2-box" class="login-window">Admin</a></li>
						</ul>
					

				        <div id="login-box" class="login-popup">
				        	<a href="#" class="close"><img src="images/delete.png" class="btn_close" title="Close Window" alt="Close" /></a>
				         	<form method="post" class="signin" action="#">
				                <fieldset class="textbox">
					                <h4 class="login-title">LOGIN </h4>

					              <input type="text" name="username" class="form-control" placeholder="Username*" required=""/>			                
					               <input type="password" name="password" class="form-control" placeholder="Password*" required=""/>
					                
					                <input type="checkbox" name="signed" value="Stayin"> <span class="signed">Remember Me</span>

					                <button class="submit button" name="submit2" type="submit">Login</button>
						            
						                <a href="reset.php" class="forgot2">Forgot password?</a>
					                </p>
					                <div class="clear"></div>
				                	
				                	<div class="log-socials">
				                		<h6>LOGIN WITH</h6>
				                		<ul>
				                			<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				                			<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				                			<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
				                		</ul>

				                		<div class="clear"></div>
				                	</div>
				                </fieldset>
				          </form>
						</div>

					</div>
					<div class="clear"></div>
				</div>
			</div>
			
			<!--registration form************************************-->
				        <div id="login1-box" class="login-popup">
				        	<a href="#" class="close"><img src="images/delete.png" class="btn_close" title="Close Window" alt="Close" /></a>
				         	<form method="post" class="signin" action="#">
				                <fieldset class="textbox">
					                <h4 class="login-title">Registration </h4>

			<input type="text" class="form-control" placeholder="firstname" name="firstname" required=""/>
			 <input type="text" class="form-control" placeholder="lastname" name="lastname" required=""/>
			 <input type="text" class="form-control" placeholder="Username" name="username" required=""/>
			 <input type="password" class="form-control" placeholder="Password" name="password" required=""/>
				 <input type="text" class="form-control" placeholder="email" name="email" required=""/>
                <input type="number" class="form-control" placeholder="contact" name="contact" required=""/>
				<input type="text" class="form-control" placeholder="sem" name="sem" required=""/>
              <select class="form-control"placeholder="branch" name="branch" required="">
     
<option>select course</option>
<option>B.A</option>
<option>M.A</option>
<option>B.COM</option>
<option>M.COM</option>
<option>LLB</option>
<option>B.A LLB</option>
<option>BBA LLB</option>
<option>FINE ARTS</option>
<option>B.TECH(civil)</option>
<option>B.TECH(csc)</option>
<option>B.TECH(mecanical)</option>
<option>B.TECH(electronic)</option>
<option>BCA</option>
<option>MCA</option>
<option>BBA</option>
<option>MBA</option>
<option>B.SC(computer science)</option>
<option>B.SC(maths honours)</option>
<option>B.SC(physis honours)</option>
<option>B.SC(life scince)</option>
<option>B.SC(chemistry honours)</option>
<option>B.SC(english honours)</option>
<option>B.SC(biology honours)</option>
<option>B.SC(microbiology honours)</option>
<option>B.PHARMA</option>
<option>M.PHARMA</option>
<option>BDS</option>
<option>MDS</option>

</select>

<br><input type="text" class="form-control" placeholder="rollno" name="rollno" required=""/>
									
									
									
				<button class="submit button" name="submit1" type="submit">register</button>
		
						               
					                </p>
					                <div class="clear"></div>
				                	
			

				                		<div class="clear"></div>
				                	</div>
				                </fieldset>
				          </form>
						</div>

					</div>
					<div class="clear"></div>
				</div>
			</div>
			
			
			<!--admin form************************************-->
				        <div id="login2-box" class="login-popup">
				        	<a href="#" class="close"><img src="images/delete.png" class="btn_close" title="Close Window" alt="Close" /></a>
				         	<form method="post" class="signin" action="#">
				                <fieldset class="textbox">
					                <h4 class="login-title">Admin</h4>

			<input type="text" class="form-control" placeholder="Admin name*" name="name" required=""/>
			<input type="text" class="form-control" placeholder="Email id*" name="email" required=""/>
			<input type="password" class="form-control" placeholder="Password*" name="password" required=""/>
								                <input type="checkbox" name="signed" value="Stayin"> <span class="signed">Remember</span>

				<button class="submit button" name="submit4" type="submit">login</button>
		  <a href="adminreset.php" class="forgot2">Forgot password?</a>
						               
					                </p>
					                <div class="clear"></div>
				                	
			

				                		<div class="clear"></div>
				                	</div>
				                </fieldset>
				          </form>
						</div>

					</div>
					<div class="clear"></div>
				</div>
			</div>

			<!-- end topline -->
		

			<div class="upper-header">
				<div class="container">

					<div class="search-input">
						<form action="#">
							<input type="text" placeholder="Type and Search">
							<input type="submit" value="">
						</form>
					</div>

					<div class="left-line">
						<font size="15"><a href"">Book Buddy.Com </a></font>
					</div>
					
					<div class="cart">
						<a href="" class="cartmain"> BOok BUddy</a>
						<div class="card-icon">
							<img src="images/cart.png" alt="">
							
						</div>
						
					   </div>
					</div>

					<div class="clear"></div>

				</div>