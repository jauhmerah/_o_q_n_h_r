<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Souq Anshar | Your First Dinar Marketplace</title>
        <meta name="description" content="company is a free job board template">
        <meta name="author" content="Ohidul">
        <meta name="keyword" content="html, css, bootstrap, job-board">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800' rel='stylesheet' type='text/css'>

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="icon" href="favicon.ico" type="image/x-icon">

        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/normalize.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/fontello.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/animate.css">        
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/owl.carousel.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/owl.theme.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/owl.transitions.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/style.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/responsive.css">
        <script src="<?php echo base_url();?>assets/js/vendor/modernizr-2.6.2.min.js"></script>
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.8.2.js"></script>
            <script type="text/javascript">

  function checkForm(form)
  {
   
    if(form.itemname.value == "") {
      alert(" Please enter items that you are looking for");
      form.itemname.focus();
      return false;
    }
    if(form.sub_cat.value == "Select Your Category") {
      alert(" Please choose your category");
      form.sub_cat.focus();
      return false;
    }

   }
    
</script>
    </head>
    <body>

        <div id="preloader">
            <div id="status">&nbsp;</div>
        </div>
        <!-- Body content -->
        
        <!--div class="header-connect">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-8 col-xs-8">
                        <div class="header-half header-call">
                            <p>
                                <span><i class="icon-cloud"></i>+019 4854 8817</span>
                                <span><i class="icon-mail"></i>ohidul.islam951@gmail.com</span>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-2 col-md-offset-5  col-sm-3 col-sm-offset-1  col-xs-3  col-xs-offset-1">
                        <div class="header-half header-social">
                            <ul class="list-inline">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-vine"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->

        <nav class="navbar navbar-default">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" style="margin-top:-12px;" href="#"><img src="<?php echo base_url();?>assets/img/logo1.png" alt="" width="190px" height="65px" margin-bottom:"25px"></a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <div class="button navbar-right">
                <?php //print_r($this->session->all_userdata()); die();
                 if ($this->session->userdata('logged_in') == true) { ?>
                <a href="<?php echo site_url('main/page/main');?>"><button class="navbar-btn nav-button" data-wow-delay="0.8s">Home</button></a>
                <a href="<?php echo site_url('main/productlist');?>"><button class="navbar-btn nav-button" data-wow-delay="0.8s">Shops</button></a>
                <a href="<?php echo site_url('main/page/profile');?>"><button class="navbar-btn nav-button" data-wow-delay="0.8s">Profile</button></a>
                <a href="<?php echo site_url('main/page/dashboard');?>"><button class="navbar-btn nav-button" data-wow-delay="0.8s">Dashboard</button></a>
                <a href="<?php echo site_url('main/page/cart');?>"><button class="navbar-btn nav-button" data-wow-delay="0.8s">Cart</button></a>
                <a href="<?php echo site_url('main/logout');?>"><button class="navbar-btn nav-button" data-wow-delay="0.8s">Logout</button></a>
                <?php } else { ?>
                   <a href="<?php echo site_url('main/page/signin');?>"><button class="navbar-btn nav-button" data-wow-delay="0.8s">Sign In</button></a>
                 <a href="<?php echo site_url('main/page/signup');?>"><button class="navbar-btn nav-button " data-wow-delay="0.6s">Sign Up</button></a>
                 <?php } ?> 
              </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <!--div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <div class="button navbar-right" style="margin-right:-50px;">
                <!--a href="<?php echo site_url('main/page/cart');?>"><img src="<?php echo base_url();?>assets/img/cart1.png" title="Cart" width="35px" height="35px"--></a>&nbsp;
                 <!--a href="<?php echo site_url('main/page/cart');?>"><button class="navbar-btn nav-button" data-wow-delay="0.8s">Cart</button></a>
                 <a href="<?php echo site_url('main/page/signin');?>"><button class="navbar-btn nav-button" data-wow-delay="0.8s">Sign In</button></a>
                 <a href="<?php echo site_url('main/page/signup');?>"><button class="navbar-btn nav-button " data-wow-delay="0.6s">Sign Up</button></a>
                 <!--a href="<?php echo site_url('main/page/cart');?>"><button class="navbar-btn nav-button wow fadeInRight" data-wow-delay="0.6s">Cart</button></a-->
              <!--ul class="main-nav nav navbar-nav navbar-right" style="margin-top:-15px;">
                <!--li>
                    <?php echo "<BR>Welcome, <b id='welcome'><i>" . $username . "</i></b><BR><BR>"; ?>    
                </li-->
                <!--li class="wow fadeInDown" data-wow-delay="0.1s"><a href="<?php echo site_url('main/page/main_2');?>">Home</a></li>
                <li class="wow fadeInDown" data-wow-delay="0s"><a  href="<?php echo site_url('main/page/profile');?>">Profile</a></li>
                <li class="wow fadeInDown" data-wow-delay="0.1s"><a href="<?php echo site_url('main/productlist');?>">Shops</a></li>
                <li class="wow fadeInDown" data-wow-delay="0.2s"><a href="<?php echo site_url('member/page/dashboard');?>">Dashboard</a></li>
                <li class="wow fadeInDown" data-wow-delay="0.3s"><a href="<?php echo site_url('main/page/cart');?>">Cart</a></li>
                <li class="wow fadeInDown" data-wow-delay="0.4s"><a href="<?php echo site_url('main');?>">Logout</a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>

         <div class="slider-area">
            <div class="slider">
                <div id="bg-slider" class="owl-carousel owl-theme">       
                  <div class="item"><img src="<?php echo base_url()?>assets/img/mar.jpg" alt="Mirror Edge"></div>
                  <div class="item"><img src="<?php echo base_url()?>assets/img/slider-image-6.jpg" alt="The Last of us"></div>
                  <div class="item"><img src="<?php echo base_url()?>assets/img/slider-image-5.jpg" alt="GTA V"></div>
                </div>
            </div>
            <div class="container slider-content">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12">
                        <h2>Buy & Sell with Souq Anshar!</h2>
                        <p >Your First Dinar Dirham Marketplace that Use Muamalah System that Meets the Syariah Laws</p>
                       

                          <div class="search-form wow pulse" data-wow-delay="0.8s">
                            <form action= "<?php echo site_url('main/search');?>" method= "post" class=" form-inline "onsubmit="return checkForm(this)">
                                <div class="form-group">
                                    <input id="itemname" type="text" name= "itemname" class="form-control" placeholder="What are you looking for?">
                                </div>
                                <div class="form-group">
                                    <select name="sub_cat" id="sub_cat" class="form-control">
                                      
                                        <option selected>Select Your Category</option>
                                        <!--<option selected>All</option>-->                                      
                               

                                        <option value = "5">Business</option>
                                        <option value = "3">Travel</option>
                                        <option value = "4">Automotive</option>
                                        <option value = "1">Fashion</option>
                                        <option value = "2">Electronics</option>
                                    </select>
                                </div>
                                
                                <input type="submit" class="btn" value="Search">


                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


 <div class="content-area">
            <div class="container">
                <div class="row page-title text-center wow zoomInDown" data-wow-delay="1s">
                    <!--h5>Our Process</h5>-->
                    <h2>How we work for you?</h2>
                    <p>Souq Anshar is the first dinar and dirham marketplace to buy, sell and discover new, unique and pre-loved items among peoples. </p>
                </div>
                <div class="row how-it-work text-center">
                    <div class="col-md-4">
                        <div class="single-work wow fadeInUp" data-wow-delay="0.8s">
                            <img src="<?php echo base_url();?>assets/img/icon1.png" alt="">
                            <h3>Open for Halal Business</h3>
                            <p>Purchase product on our halal marketplace that follows the muamalah laws and principles. </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single-work  wow fadeInUp"  data-wow-delay="0.9s">
                        <img src="<?php echo base_url();?>assets/img/icon2.png" alt="">
                            <h3>Buy & Sell your Items Online</h3>
                            <p>We bring buyers and sellers together in one online medium to help reduce steps and cost.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single-work wow fadeInUp"  data-wow-delay="1s">
                            <img src="<?php echo base_url();?>assets/img/icon3.png" alt="">
                            <h3>Pay using DinarPal</h3>
                            <p>Shops and pay using DinarPal and experience the sensational of purchasing and paying using dinar and dirham.</p>
                        </div>
                    </div>
                </div>
            </div>

       <div class="footer-area">
            <div class="container" style="background:#000; height:50px;">
                <!--div class="row footer">-->
                    <!--div class="col-md-4">
                    </div>
                    <div class="col-md-4">
                        <div class="single-footer">
                          
                        </div>
                    </div>-->
                    <!--div class="col-md-4">
                        <div class="single-footer">-->
                <div class="row footer-copy">
                    <br>
                    <p style="text-align:center;">Copyright &copy; Souqanshar.com 2015</p>
                </div>
            </div>
        </div>
        
        
        
        
        
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/owl.carousel.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/wow.js"></script>
        <script src="<?php echo base_url();?>assets/js/main.js"></script>
    </body>
</html>
