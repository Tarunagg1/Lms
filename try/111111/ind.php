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

	<!-- Style Switch -->
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
							<a href="#"><i class="fa fa-heart"></i></a>
						</div>
					</div>
					<div class="right-line clearfix">
						<ul>
					
							<li><a href="#login-box" class="login-window">Login</a></li>
							<li><a href="#">Registration</a></li>
						</ul>
					

				        <div id="login-box" class="login-popup">
				        	<a href="#" class="close"><img src="images/delete.png" class="btn_close" title="Close Window" alt="Close" /></a>
				         	<form method="post" class="signin" action="#">
				                <fieldset class="textbox">
					                <h4 class="login-title">LOGIN </h4>

					                <input placeholder="Email*">				                
					                <input placeholder="Password*">
					                
					                <input type="checkbox" name="signed" value="Stayin"> <span class="signed">Remember Me</span>

					                <button class="submit button" type="button">Login</button>
					                <p>
						                <a class="recover" href="#">Sign up</a>
						                <a href="#" class="forgot2">Forgot password?</a>
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
			<!-- end topline -->

			<div class="upper-header">
				<div class="container">

					<div class="search-input">
						<form action="#">
							<input type="text" placeholder="Type and Search">
							<input type="submit" value="">
						</form>
					</div>

					<div class="logo">
						<a href=""><img src="images/logo.png" alt=""></a>
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
				<!-- End container -->	
			</div>
			<!-- End Upper-header -->	
			<div class="nav-border"></div>
			<nav class="navigation">
				<div class="container">
				<!-- Navigation -->
				<nav id="nav">
					<ul id="navlist" class="sf-menu clearfix">
						<li><a href="arun1.php">Home</a>
				
						<li><a href="#">Shop</a>
							<ul class="sub-menu">
								<li><a href="shop-single.html"><span>--</span>Single Product</a></li>
								<li><a href="shop-list.html"><span>--</span>Products List</a></li>
								<li><a href="shop-grid.html"><span>--</span>Products Grid</a></li>
								<li><a href="cart.html"><span>--</span>Shopping Cart</a></li>
								<li><a href="checkout.html"><span>--</span>Checkout</a></li>
							</ul>
						</li>
						<li><a href="#">Women</a></li>
						<li><a href="#">Men</a></li>
						<li><a href="#">Accesories</a></li>
						<li class="current"><a href="#">Pages</a>
							<ul class="sub-menu">
								<li><a href="about.html"><span>--</span>About</a></li>
								<li><a href="shortcodes.html"><span>--</span>Shortcodes</a></li>
								<li><a href="typography.html"><span>--</span>Typography</a></li>
								<li><a href="404.html"><span>--</span>404</a></li>
							</ul>
						</li>
						<li><a href="#">Blog</a>
							<ul class="sub-menu">
								<li><a href="blog.html"><span>--</span>Blog</a></li>
								<li><a href="blog-single.html"><span>--</span>Blog Single</a></li>
							</ul>
						</li>
						<li><a href="contact.html">Contact</a></li>
					</ul>
				</nav>
		    	<!-- Navigation -->
				</div>
			</nav>
		

		</header>
		<!-- End Header -->

	<!-- content -->
	<div class="content">

		<div class="typography">

			<div class="headings container">

				<div class="row">
					<div class="col-md-6">
						<h1>H1 Heading example</h1>
						<p>The dream mentioned previously in this chapter, and the dreams in the chapter on the subconscious, are all fairly easy to understand and I used them because they clearly illustrate how dreams can guide us. However, because they are so easily decipherable, they are the exceptions.</p>
					</div>
					<div class="col-md-6">
						<h2>H2 Heading example</h2>
						<p>The dream mentioned previously in this chapter, and the dreams in the chapter on the subconscious, are all fairly easy to understand and I used them because they clearly illustrate how dreams can guide us. However, because they are so easily decipherable, they are the exceptions.</p>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6">
						<h3>H3 Heading example</h3>
						<p>The dream mentioned previously in this chapter, and the dreams in the chapter on the subconscious, are all fairly easy to understand and I used them because they clearly illustrate how dreams can guide us. However, because they are so easily decipherable, they are the exceptions.</p>
					</div>
					<div class="col-md-6">
						<h4>H4 Heading example</h4>
						<p>The dream mentioned previously in this chapter, and the dreams in the chapter on the subconscious, are all fairly easy to understand and I used them because they clearly illustrate how dreams can guide us. However, because they are so easily decipherable, they are the exceptions.</p>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6">
						<h5>H5 Heading example</h5>
						<p>The dream mentioned previously in this chapter, and the dreams in the chapter on the subconscious, are all fairly easy to understand and I used them because they clearly illustrate how dreams can guide us. However, because they are so easily decipherable, they are the exceptions.</p>
					</div>
					<div class="col-md-6">
						<h6>H6 Heading example</h6>
						<p>The dream mentioned previously in this chapter, and the dreams in the chapter on the subconscious, are all fairly easy to understand and I used them because they clearly illustrate how dreams can guide us. However, because they are so easily decipherable, they are the exceptions.</p>
					</div>
				</div>

			</div>
			<!-- End Headings -->

			<div class="html-style container">					
			
				<div class="title">
					<h1><i class="fa fa-star"></i> HTML STYLE / DROPCAPS / TOOLTIP <i class="fa fa-star"></i></h1>
					<div class="title-border"></div>
				</div>

				<div class="row">
					<div class="col-md-6 naked-drop">
						<p><span>T</span>his life is what you make it. <strong>bold text </strong> No matter what, you're going to mess up sometimes, it's a universal truth. But the good part is you get to decide how you're going to mess it up. Girls will be your friends - they'll act like it anyway. But just remember, some come, some go. 
						<a href="#" data-toggle="tooltip" title="Some tooltip text!">Hover over me</a>	The ones that stay with you through everything - they're your true best friends. Don't let go of them. Also remember, sisters make the best friends in the world. As for lovers, well, they'll come and go too.</p>
					</div>
					<div class="col-md-6 full-drop">
						<p><span>T</span>his life is what you make it. No matter what, you're going to mess up sometimes, it's a universal truth. But the good part is you get to decide how you're going to mess it up.  <a href="#">text link</a> Girls will be your friends - they'll act like it anyway. But just remember, some come, some go. The ones that stay with you through everything - they're your true best friends. Don't let go of them. Also remember, sisters make the best friends in the world. As for lovers, well, they'll come and go too.</p>
					</div>
				</div>

				<!-- Generated markup by the plugin -->
				<div class="tooltip top" role="tooltip">
				  <div class="tooltip-arrow"></div>
				  <div class="tooltip-inner">
				    Tooltip Example!
				  </div>
				</div> 

			</div>

			<div class="blockquotes container">
				
				<div class="title">
					<h1><i class="fa fa-star"></i> Blockquote<i class="fa fa-star"></i></h1>
					<div class="title-border"></div>
				</div>

				<div class="row">
					
					<div class="blocksss">
						<blockquote>
							“You need to learn how to select your thoughts just the same way you select your clothes every day. This is a power you can cultivate. If you want to control things in your life so bad, work on the mind. That's the only thing you should be trying to control.” 
							<span>- Martin Luther King Jr.</span>
						</blockquote>
					</div>
					

				</div>
			</div>

			<div class="bullets container">			

				<div class="title">
					<h1><i class="fa fa-star"></i> BULLETS & LISTS<i class="fa fa-star"></i></h1>
					<div class="title-border"></div>
				</div>

				<div class="row">
					<div class="col-md-3">
						<ul class="site-features">
							<li><i class="fa fa-check"></i>100% Fully responsive layout</li>
							<li><i class="fa fa-check"></i>Multiple layout styles for pages</li>
							<li><i class="fa fa-check"></i>A lot of page elements</li>
							<li><i class="fa fa-check"></i>You will get the best solution</li>
						</ul>
					</div>
					<div class="col-md-3">
						<ul class="site-features li-circle">
							<li>100% Fully responsive layout</li>
							<li>Multiple layout styles for pages</li>
							<li>A lot of page elements</li>
							<li>You will get the best solution</li>
						</ul>
					</div>
					<div class="col-md-3">
						<ul class="site-features">
							<li><i class="fa fa-star"></i>100% Fully responsive layout</li>
							<li><i class="fa fa-star"></i>Multiple layout styles for pages</li>
							<li><i class="fa fa-star"></i>A lot of page elements</li>
							<li><i class="fa fa-star"></i>You will get the best solution</li>
						</ul>
					</div>
					<div class="col-md-3">
						<ol class="site-features li-ol">
							<li>100% Fully responsive layout</li>
							<li>Multiple layout styles for pages</li>
							<li>A lot of page elements</li>
							<li>You will get the best solution</li>
						</ol>
					</div>
				</div>

			</div>
			<!-- End Bullets -->

			<div class="columns container">			

				<div class="title">
					<h1><i class="fa fa-star"></i> Columns<i class="fa fa-star"></i></h1>
					<div class="title-border"></div>
				</div>

				<div class="row">
					<div class="col-md-6">
						<h4>1/2 Сolumn</h4>
						<p>The dream mentioned previously in this chapter, and the dreams in the chapter on the subconscious, are all fairly easy to understand and I used them because they clearly illustrate how dreams can guide us. However, because they are so easily decipherable, they are the exceptions.</p>
					</div>
					<div class="col-md-6">
						<h4>1/2 Сolumn</h4>
						<p>The dream mentioned previously in this chapter, and the dreams in the chapter on the subconscious, are all fairly easy to understand and I used them because they clearly illustrate how dreams can guide us. However, because they are so easily decipherable, they are the exceptions.</p>
					</div>
				</div>

				<div class="row">
					<div class="col-md-4">
						<h4>1/3 Сolumn</h4>
						<p>The dream mentioned previously in this chapter, and the dreams in the chapter on the subconscious, are all fairly easy to understand and I used them because they clearly illustrate how dreams can guide us. However, because they are so easily decipherable, they are the exceptions.</p>
					</div>
					<div class="col-md-4">
						<h4>1/3 Сolumn</h4>
						<p>The dream mentioned previously in this chapter, and the dreams in the chapter on the subconscious, are all fairly easy to understand and I used them because they clearly illustrate how dreams can guide us. However, because they are so easily decipherable, they are the exceptions.</p>
					</div>
					<div class="col-md-4">
						<h4>1/3 Сolumn</h4>
						<p>The dream mentioned previously in this chapter, and the dreams in the chapter on the subconscious, are all fairly easy to understand and I used them because they clearly illustrate how dreams can guide us. However, because they are so easily decipherable, they are the exceptions.</p>
					</div>
				</div>

				<div class="row">
					<div class="col-md-3">
						<h4>1/4 Сolumn</h4>
						<p>The dream mentioned previously in this chapter, and the dreams in the chapter on the subconscious, are all fairly easy to understand and I used them because they clearly illustrate how dreams can guide us. However, because they are so easily decipherable, they are the exceptions.</p>
					</div>
					<div class="col-md-3">
						<h4>1/4 Сolumn</h4>
						<p>The dream mentioned previously in this chapter, and the dreams in the chapter on the subconscious, are all fairly easy to understand and I used them because they clearly illustrate how dreams can guide us. However, because they are so easily decipherable, they are the exceptions.</p>
					</div>
					<div class="col-md-3">
						<h4>1/4 Сolumn</h4>
						<p>The dream mentioned previously in this chapter, and the dreams in the chapter on the subconscious, are all fairly easy to understand and I used them because they clearly illustrate how dreams can guide us. However, because they are so easily decipherable, they are the exceptions.</p>
					</div>
					<div class="col-md-3">
						<h4>1/4 Сolumn</h4>
						<p>The dream mentioned previously in this chapter, and the dreams in the chapter on the subconscious, are all fairly easy to understand and I used them because they clearly illustrate how dreams can guide us. However, because they are so easily decipherable, they are the exceptions.</p>
					</div>
				</div>

				<div class="row">
					<div class="col-md-4">
						<h4>1/3 Сolumn</h4>
						<p>The dream mentioned previously in this chapter, and the dreams in the chapter on the subconscious, are all fairly easy to understand</p>
					</div>
					<div class="col-md-8">
						<h4>2/3 Сolumn</h4>
						<p>The dream mentioned previously in this chapter, and the dreams in the chapter on the subconscious, are all fairly easy to understand and I used them because they clearly illustrate how dreams can guide us. However, because they are so easily decipherable, they are the exceptions.</p>
					</div>
				</div>

				<div class="row">
					<div class="col-md-2">
						<h4>1/6 Сolumn</h4>
						<p>The dream mentioned previously in this chapter, and the dreams in the chapter on the subconscious, are all fairly easy to understand and I used them because they clearly illustrate how dreams can guide us. However, because they are so easily decipherable, they are the exceptions.</p>
					</div>
					<div class="col-md-2">
						<h4>1/6 Сolumn</h4>
						<p>The dream mentioned previously in this chapter, and the dreams in the chapter on the subconscious, are all fairly easy to understand and I used them because they clearly illustrate how dreams can guide us. However, because they are so easily decipherable, they are the exceptions.</p>
					</div>
					<div class="col-md-2">
						<h4>1/6 Сolumn</h4>
						<p>The dream mentioned previously in this chapter, and the dreams in the chapter on the subconscious, are all fairly easy to understand and I used them because they clearly illustrate how dreams can guide us. However, because they are so easily decipherable, they are the exceptions.</p>
					</div>
					<div class="col-md-2">
						<h4>1/6 Сolumn</h4>
						<p>The dream mentioned previously in this chapter, and the dreams in the chapter on the subconscious, are all fairly easy to understand and I used them because they clearly illustrate how dreams can guide us. However, because they are so easily decipherable, they are the exceptions.</p>
					</div>
					<div class="col-md-2">
						<h4>1/6 Сolumn</h4>
						<p>The dream mentioned previously in this chapter, and the dreams in the chapter on the subconscious, are all fairly easy to understand and I used them because they clearly illustrate how dreams can guide us. However, because they are so easily decipherable, they are the exceptions.</p>
					</div>
					<div class="col-md-2">
						<h4>1/6 Сolumn</h4>
						<p>The dream mentioned previously in this chapter, and the dreams in the chapter on the subconscious, are all fairly easy to understand and I used them because they clearly illustrate how dreams can guide us. However, because they are so easily decipherable, they are the exceptions.</p>
					</div>
				</div>

			</div>
		




		</div>
		<!-- End Typography -->

		<div class="partners">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<a href="#"><img src="upload/partners1.png" alt=""></a>
					</div>
					<div class="col-sm-2">
						<a href="#"><img src="upload/partners2.png" alt=""></a>
					</div>
					<div class="col-sm-2">
						<a href="#"><img src="upload/partners3.png" alt=""></a>
					</div>
					<div class="col-sm-2">
						<a href="#"><img src="upload/partners4.png" alt=""></a>
					</div>
					<div class="col-sm-2">
						<a href="#"><img src="upload/partners5.png" alt=""></a>
					</div>
					<div class="col-sm-2">
						<a href="#"><img src="upload/partners6.png" alt=""></a>
					</div>
				</div>
			</div>
		</div>

	</div>
	<!-- End content -->


		<!-- footer 
			================================================== -->
		<footer>
			<div class="inner-footer">
				<div class="container">
					<div class="row">
						<div class="col-md-3">
							<div class="f-about">
								<h1>ABOUT SHOP</h1>
								<p class="mb20">We possess within us two minds. So far I have written only of the conscious mind.We further know that the subconscious has recorded every event. This is just perfect theme.</p>
								<h1>NEWSLETTER</h1>
								<form action="#">
									<input type="text" placeholder="Your e-mail">
									<input type="submit" value="">
								</form>
							</div>
						</div>
						<div class="col-md-3">
							<div class="infos">
								<h1>Information</h1>
								<ul>
									<li><a href="#">• Our Stores</a></li>
									<li><a href="#">• Delivery Information</a></li>
									<li><a href="#">• About Us</a></li>
									<li><a href="#">• Terms and Conditions</a></li>
									<li><a href="#">• Privacy Policy</a></li>
									<li><a href="#">• Contact Us</a></li>
									<li><a href="#">• Returns</a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-3">
							<div class="account">
								<h1>My Account</h1>
								<ul>
									<li><a href="#">• My Account</a></li>
									<li><a href="#">• Order History</a></li>
									<li><a href="#">• My Wishlist</a></li>
									<li><a href="#">• Specials</a></li>
									<li><a href="#">• Track Order</a></li>
									<li><a href="#">• Gift Vouchers</a></li>
									<li><a href="#">• My Credit Slips</a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-3">
							<div class="gettouch">
								<h1>Get in Touch with us</h1>
								<p><i class="fa fa-home"></i> Philippines, PO Box 6200 Talay st. 65, SweetPick inc.</p>
								<p><i class="fa fa-phone"></i> +63 918 4084 694</p>
								<p class="mb20"><i class="fa fa-envelope"></i> samokhinteam@gmail.com</p>
								<h1>FIND US ON</h1>
								<ul class="footer-socials">
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
		
								</ul>
							</div>
						</div>
					</div>
				</div>
			<div id="back-to-top">
	          <a href="#top">Back to Top</a>
	        </div>
			</div>
			<!-- end contanir & inner-footer -->
			<div class="container">
				<div class="last-div">
					<div class="row">
						<div class="copyright">
							© 2019 BOok Buddy  |  <a href="">Designed by Tarun Aggarwal</a>
							
						</div>
						<br><div class="copyright">
						Patners Hapty group & developers
						</div>
						
						<div class="clear"></div>
					</div>

				</div>
			</div>



	        
		</footer>
		<!-- End footer -->



        <!-- Style Switch -->
		<div id="customizer" class="s-close">
			<span class="corner"><span class="cog"></span></span>
			<div id="options" class="visible">
				<div class="options-head">
					Style Switcher
				</div>	

				<div class="options-segment clearfix colors-sel">
					<h6 class="color-head">Color Scheme</h6>
					<ul class="color-scheme clearfix">
						<li class="yellow"><a href="css/colors/yellow-black.html" data-rel="yellow" class="styleswitch"></a></li>
						<li class="green"><a href="css/colors/green-black.html" data-rel="green" class="styleswitch"></a></li>
						<li class="red"><a href="css/colors/red-black.html" data-rel="red" class="styleswitch"></a></li>
						<li class="blue"><a href="css/colors/blue-black.html" data-rel="blue" class="styleswitch"></a></li>
						<li class="fblack"><a href="css/colors/violet-black.html" data-rel="black" class="styleswitch"></a></li>
						<li class="orange"><a href="css/colors/orange-black.html" data-rel="orange" class="styleswitch"></a></li>
						<li class="violet"><a href="css/colors/pink-black.html" data-rel="pink" class="styleswitch"></a></li>
						<li class="pale-green"><a href="css/colors/pale-green-black.html" data-rel="pale-green" class="styleswitch"></a></li>
					</ul>
				</div>	
			</div>
		</div>
		<!-- Style Switch -->

		</div>

	<script src="jse/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery-ui.js"></script>
	<script>
	    $( "#tabs" ).tabs();
	    $( "#accordion" ).accordion();
	</script>
	<script type="text/javascript" src="jse/jquery.superfish.js"></script>
	<script type="text/javascript" src="jse/jquery.bxslider.js"></script>
	<script type="text/javascript" src="jse/jquery.fancybox-1.3.4.pack.js"></script>
	<script type="text/javascript" src="jse/bootstrap.js"></script>
	<script type="text/javascript" src="jse/retina-1.1.0.min.html"></script>
	<script type="text/javascript" src="jse/jquery.nicescroll.min.js"></script>
  	<script type="text/javascript" src="jse/jquery.isotope.min.js"></script>
	<script type="text/javascript" src="jse/jquery.imagesloaded.min.js"></script>
	<script type="text/javascript" src="jse/jquery.appear.js"></script>
	<script type="text/javascript" src="jse/jquery.countTo.js"></script>
	<script src="jse/jquery.easypiechart.js"></script>
     <!-- jQuery KenBurn Slider  -->
    <script type="text/javascript" src="jse/jquery.themepunch.revolution.min.js"></script>
	<script type="text/javascript" src="jse/script.js"></script>


	
    <!-- Style Switcher -->
	<script src="jse/styleswitch.js"></script>
	<script src="jse/style_switch_custom.js"></script>
</body>

</html>