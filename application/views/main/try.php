<!DOCTYPE html>
<html>
<body>
<?php

					if(sizeof($products)==0)
					{
						echo '<h2 style="text-align:center">ITEM NOT FOUND</h2>';
						echo '<br></br><br></br><br></br>';
					
						echo form_open('main/search'); 
						
			             echo form_label('sub_cat:', 'sub_cat'); 

			            echo form_input('itemname','','placeholder=Search');

			             echo '<br></br><br></br><br></br>';
			            echo '<select name="sub_cat"id="" class="form-control" placeholder = "Select Your Category" matches=""/>
										
										<!--<option selected>All</option>-->
										<option >Select Your Category</option>										
                                        <option value = "5">Business</option>
                                        <option value = "3">Travel</option>
                                        <option value = "4">Automotive</option>
                                        <option value = "1">Fashion</option>
										<option value = "2">Electronics</option>
							 </select>';
							
						 echo '<input id="buttonCheck" type="submit" name= "action"class="btn" value="Search" style="width:100px; margin:0 auto; background-color:#ffa300;">';
						 echo form_close(); 
					}
					foreach($products as $data){?>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="<?php echo base_url();?>assets/anot/images/souq/gincu1.jpg" alt="" />
										<h2>RM <?php echo $data->item_price?></h2>
										<p><?php echo $data->item_name?></p>
										<!--<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>-->
									</div>
									
								</div>
								
							</div>
						</div>
						
<?php }?>
</body>
</html>