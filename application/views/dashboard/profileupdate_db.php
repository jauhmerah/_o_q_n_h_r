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
            <form role="form" action = "<?= site_url('member/page/profileupdate_db/5');?>" method = 'post'>
             <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Section: Basic Info
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                <div id="timelineProfilePic">
                                 <img class="img-circle" src="<?php echo base_url();?>assets/hanis/images/arash.jpg" class="bgImage" style="margin-top:0px; margin-left:45px;width:150px;">
                                    <p>
                                     <div class="form-group">
                                            <label>Upload Your Profile Picture</label>
                                            
                                            <?php
                                                if (isset($error)) {
                                                     echo $error;
                                                 }                                                 
                                            ?>

                                        <form action = "<?php echo  form_open_multipart('upload_controller/do_upload')?>" method = 'post'>
                                            <input type="file" name="userfile"/><br>
                                            <input type="submit" name="pr_image" value="Upload image">
                                        </form>
                                        </div>
                                       <div class="form-group">
                                            <label>Username</label>
                                            <input type="text" name="username" placeholder="Please enter your username." class="form-username form-control" id="username">
                                        </div>

                                        <div class="form-group">
                                            <label>Email Address</label>
                                            <input type="text" name="email" placeholder="Please enter your email address." class="form-email form-control" id="email">
                                        </div>

                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" name="password" placeholder="Please enter your password." class="form-password form-control" id="password">
                                        </div>

                                        <div class="form-group">
                                            <label>Address</label>
                                            <input type="text" name="address" placeholder="Please enter your address." class="form-address form-control" id="address">
                                        </div>

                                        <div class="form-group">
                                            <label>Phone Number</label>
                                            <input type="text" name="phone" placeholder="Please enter your phone number." class="form-phone form-control" id="phone">
                                        </div>

                                         <div class="form-group">
                                            <label>Gender</label>
                                            <div class="radio">
                                                <label>
                                                    
                                                <input type="radio" name="gender" id="gender_m" value="Male" checked="">Male
                                                <br>
                                                 <input type="radio" name="gender" id="gender_m" value="Female" checked="">Female   
                                                </label>

                                        </div>
                                        <br>
                                        <br>

                                         <button type="submit" name="submit" value="Update" class="button" data-toggle="modal" data-target="#myModal">Update</button>


                                    

                                       
                                       <!-- <div class="modal collapse in" id="basicModalError" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="false" style="display:block;">
                                            <div class="modal-dialog" style="margin-top:20%;">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                         <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                                           <i class="fa fa-times">
                                                           </i>
                                                       </button>
                                                       <br>
                                                    </div>     
                                                     <div class="modal-body">
                                                             <div class="alert alert-success fade in" role="alert">Update success ..</div>-->
                                                            <!-- <div class="col-md-6" style="float:left;">
                                                                "Successfully update!"
                                                             <i class="fa fa-check">
                                                              </i>
                                                              </div>  
                                                             <div class="col-md-6" align="right"></div>
                                                                <button type="button" class="button green-button" data-toggle="modal" data-dismiss="modal" style="height:30px;line-height:5px;">Close</button>
                                                            </div>
                                                     </div>
                                                </div> -->    

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
    <script src="<?php echo base_url();?>assets/anot/dashboard/assets/css/bootstrap.css"></script>

    <script>
<div class="modal-backdrop  in"></div>
    



