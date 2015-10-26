<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--title>Bootstrap Modal Registration Form Template</title>-->
		<title>Souq Anshar | Sign Up</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/miza-signup/assets/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo base_url();?>assets/miza-signup/assets/css/form-elements.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/miza-signup/assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url();?>assets/miza-signup/assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url();?>assets/miza-signup/assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url();?>assets/miza-signup/assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="<?php echo base_url();?>assets/miza-signup/assets/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body>

        <!-- Content -->
        <!--div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                        	<a class="logo" href="index.html"></a>
                            <h1><strong>Bootstrap</strong> Modal Registration Form</h1>
                            <div class="description">
                            	<p>
	                            	This is a free responsive modal registration form made with Bootstrap. 
	                            	Download it on <a href="http://azmind.com"><strong>AZMIND</strong></a>, customize and use it as you like!
                            	</p>
                            </div>
                            <div class="top-big-link">
                            	<a class="btn btn-link-1 launch-modal" href="#" data-modal-id="modal-register">Launch modal</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>-->
        
        <!-- MODAL -->
        
        	<div class="modal-dialog">
        		<div class="modal-content">
        			
        			<div class="modal-header">
        				<!--button type="button" class="close" data-dismiss="modal">
        					<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
        				</button>-->
        				<h3 class="modal-title" id="modal-register-label">Register now</h3>
        				<p>Fill in the form below to get instant access:</p>
        			</div>
        			
        			<div class="modal-body">
        				
	                    <form role="form" action="<?php echo site_url('main/page/success/4'); ?>" method="post" class="registration-form">
						    <div class="form-group">
	                        	<label class="sr-only" for="form-email">Email</label>
	                        	<input type="text" name="useremail" placeholder="Email..." class="form-email form-control" id="email">
	                        </div>
							<div class="form-group">
	                        	<label class="sr-only" for="form-username">Username</label>
	                        	<input type="text" name="username" placeholder="Username..." class="form-username form-control" id="username">
	                        </div>
							<div class="form-group">
	                        	<label class="sr-only" for="form-password">Password</label>
	                        	<input type="password" name="password" placeholder="Password..." class="form-password form-control" id="password">
	                        </div>
							<div class="form-group">
	                        	<label class="sr-only" for="form-retype-password">Re-type Password</label>
	                        	<input type="password" name="repassword" placeholder="Re-type-password..." class="form-re-type-password form-control" id="repassword">
	                        </div>
							<label class="checkbox" style="padding-left:20px">
                        <input type="checkbox" name="checkbox" id="checkbox" style="margin-top:9px" value="agree this condition"> I agree to the Terms of Service and Privacy Policy
                            </label>
	                    	<!--div class="form-group">
	                    		<label class="sr-only" for="form-first-name">First name</label>
	                        	<input type="text" name="form-first-name" placeholder="First name..." class="form-first-name form-control" id="form-first-name">
	                        </div>-->
	                        <!--div class="form-group">
	                        	<label class="sr-only" for="form-last-name">Last name</label>
	                        	<input type="text" name="form-last-name" placeholder="Last name..." class="form-last-name form-control" id="form-last-name">
	                        </div>-->
	                        <!--div class="form-group">
	                        	<label class="sr-only" for="form-about-yourself">About yourself</label>
	                        	<textarea name="form-about-yourself" placeholder="About yourself..." 
	                        				class="form-about-yourself form-control" id="form-about-yourself"></textarea>
	                        </div>-->
	                        <button type="button" class="btn" name = "butang" id = "butang">Sign me up!</button>
	                    </form>
	                    
        			</div>
        			
        		</div>
        	</div>



        <!-- Javascript -->
        <script src="<?php echo base_url();?>assets/miza-signup/assets/js/jquery-1.11.1.min.js"></script>
        <script src="<?php echo base_url();?>assets/miza-signup/assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>assets/miza-signup/assets/js/jquery.backstretch.min.js"></script>
        <!--script src="<?php echo base_url();?>assets/miza-signup/assets/js/scripts.js"></script>-->
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

    <script>
    jQuery(document).ready(function() {
    
    /*
        Fullscreen background
    */
    $.backstretch("<?php echo base_url();?>assets/miza-signup/assets/img/backgrounds/pasarmalam3.jpg");
    
    /*
        Modals
    */
    $('.launch-modal').on('click', function(e){
        e.preventDefault();
        $( '#' + $(this).data('modal-id') ).modal();
    });
    
    /*
        Form validation
    */
    $('.registration-form input[type="text"], .registration-form textarea').on('focus', function() {
        $(this).removeClass('input-error');
    });
    
    /*$('.registration-form').on('submit', function(e) {
        
        $(this).find('input[type="text"], textarea').each(function(){
            if( $(this).val() == "") {
                e.preventDefault();
                $(this).addClass('input-error');
            }
            else {
                if ($('password').val() != $('repassword').val()) {
                    e.preventDefault();
                    $(this).addClass('input-error');
                } else{
                    $(this).removeClass('input-error');
                };
                
            }
        });
        
    });*/
    
        $('#butang').click(function() {
           var proceed = true;
           if ($("#email").val() == "") {
                proceed = false;
                $("#email").addClass('input-error');
           }else{
                $("#email").removeClass('input-error');
           };
           if ($("#username").val() == "") {
                proceed = false;
                $("#username").addClass('input-error');
           }else{
                $("#username").removeClass('input-error');
           };
           if ($("#password").val() != $("#repassword").val()) {
                proceed = false;
                $("#password").addClass('input-error');
                $("#repassword").addClass('input-error');
           }else{
                $("#password").removeClass('input-error');
                $("#repassword").removeClass('input-error');
           };
           //alert($("#checkbox").val());
           if (!($("#checkbox").is(':checked'))) {
                proceed = false;
                $("#checkbox").addClass('input-error');
                //alert("xcheck");
           }else{
                $("#checkbox").removeClass('input-error');
                //alert("check");
           };

           if (proceed) {
                $('.registration-form').submit();
           };
        });
    
    
    });
    </script>

</html>

