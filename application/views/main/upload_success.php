<div id="page-wrapper">
            <div id="page-inner" >
			 <div class="row">
			 	      <div class="col-md-12">
                        <h1 class="page-header">
                            Change Profile Image
                        </h1>
                    </div>
                </div> 
<body>

<h3>Your file was successfully uploaded!</h3>

<!--<img src="<?php echo $img?>" width="300" height="300">-->

<img src="<?=base_url().'/upload/'; ?><?php echo $upload_data['file_name']; ?>" width="300" height="300">


<ul>
 
<?php foreach ($upload_data as $item => $value ):?>
<li><?php echo $item;?>: <?php echo $value;?>: </li>
<?php endforeach; ?>
</ul>

<p><?php echo anchor('upload', 'Upload Another File!'); ?></p>

</body>
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
