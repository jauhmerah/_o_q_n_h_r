<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Souq Anshar| Shop</title>
    <!--link rel="stylesheet" href="<?php echo base_url();?>assets/css/normalize.css">-->
    

    <link rel="stylesheet" href="<?php echo base_url();?>assets/anot/css/bootstrap.min.css" >
    <link rel="stylesheet" href="<?php echo base_url();?>assets/anot/css/font-awesome.min.css" >
    <link rel="stylesheet" href="<?php echo base_url();?>assets/anot/css/prettyPhoto.css" >
    <link rel="stylesheet" href="<?php echo base_url();?>assets/anot/css/price-range.css" >
    <link rel="stylesheet" href="<?php echo base_url();?>assets/anot/css/animate.css" >
	<link rel="stylesheet" href="<?php echo base_url();?>assets/anot/css/main.css" >
	<link rel="stylesheet" href="<?php echo base_url();?>assets/anot/css/responsive.css" >
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
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
              <a class="navbar-brand" style= "margin-top:-5px;" href="<?php echo site_url('huhu/haha'); ?>"><img src="<?php echo base_url();?>assets/img/logo1.png" alt="" width="230px" height="79px"></a>
            </div>
			
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <div class="button navbar-right" >
                 <!--a href="<?php echo site_url('main/page/signin');?>"><button class="navbar-btn nav-button wow bounceInRight login" data-wow-delay="0.8s">Sign In</button></a>
                 <a href="<?php echo site_url('main/page/signup');?>"><button class="navbar-btn nav-button wow fadeInRight" data-wow-delay="0.6s">Sign Up</button></a>-->
              <ul class="main-nav nav navbar-nav navbar-right">
              	<br>
                <li class="wow fadeInDown" data-wow-delay="0s"><a class="active" href="<?php echo site_url('main/page/souqshop');?>">Home</a></li>
                <li class="wow fadeInDown" data-wow-delay="0.1s"><a href="<?php echo site_url('main/page/profile');?>">Profile</a></li>
                <li class="wow fadeInDown" data-wow-delay="0.2s"><a href="<?php echo site_url('member/page/dashboard');?>">Dashboard</a></li>
                <li class="wow fadeInDown" data-wow-delay="0.3s"><a href="<?php echo site_url('main/page/cart');?>">Cart</a></li>
                <li class="wow fadeInDown" data-wow-delay="0.4s"><a href="<?php echo site_url('main');?>">Logout</a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>

	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
					<br>	<h2>Category</h2> </br>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#fashion">
											<span class="badge pull-right"><i class="fa fa-plus" ></i></span>
											Fashion
										</a>
									</h4>
								</div>
								<div id="fashion" class="panel-collapse collapse" >
									<div class="panel-body">
										<ul>
											<li><a href="<?php echo site_url('main/lala');?>">Health and Beauty </a></li>
											<li><a href="">Women's Wear </a></li>
											<li><a href="">Men's Wear </a></li>
											<li><a href="">Kids</a></li>
											<li><a href="">Sport Wear </a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#electronics">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Electronics
										</a>
									</h4>
								</div>
								<div id="electronics" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="">Home Appliances</a></li>
											<li><a href="">Home and Living</a></li>
											<li><a href="">Cameras</a></li>
											<li><a href="">Computers and Laptops</a></li>
	
										</ul>
									</div>
								</div>
							</div>
							
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#travel">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Travel
										</a>
									</h4>
								</div>
								<div id="travel" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="">Bags and Backpacks</a></li>
											<li><a href="">Luggage</a></li>
											<li><a href="">Travel's Accessories</a></li>
										</ul>
									</div>
								</div>
							</div>
							
								<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#automotive">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Automotive
										</a>
									</h4>
								</div>
								<div id="automotive" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="">Car Care</a></li>
											<li><a href="">Tools and Equipments</a></li>
											<li><a href="">Interior Accessories</a></li>
											<li><a href="">Motorcycles</a></li>
											<li><a href="">Replacement Parts</a></li>
											<li><a href="">Wheel and Tyres</a></li>
											<li><a href="">Oils and Fluids</a></li>
										</ul>
									</div>
								</div>
							</div>
							
								<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#business">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Business
										</a>
									</h4>
								</div>
								<div id="business" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="">Business Plans</a></li>
											<li><a href="">Career Advices</a></li>
											<li><a href="">Market Research</a></li>
											<li><a href="">Presentations</a></li>
										</ul>
									</div>
								</div>
							</div>
							
								<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#services">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Services
										</a>
									</h4>
								</div>
								<div id="services" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="">Counseling</a></li>
											<li><a href="">Composing Song</a></li>
											<li><a href="">Web Design</a></li>
										</ul>
									</div>
								</div>
							</div>
							<br></br>
						</div><!--/category-product-->
					
						<div class="brands_products"><!--brands_products-->
							<!--h2>Brands</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
									<li><a href=""> <span class="pull-right">(50)</span>Acne</a></li>
									<li><a href=""> <span class="pull-right">(56)</span>Grüne Erde</a></li>
									<li><a href=""> <span class="pull-right">(27)</span>Albiro</a></li>
									<li><a href=""> <span class="pull-right">(32)</span>Ronhill</a></li>
									<li><a href=""> <span class="pull-right">(5)</span>Oddmolly</a></li>
									<li><a href=""> <span class="pull-right">(9)</span>Boudestijn</a></li>
									<li><a href=""> <span class="pull-right">(4)</span>Rösch creative culture</a></li>
								</ul>
							</div>-->
						</div><!--/brands_products-->
						
						<!--div class="price-range"><!--price-range-->
							<!--h2>Price Range</h2>
							<div class="well">
								 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
								 <b>$ 0</b> <b class="pull-right">$ 600</b>
							</div>
						</div><!--/price-range-->
						
						<!--div class="shipping text-center"><!--shipping-->
							<!--img src="images/home/shipping.jpg" alt="" />
						</div><!--/shipping-->
						
					</div>
				</div>
				
				<!--<div id="infoMessage"><?php echo $err_message;?>
				</div>-->

				<div class="col-sm-9 padding-right" ;">
					<div class="features_items"><!--features_items-->
					<br>	<h2 class="title text-center">All Items</h2></br>
					<?php
					if(sizeof($products)==0)
					{
						echo '<h2 style="text-align:center">ITEM NOT FOUND</h2>';
					} 
					foreach($products as $data){?>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="<?php echo base_url();?>assets/anot/images/souq/coffee maker1.jpg" alt="" />
										<h2>RM <?php echo $data->item_price?></h2>
										<p><?php echo $data->item_name?></p>
										<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
									</div>
									<div class="product-overlay">
										<div class="overlay-content" style="background:#ffa300">
											<h2>RM <?php echo $data->item_price?></h2>
											<p><?php echo $data->item_name?></p>
											<a href="<?php echo site_url('main/page/productdetails/x1?item='.$data->item_id.'&cat='.$table); ?>">View</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>
									</div>
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href=""><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
										<li><a href=""><i class="fa fa-plus-square"></i>Add to compare</a></li>
									</ul>
								</div>
							</div>
						</div>
						<?php }?>
						
						<!--<ul class="pagination">
							<li class="active"><a href="">1</a></li>
							<li><a href="">2</a></li>
							<li><a href="">3</a></li>
							<li><a href="">&raquo;</a></li>
						</ul>-->
					</div><!--features_items-->
				</div>
			</div>
		</div>
	</section>
	
	
		
		<div class="footer-bottom" style= "position:fixed; bottom:0px ; width:100%;">
			<div class="container">
				<div class="row">
					<p style="text-align:center;">Pisang Sdn Bhd, All rights reserved.</p>
					
				</div>
			</div>
		</div>


		
	</footer><!--/Footer-->
	

  
    <script src="<?php echo base_url();?>assets/anot/js/jquery.js"></script>
	<script src="<?php echo base_url();?>assets/anot/js/price-range.js"></script>
    <script src="<?php echo base_url();?>assets/anot/js/jquery.scrollUp.min.js"></script>
	<script src="<?php echo base_url();?>assets/anot/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/anot/js/jquery.prettyPhoto.js"></script>
    <script src="<?php echo base_url();?>assets/anot/js/main.js"></script>
</body>
</html>