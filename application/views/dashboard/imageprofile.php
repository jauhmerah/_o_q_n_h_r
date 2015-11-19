<div id="page-wrapper">
            <div id="page-inner" >
			 <div class="row">
			 	      <div class="col-md-12">
                        <h1 class="page-header">
                            Change Profile Image
                        </h1>
                    </div>
                </div> 
                 <!-- /. ROW  -->
                  <?php echo form_open_multipart('upload/do_upload');?>

                    <?php echo "<input type='file' name= 'userfile' size='20' />";?>

                    <br /><br />

                    <?php echo "<input type= 'submit' value='upload' />";?>

                   <div id="timelineProfilePic">
                          <img class="img-circle" src= "<?php echo base_url('./upload'); ?>" class="bgImage" style="margin-top:0px; margin-left:45px;width:150px;">
                    </div>

                    </form>
                    
                        
                                                  
                    
                             
                                </div>
                                </div>   
                                </div>
                                <!--<div id='preview'>
                              </div>
                                <form id="imageform" method="post" enctype="multipart/form-data" action='ajaxImageUpload.php' style="clear:both">
                                    Upload image: 
                                    <div id='imageloadstatus' style='display:none'><img src="loader.gif" alt="Uploading...."/></div>
                                    <div id='imageloadbutton'>
                                   <inpu t type="file" name="photos[]" id="photoimg" multiple="true" />
                                    </div>
                                </form>-->
                              <!--<br /><br />
                              <div id="row">
                                <div class="col-xs-6 col-sm-4">
                                  <form id="imageform" method="post" enctype="multipart/form-data"action='ajaxImageUpload.php' style="clear:both">
                                    <img src='#' width="180" height="180"></img>
                                      <input type="file" name="userfile" size="20" />
                                       <br/>
                                     <input type="submit" value="upload" name="upload" class="btn" style="background-color:#ffa300 "/>
                                   </form>
                                </div>
                                <div class="col-xs-6 col-sm-4">
                                  <form id="imageform" method="post" enctype="multipart/form-data"action='ajaxImageUpload.php' style="clear:both">
                                    <img src='#' width="180" height="180"></img>
                                      <input type="file" name="userfile" size="20" />
                                       <br/>
                                     <input type="submit" value="upload" name="upload" class="btn" style="background-color:#ffa300 "/>
                                   </form>
                                </div>
                                <div class="col-xs-6 col-sm-4">
                                  <form id="imageform" method="post" enctype="multipart/form-data"action='ajaxImageUpload.php' style="clear:both">
                                   <img src='#' width="180" height="180"></img>
                                      <input type="file" name="userfile" size="20" />
                                       <br/>
                                     <input type="submit" value="upload" name="upload" class="btn" style="background-color:#ffa300" />
                                  </form>
                                </div>
                              </div>-->



            
                

                     
                                       
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                 <!-- /. PAGE INNER  -->
             <footer><p>Pisang Sdn Bhd. All right reserved. <!--Template by: <a href="#"></a></p></footer>
        </div>
        <!-- /. PAGE WRAPPER  -->

           
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
    



