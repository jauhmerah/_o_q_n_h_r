<div id="page-wrapper">
            <div id="page-inner" >
			 <div class="row">
			 	      <div class="col-md-12">
                        <h1 class="page-header">
                            Profile Update <small>*Update all about yourself*</small>
                        </h1>
                    </div>
                </div> 
                 <!-- /. ROW  -->
              <form role="form">
              <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Section: Basic Info
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                     <div class="form-group">
                                            <label>Upload Your Profile Picture</label>
                                            <!--<input type="file">-->
                                            <?php echo form_open_multipart('main/upload');?>
                                            <input type="file" name="userfile"/><br><br>
                                            <input type="submit" name="submit" value="upload image">
                                        </div>
                                       <div>
                                            <label>Username</label>
                                            <input class="form-control" placeholder="Please enter your username.">
                                        </div>
                                        <div class="form-group">
                                            <label>Email Address</label>
                                            <input class="form-control" placeholder="Please enter your email address.">
                                        </div>

                                         <div class="form-group">
                                            <label>Gender</label>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">Male
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">Female
                                                </label>
                                            </div>
                                        </div>
                                        
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                 <!-- /. PAGE INNER  -->
             <footer><p>Pisang Sdn Bhd. All right reserved. <!--Template by: <a href="#"></a></p></footer>
        </div>
        <!-- /. PAGE WRAPPER  -->

            </div>
        </div>



<!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="<?php echo base_url();?>assets/anot/dashboard/assets/js/jquery-1.10.2.js"></script>
    <!-- Bootstrap Js -->
    <script src="<?php echo base_url();?>assets/anot/dashboard/assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="<?php echo base_url();?>assets/anot/dashboard/assets/js/jquery.metisMenu.js"></script>
    <!-- Morris Chart Js -->
    <script src="<?php echo base_url();?>assets/anot/dashboard/assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="<?php echo base_url();?>assets/anot/dashboard/assets/js/morris/morris.js"></script>
    <!-- Custom Js -->
    <script src="<?php echo base_url();?>assets/anot/dashboard/assets/js/custom-scripts.js"></script>



