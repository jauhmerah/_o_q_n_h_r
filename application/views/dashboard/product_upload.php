<div id="page-wrapper">
            <div id="page-inner" >
			 <div class="row">
			 	      <!--<div class="col-md-12">-->
                        <h1 class="page-header">
                            NEW ITEM <small> <br> Upload a clear picture of your items. Please refer the photo guides for more information.</small>
                        </h1>
                    </div>
                </div> 
                 <!-- /. ROW  -->
              <form role="form" action = "<?= site_url('member/page/product_upload/6');?>" method = 'post'>
              <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Section: Product Info
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">                              
                                       <div class="form-group">
                                        <div class="col-md-6">
                                            <label>Item name</label>
                                            <input class="form-control" name="itemname" placeholder="Please enter your item name.">
                                            <!--input type="text" name="username" placeholder="Please enter your username." class="form-username form-control" id="username">-->
                                        </div>
                                      </div>
                                        <div class="form-group">
                                          <div class="col-md-6">
                                            <label>Email Address</label>
                                            <input type="text" name="email" placeholder="Please enter your email address." class="form-email form-control" id="email">
                                          </div>
                                        </div>
                                      <div class="form-group">
                                          <div class="col-md-6">
                                            <label>Item Price</label>
                                            <input class="form-control" name="dinar_price" placeholder="Please enter your item price in dinar.">
                                            <!--input type="text" name="email" placeholder="Please enter your email address." class="form-email form-control" id="email">-->
                                        </div>
                                      </div>

                                        <!--div class="form-group">
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

                                        </div>-->
                                        
                                    <div class="form-group"><br><br><br>
                                       <div class="row">
                                         <div class="col-md-6">
                                                <label>Category</label>
                                                <select class="form-control" name="category">
                                                    <option>Fashion</option>
                                                    <option>Electronic</option>
                                                    <option>Travel</option>
                                                    <option>Automotive</option>
                                                    <option>Business</option>
                                                    <option>Service</option>
                                          </select>
                                        </div>
                                      </div>
                                    </div>
                               

                               <div class="form-group">
                                  <div class="row">
                                     <div class="col-md-6">
                                            <label>Subcategory</label>
                                             <select class="form-control" name="subcategory">
                                                <optgroup label ="Fashion">
                                                   <option value ="healthandbeauty">Health and Beauty</option>
                                                   <option value ="womenswear">Women's Wear</option>
                                                   <option value ="menswear">Men's Wear</option>
                                                   <option value ="kids">Kids</option>
                                                   <option value ="sportwear">Sport Wear</option>
                                                </optgroup>
                                                <optgroup label ="Electronic">
                                                   <option value ="homeappliances">Home Appliances</option>
                                                   <option value ="homeandliving">Home and Living</option>
                                                   <option value ="cameras">Cameras</option>
                                                   <option value ="computersandlaptops">Computers and Laptops</option>
                                                </optgroup>
                                                <optgroup label ="Travel">
                                                   <option value ="bagsandbackpacks">Bags and Backpacks</option>
                                                   <option value ="luggage">Luggage</option>
                                                   <option value ="travlaccessories">Travel's Accessories</option>
                                                </optgroup>
                                                <optgroup label ="Automative">
                                                    <option value ="carcare">Car Care</option>
                                                    <option value ="toolsandequipment">Tools and Equipments</option>
                                                    <option value ="interioraccessories">Interior Accessories</option>
                                                    <option value ="motorcycles">Motorcycles</option>
                                                    <option value ="replacementparts">Replacement Parts</option>
                                                    <option value ="wheelandtyres">Wheel and Tyres</option>
                                                    <option value ="oilsandfluids">Oils and Fluids</option>
                                                </optgroup>
                                                <optgroup label ="Business">
                                                    <option value ="businessplans">Business Plans</option>
                                                    <option value ="careeradvices">Career Advices</option>
                                                    <option value ="interioraccesories">Interior Accessories</option>
                                                    <option value ="presentations">Presentations</option>
                                                    <option value ="marketresearch">Market Research</option>
                                                </optgroup>
                                                 <optgroup label ="Services">
                                                    <option value ="counselling">Counseling</option>
                                                    <option value ="composing">Composing</option>
                                                    <option value ="Web Design">Web Design</option>
                                                </optgroup>
                                             </select>
                                        </div>
                                        <br>
                                        <br>
                                     </div>
                                  </div>   
                              </div>
                            </div>
                                <!--<div id='preview'>
                              </div>
                                <form id="imageform" method="post" enctype="multipart/form-data" action='ajaxImageUpload.php' style="clear:both">
                                    Upload image: 
                                    <div id='imageloadstatus' style='display:none'><img src="loader.gif" alt="Uploading...."/></div>
                                    <div id='imageloadbutton'>
                                   <input type="file" name="photos[]" id="photoimg" multiple="true" />
                                    </div>
                                </form><p>-->
                              <br /><br />
                              <div id="row">
                                <div class="col-sm-9 col-md-5">
                                  <form id="imageform" method="post" enctype="multipart/form-data"action='ajaxImageUpload.php' style="clear:both">
                                    <img src='#' width="180" height="180"></img>
                                      <input type="file" name="userfile" size="20" />
                                       <br/>
                                     <input type="submit" value="upload" name="upload" class="btn" style="background-color:#ffa300 "/>
                                   </form><p>
                                </div>
                                <div class="col-sm-3 col-md-5">
                                  <form id="imageform" method="post" enctype="multipart/form-data"action='ajaxImageUpload.php' style="clear:both">
                                    <img src='#' width="180" height="180"></img>
                                      <input type="file" name="userfile" size="20" />
                                       <br/>
                                     <input type="submit" value="upload" name="upload" class="btn" style="background-color:#ffa300 "/>
                                   </form><p>
                                </div>
                                <div class="col-sm-9 col-md-5">
                                  <form id="imageform" method="post" enctype="multipart/form-data"action='ajaxImageUpload.php' style="clear:both">
                                   <img src='#' width="180" height="180"></img>
                                      <input type="file" name="userfile" size="20" />
                                       <br/>
                                     <input type="submit" value="upload" name="upload" class="btn" style="background-color:#ffa300" />
                                  </form>
                                </div>
                              </div>
             <!--div class="col-sm-4"-->
             <div class="col-md-12">
              <br>
                  <input type="submit" class="btn btn-warning" style="background-color:#2DAADF" value="Add Product"></input>
             </div>
           </div>
         </div>
       </div>
              
                

                                        
                                       <!--button type="submit" name="submit" value="Update" class="button" data-toggle="modal" data-target="#myModal">Update</button>-->
                                       
                                    
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
    



<<<<<<< HEAD





                          </div>
                        </div>
                      </div>
          
            </div>
          </div>

                          
=======
>>>>>>> origin/anis_pro_process
