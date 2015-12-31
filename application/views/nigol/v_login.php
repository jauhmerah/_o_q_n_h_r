

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <!--h1><strong>Bootstrap</strong> Login Form</h1>-->
                            <div class="description">
                            	<!--p>
	                            	This is a free responsive login form made with Bootstrap. 
	                            	Download it on <a href="http://azmind.com"><strong>AZMIND</strong></a>, customize and use it as you like!
                            	</p>-->
                            </div>
                        </div>
                    </div>
                    <div class="row" >
                        <div class="col-sm-6 col-sm-offset-3 form-box"  >
						
                        	<div class="form-top" >
                        		<div class="form-top-left">
                        			<h3>Sign In to Souq Anshar</h3>
                            		<p>Enter your username and password to Sign In:</p>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-key"></i>
                        		</div>
                            </div>
                            <div class="form-bottom">

			                    <form role="form" action="<?php echo site_url('nigol/checklogin');?>" method="post" class="login-form">
			                    	<div class="form-group">
			                    		<label class="sr-only" for="form-username">Username</label>
			                        	<input type="text" name="username" placeholder="Username..." class="form-username form-control" id="username" required>
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-password">Password</label>
			                        	<input type="password" name="password" placeholder="Password..." class="form-password form-control" id="password" required>
			                        </div>
									<label class="checkbox" style="padding-left:20px;" >
                                         <!--<input  type="checkbox" name="form-checkbox"style="margin-top:9px" value="remember-me"> Remember me-->
                                         <span class="pull-right">
                                                <a data-toggle="modal" href="#myModal"> Forgot Password?</a>

                                         </span>
                                    </label>
			                        <button type="submit" class="btn" >Sign in!</button>
									<div class="registration" >
											 Don't have an account yet?
											 <span class="pull-right">
										     <a data-toggle="modal" class="" href="<?php echo site_url('main/page/signup');?>">
											 Create an account
										     </a>
											 </span>
									</div>
			                    </form>
		                    </div>
                        </div>
                    </div>
                    <!--<div class="row">
                        <div class="col-sm-6 col-sm-offset-3 social-login">
                        	<h3>...or login with:</h3>
                        	<div class="social-login-buttons">
	                        	<a class="btn btn-link-1 btn-link-1-facebook" href="https://www.facebook.com/login.php">
	                        		<i class="fa fa-facebook"></i> Facebook
	                        	</a>
	                        	<a class="btn btn-link-1 btn-link-1-twitter" href="https://twitter.com/?lang=en">
	                        		<i class="fa fa-twitter"></i> Twitter
	                        	</a>
	                        	<!--a class="btn btn-link-1 btn-link-1-google-plus" href="#">
	                        		<i class="fa fa-google-plus"></i> Google Plus
	                        	</a>-->
                        	</div>
                        </div>
                    <!--</div>-->
                </div>
            </div>
            
        </div>


        <!-- Javascript -->
        <script src="<?php echo base_url();?>assets/miza-signin/assets/js/jquery-1.11.1.min.js"></script>
        <script src="<?php echo base_url();?>assets/miza-signin/assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>assets/miza-signin/assets/js/jquery.backstretch.min.js"></script>
        <!--<script src="<?php echo base_url();?>assets/miza-signin/assets/js/scripts.js"></script>-->
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->
		
		  
          


    <script>
    jQuery(document).ready(function() {
	
        <?php
            if(isset($error)){
            echo "alert('wrong password');";
        }
        ?>
        /*
            Fullscreen background
        */
        $.backstretch("<?php echo base_url(); ?>/assets/miza-signin/assets/img/backgrounds/pasarmalam3.jpg");
        
        /*
            Form validation
        */
        $('.login-form input[type="text"], .login-form input[type="password"], .login-form textarea').on('focus', function() {
        	$(this).removeClass('input-error');
        });
        
        $('.login-form').on('submit', function(e) {
        	
        	$(this).find('input[type="text"], input[type="password"], textarea').each(function(){
        		if( $(this).val() == "" ) {
        			e.preventDefault();
        			$(this).addClass('input-error');
        		}
        		else {
        			$(this).removeClass('input-error');
        		}
        	});
        	
        });
    
    
    });
    </script>

