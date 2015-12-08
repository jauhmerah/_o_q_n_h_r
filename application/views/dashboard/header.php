<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Souq Anshar|Dashboard Panel</title>
	<!-- Bootstrap Styles-->
    <link href="<?php echo base_url();?>assets/anot/dashboard/assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="<?php echo base_url();?>assets/anot/dashboard/assets/css/font-awesome.css" rel="stylesheet" />
        <!-- Custom Styles-->
    <link href="<?php echo base_url();?>assets/anot/dashboard/assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar-default top-navbar" role="navigation">
          <!--div class="container" style="background:#000;">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header" style="background:#000000;padding-left:105px; padding-bottom:15px; margin-top:13px;" ><img src="<?php echo base_url();?>assets/img/logo1.png" alt="" width="190px" height="65px"></a>
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>

              <!--a class="navbar-brand" style= "margin-top:-5px;" href="<?php echo site_url('huhu/haha'); ?>"><img src="<?php echo base_url();?>assets/img/logo1.png" alt="" width="230px" height="79px"></a>-->
            </div>
            
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <div class="button navbar-right" style="margin-right:105px; margin-top:-15px;" >
                 <!--a href="<?php echo site_url('main/page/signin');?>"><button class="navbar-btn nav-button wow bounceInRight login" data-wow-delay="0.8s">Sign In</button></a>
                 <a href="<?php echo site_url('main/page/signup');?>"><button class="navbar-btn nav-button wow fadeInRight" data-wow-delay="0.6s">Sign Up</button></a>-->
              <ul class="main-nav nav navbar-nav navbar-right">
                <br>
                <li class="wow fadeInDown" data-wow-delay="0.1s"><a href="<?php echo site_url('main/page/profile');?>">Profile</a></li>
                <li class="wow fadeInDown" data-wow-delay="0s"><a class="active" href="<?php echo site_url('main/page/main_2');?>">Home</a></li>
                <li class="wow fadeInDown" data-wow-delay="0.1s"><a href="<?php echo site_url('main/page/souqshop');?>">Shops</a></li>
                <li class="wow fadeInDown" data-wow-delay="0.2s"><a href="<?php echo site_url('member/page/dashboard');?>">Dashboard</a></li>
                <li class="wow fadeInDown" data-wow-delay="0.3s"><a href="<?php echo site_url('main/page/cart');?>">Cart</a></li>
                <li class="wow fadeInDown" data-wow-delay="0.4s"><a href="<?php echo site_url('main');?>">Logout</a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>

             