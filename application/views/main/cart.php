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
    <script type="text/javascript">
	// To conform clear all data in cart.
	function clear_cart() {
	var result = confirm('Are you sure want to clear all bookings?');

	if (result) {
	window.location = "<?php echo base_url(); ?>index.php/main/remove/all";
	} else {
	return false; // cancel button
	}
	}
	</script>
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
              <div class="button navbar-right" style="margin-top:24px;">
                <?php //print_r($this->session->all_userdata()); die();
                 if ($this->session->userdata('logged_in') == true) { ?>
                <a href="<?php echo site_url('main/page/main');?>"><img src="<?php echo base_url();?>assets/img/home.png" alt="" width="25px" height="25px"></a>&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="<?php echo site_url('main/productlist');?>"><img src="<?php echo base_url();?>assets/img/shop.png" alt="" width="23px" height="23px"></a>&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="<?php echo site_url('main/page/profile');?>"><img src="<?php echo base_url();?>assets/img/profile.png" alt="" width="25px" height="25px"></a>&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="<?php echo site_url('member/page/dashboard');?>"><img src="<?php echo base_url();?>assets/img/dashboard.png" alt="" width="25px" height="25px"></a>&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="<?php echo site_url('main/page/cart');?>"><img src="<?php echo base_url();?>assets/img/cart1.png" alt="" width="25px" height="25px"></a>&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="<?php echo site_url('main/logout');?>"><img src="<?php echo base_url();?>assets/img/logout.png" alt="" width="25px" height="25px"></a>
                <?php } else { ?>
                  <a href="<?php echo site_url('main/page/main');?>"><img src="<?php echo base_url();?>assets/img/home.png" alt="" width="25px" height="25px"></a>&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="<?php echo site_url('main/productlist');?>"><img src="<?php echo base_url();?>assets/img/shop.png" alt="" width="23px" height="23px"></a>&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="<?php echo site_url('main/page/cart');?>"><img src="<?php echo base_url();?>assets/img/cart1.png" alt="" width="25px" height="25px"></a>&nbsp;&nbsp;&nbsp;&nbsp;
                                 <a href="<?php echo site_url('main/page/signin');?>"><img src="<?php echo base_url();?>assets/img/login.png" alt="" width="40px" height="40px"></a>&nbsp;&nbsp;&nbsp;&nbsp;
                 <a href="<?php echo site_url('main/page/signup');?>"><img src="<?php echo base_url();?>assets/img/start.png" alt="" width="120px" height="50px"></a>
                 <?php } ?> 
              </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav><!-- /.navbar-collapse -->

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
							<td class="itemID">Item Id</td>
							<td class="itemName">Item Name</td>
							<td class="price" style="padding-left:-20px;"> MYR Price</td>
							<td class="price" style="padding-left:-5px;">Dinar Price</td>
							<td class="price" style="padding-left:-5px;">Dirham Price</td>
							<td class="quantity" style="padding-left:3px;">Quantity</td>
							<td class="total"style="padding-left:-20px;">Total MYR</td>
							<td class="total"style="padding-left:-20px;">Total Dinar</td>
							<td class="total"style="padding-left:-20px;">Total Dirham</td>
							<td></td>
						</tr>
					</thead>
					<?php
					// All values of cart store in "$cart".
					if ($cart = $this->cart->contents()): ?>
					
					<!--<td>Serial</td>
					<td>Name</td>
					<td>Price</td>
					<td>Qty</td>
					<td>Amount</td>
					<td>Cancel Product</td>-->
					
					<?php
					
					// Create form and send all values in "shopping/update_cart" function.
					echo form_open('main/update_cart');
					$grand_total = 0;
					$dinar_total = 0;
					$dirham_total = 0;
					$i = 1;

					foreach ($cart as $item):
					// echo form_hidden('cart[' . $item['id'] . '][id]', $item['id']);
					// Will produce the following output.
					// <input type="hidden" name="cart[1][id]" value="1" />

					echo form_hidden('cart[' . $item['id'] . '][id]', $item['id']);
					echo form_hidden('cart[' . $item['id'] . '][rowid]', $item['rowid']);
					echo form_hidden('cart[' . $item['id'] . '][name]', $item['name']);
					echo form_hidden('cart[' . $item['id'] . '][price]', $item['price']);
					echo form_hidden('cart[' . $item['id'] . '][dinar_price]', $item['dinar_price']);
					echo form_hidden('cart[' . $item['id'] . '][dirham_price]', $item['dirham_price']);
					echo form_hidden('cart[' . $item['id'] . '][qty]', $item['qty']);
					?>
					<tr>
					<td>
					<?php echo $i++; ?>
					</td>
					<td>
					<?php echo $item['name']; ?>
					</td>
					<td>
					RM <?php echo number_format($item['price'], 2); ?>
					</td>
					<td>
					<?php echo (int) ($item['dinar_price']);?> Dinar
					</td>
					<td>
					<?php echo (int) ($item['dirham_price']);?> Dirham
					</td>
					<td>
					<?php echo form_input('cart[' . $item['id'] . '][qty]', $item['qty'], 'maxlength="3" size="1" style="text-align: right"'); ?>
					</td>
					<?php $grand_total = $grand_total + $item['subtotal']; ?>
					<td>
					RM <?php echo number_format($item['subtotal'], 2) ?>
					</td>
					<?php $dinar_total = $dinar_total + (($item['qty'])* ($item['dinar_price'])); ?>
					<td>					
					<?php echo (int) (($item['qty'])* ($item['dinar_price']));?> Dinar
					</td>
					<?php $dirham_total = $dirham_total + (($item['qty'])* ($item['dirham_price'])); ?>
					<td>					
					<?php echo (int) (($item['qty'])* ($item['dirham_price']));?> Dirham
					</td>
					<td>

					<?php
					// cancle image.
					$path = "<img src='http://localhost/codeigniter_cart/images/cart_cross.jpg' width='25px' height='20px'>";
					//$path = 'img src= assets/miza-cart/images/cart_cross.jpg';
					echo anchor('main/remove/' . $item['rowid'], $path); ?>
					</td>
					<?php endforeach; ?>
					</tr>
					<tr><td>
					<p><b>Total MYR: RM <?php

					//Grand Total.
					echo number_format($grand_total, 2); ?></b></p>
					
					<p><b>Total Dinar: <?php 

					//Grand Total.
					echo (int) ($dinar_total); ?> Dinar</b></p>

					<p><b>Total Dirham: <?php 

					//Grand Total.
					echo (int) ($dirham_total); ?> Dirham</b></p>

					<?php // "clear cart" button call javascript confirmation message ?>
					<td colspan="9" align="right"><input  class ='btn btn-default' type="button" value="Clear Cart" style="background-color:#ffa300;" onclick="clear_cart()">

					<?php //submit button. ?>
					<input class ='btn btn-default'  type="submit" value="Update Cart" style="background-color:#ffa300;">
					<?php echo form_close(); ?>

					<!-- "Place order button" on click send "billing" controller -->
					<input class ='btn btn-default' type="button" value="Checkout"  style="background-color:#ffa300"onclick="window.location = 'checkout'">
					<a class="btn btn-default"   style="background-color:#ffa300" href="<?php echo site_url('main/productlist');?>">Continue Shopping</a></td>
					</td>
					</tr>
					<?php endif; ?>
					</table>
					</div>



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
					
						 <img style="width:300px;height:300px;"src="<?php echo base_url();?>assets/miza-cart/images/earthlink-online-shopping-cart.jpg" alt="" />
					
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
		
		<div class="footer-bottom" style= "bottom:0px ; width:100%;">
			<div class="container" style="background:#000; height:60px;">
				<div class="row">
					<br>
					<p style="text-align:center;">Copyright &copy; Souqanshar.com 2015</p>
					
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