<div id="page-wrapper">
            <div id="page-inner" >
             <div class="row">
                      <div class="col-md-12">
                        <h1 class="page-header">
                            NEW ITEM <small> <br>Upload a clear picture of your items. Please refer the photo guides for more information. </small>
                        </h1>
                    </div>
                </div> 
                  <!-- /. ROW  -->
              <form role="form" action="<?php echo site_url('member/page/profile/6'); ?>" method="post" class="registration-form">
              <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Section: Product Info
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                            <label>Item Name</label>
                                            <input class="form-control" name="itemname" placeholder="Please enter your item name.">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                            <label>Item Price</label>
                                            <input class="form-control" name="price" placeholder="Please enter your price.">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                 <div class="row">
                               <div class="col-lg-6">
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

                               <div class="form-group">
                            <div class="row">
                                <div class="col-lg-6">
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



             <div class="col-sm-4">  <br> <br>
                  <input type="submit" class="btn btn-warning" style="background-color:#2DAADF" value="Add Product"></input>
             </div>
              
                
                             
                                
                             


                   




                          

