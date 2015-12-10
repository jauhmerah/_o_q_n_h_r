<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Souq Anshar | Cart</title>
    <link href="<?php echo base_url();?>assets/miza-cart/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/miza-cart/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/miza-cart/css/prettyPhoto.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/miza-cart/css/price-range.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/miza-cart/css/animate.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/miza-cart/css/main.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/miza-cart/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/miza-cart/images/ico/fv1.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url();?>assets/miza-cart/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url();?>assets/miza-cart/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url();?>assets/miza-cart/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url();?>assets/miza-cart/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
<nav class="navbar navbar-default">
          <div class="container" style="background:#000;">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header" >
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" style= "margin-top:-3px;" href="<?php echo site_url('huhu/haha'); ?>"><img src="<?php echo base_url();?>assets/img/logo1.png" alt="" width="190px" height="65px" margin-bottom:"25px"></a>
            </div>
			
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <div class="button navbar-right" >
                 <!--a href="<?php echo site_url('main/page/signin');?>"><button class="navbar-btn nav-button wow bounceInRight login" data-wow-delay="0.8s">Sign In</button></a>
                 <a href="<?php echo site_url('main/page/signup');?>"><button class="navbar-btn nav-button wow fadeInRight" data-wow-delay="0.6s">Sign Up</button></a>-->
              <ul class="main-nav nav navbar-nav navbar-right">
              	<br>
              	<li class="wow fadeInDown" data-wow-delay="0.1s"><a href="<?php echo site_url('main/page/main_2');?>">Home</a></li>
                <li class="wow fadeInDown" data-wow-delay="0s"><a href="<?php echo site_url('main/productlist');?>">Shops</a></li>
                <li class="wow fadeInDown" data-wow-delay="0.1s"><a href="<?php echo site_url('main/page/profile');?>">Profile</a></li>
                <li class="wow fadeInDown" data-wow-delay="0.2s"><a href="<?php echo site_url('member/page/dashboard');?>">Dashboard</a></li>
                <li class="wow fadeInDown" data-wow-delay="0.3s"><a href="<?php echo site_url('main/page/cart');?>">Cart</a></li>
                <li class="wow fadeInDown" data-wow-delay="0.4s"><a href="<?php echo site_url('main');?>">Logout</a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
</nav>

		<!--div class="header_top"><!--header_top-->
			<!--div class="container"-->
				<!--div class="row">
					<!--div class="col-sm-6">
						<!--div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href=""><i class="fa fa-phone"></i> +012-2228069</a></li>
								<li><a href=""><i class="fa fa-envelope"></i> admin.souqanshar.com</a></li>
							</ul>
						</div-->
					<!--/div>
					<!--div class="col-sm-6">
						<!--div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href=""><i class="fa fa-facebook"></i></a></li>
								<li><a href=""><i class="fa fa-twitter"></i></a></li>
								<li><a href=""><i class="fa fa-instagram"></i></a></li>
							</ul>
						</div-->
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<!--div class="header-middle">
		<nav class="navbar navbar-default" style="background:#000000;" >
                 <div class="container">
                 <!-- Brand and toggle get grouped for better mobile display -->
                    <!--div class="navbar-header" >
                         <!--button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						 </button>-->
                      <!--a class="navbar-brand" style= "margin-top:-5px;" href="#"><img src="<?php echo base_url();?>assets/miza-cart/images/home/logo1.png" alt="" width="230px" height="75px" ></a>
		<!--header-middle-->
			<!--div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="index.html"><img src="images/home/logo.png" alt="" /></a>
						</div>
						
					</div>
					
				</div>
			</div>
		</div>--><!--/header-middle-->
	
		<!--div class="header-bottom"><!--header-bottom-->
			<!--div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<input type="text" placeholder="Search"/>
						</div>
					</div>
				</div>
			</div>-->
		</div><!--/header-bottom-->
	</header><!--/header-->

	<section id="cart_items">
		<div class="container" style="padding-top:50px;">
			<!--div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Shopping Cart</li>
				</ol>
			</div>-->
			<div class="table-responsive cart_info" >
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Item</td>
							<td class="description"></td>
							<td class="price" style="padding-left:40px;">Price</td>
							<td class="quantity" style="padding-left:30px;">Quantity</td>
							<td class="total"style="padding-left:20px;">Total</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="cart_product">
								<a href=""><img src="<?php echo base_url();?>assets/miza-cart/images/cart/Men2.jpg" alt=""></a>
							</td>
							<td class="cart_description" style="padding-left:60px;">
								<h4><a  href="">Plain T-shirt</a></h4>
								<!--p>Web ID: 1089772</p>-->
							</td>
							<td class="cart_price" style="padding-left:40px;">
								<p>RM59</p>
							</td>
							<td class="cart_quantity" style="padding-left:30px;">
								<div class="cart_quantity_button">
									<a class="cart_quantity_up" href=""> + </a>
									<input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
									<a class="cart_quantity_down" href=""> - </a>
								</div>
							</td>
							<td class="cart_total" style="padding-left:20px;">
								<p class="cart_total_price">RM59</p>
							</td>
							<td class="cart_delete" style="padding-right:-5px;">
								<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
							</td>
						</tr>

						<tr>
							<td class="cart_product">
								<a href=""><img src="<?php echo base_url();?>assets/miza-cart/images/cart/Men5.jpg" alt=""></a>
							</td>
							<td class="cart_description" style="padding-left:60px;">
								<h4><a href="">Plain T-shirt</a></h4>
								<!--p>Web ID: 1089772</p>-->
							</td>
							<td class="cart_price" style="padding-left:40px;">
								<p>RM59</p>
							</td>
							<td class="cart_quantity" style="padding-left:30px;">
								<div class="cart_quantity_button">
									<a class="cart_quantity_up" href=""> + </a>
									<input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
									<a class="cart_quantity_down" href=""> - </a>
								</div>
							</td>
							<td class="cart_total"style="padding-left:20px;">
								<p class="cart_total_price">RM59</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
							</td>
						</tr>
						<tr>
							<td class="cart_product">
								<a href=""><img src="<?php echo base_url();?>assets/miza-cart/images/cart/Men2.jpg" alt=""></a>
							</td>
							<td class="cart_description" style="padding-left:60px;">
								<h4><a href="">Plain T-shirt</a></h4>
								<!--p>Web ID: 1089772</p>-->
							</td>
							<td class="cart_price" style="padding-left:40px;">
								<p>RM59</p>
							</td>
							<td class="cart_quantity" style="padding-left:30px;">
								<div class="cart_quantity_button">
									<a class="cart_quantity_up" href=""> + </a>
									<input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
									<a class="cart_quantity_down" href=""> - </a>
								</div>
							</td>
							<td class="cart_total" style="padding-left:20px;">
								<p class="cart_total_price">RM59</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->

	<section id="do_action">
		<div class="container">
			<!--div class="heading">
				<h3>What would you like to do next?</h3>
				<p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
			</div>-->
			<div class="row">
				
				<div class="col-sm-6">
					<div class="total_area" >
						<ul>
							<li>Cart Sub Total <span>RM59</span></li>
							<li>Eco Tax <span>RM2</span></li>
							<li>Shipping Cost <span>Free</span></li>
							<li>Total <span>RM61</span></li>
						</ul>
							<a class="btn btn-default update" href="">Update</a>
							<a class="btn btn-default check_out" href="<?php echo site_url('main/page/checkout');?>">Check Out</a>
					</div>
				</div>
			</div>
		</div>
	</section><!--/#do_action-->

	<footer id="footer"><!--Footer-->
		<div class="footer-top">
			<!--div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="companyinfo">
							<h2><span>e</span>-shopper</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,sed do eiusmod tempor</p>
						</div>
					</div>
					<div class="col-sm-7">
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/iframe1.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/iframe2.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/iframe3.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/iframe4.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="address">
							<img src="images/home/map.png" alt="" />
							<p>505 S Atlantic Ave Virginia Beach, VA(Virginia)</p>
						</div>
					</div>
				</div>
			</div>-->
		</div>
		
		<!--div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Service</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="">Online Help</a></li>
								<li><a href="">Contact Us</a></li>
								<li><a href="">Order Status</a></li>
								<li><a href="">Change Location</a></li>
								<li><a href="">FAQ’s</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Quock Shop</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="">T-Shirt</a></li>
								<li><a href="">Mens</a></li>
								<li><a href="">Womens</a></li>
								<li><a href="">Gift Cards</a></li>
								<li><a href="">Shoes</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Policies</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="">Terms of Use</a></li>
								<li><a href="">Privecy Policy</a></li>
								<li><a href="">Refund Policy</a></li>
								<li><a href="">Billing System</a></li>
								<li><a href="">Ticket System</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>About Shopper</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="">Company Information</a></li>
								<li><a href="">Careers</a></li>
								<li><a href="">Store Location</a></li>
								<li><a href="">Affillate Program</a></li>
								<li><a href="">Copyright</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<h2>About Shopper</h2>
							<form action="#" class="searchform">
								<input type="text" placeholder="Your email address" />
								<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
								<p>Get the most recent updates from <br />our site and be updated your self...</p>
							</form>
						</div>
					</div>
					
				</div>
			</div>
		</div>-->
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p style="text-align:center;">Pisang Sdn Bhd, All rights reserved.</p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	


    <script src="<?php echo base_url();?>assets/miza-cart/js/jquery.js"></script>
	<script src="<?php echo base_url();?>assets/miza-cart/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url();?>assets/miza-cart/js/jquery.scrollUp.min.js"></script>
    <script src="<?php echo base_url();?>assets/miza-cart/js/jquery.prettyPhoto.js"></script>
    <!--script src="<?php echo base_url();?>assets/miza-cart/js/main.js"></script>-->
</body>
</html>