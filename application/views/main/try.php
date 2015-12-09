<!DOCTYPE html>
<html>
<body>
<?php

					if(sizeof($products)==0)
					{
						echo '<h2 style="text-align:center">ITEM NOT FOUND</h2>';
						
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
										<?php
                        
				                        // Create form and send values in 'shopping/add' function.
				                        echo form_open('main/add');
				                        echo form_hidden('id', $data->item_id);
				                        echo form_hidden('name', $data->item_name);
				                        echo form_hidden('price', $data->item_price);
				                       
				                        
				                        ?> </div> 
				                    <div id='add_button'>
				                        <?php
				                        $btn = array(
				                            'class' => 'fg-button teal',
				                            'value' => 'Add to Cart',
				                            'name' => 'action'
				                        );
				                        
				                        // Submit Button.
				                        echo form_submit($btn);
				                        echo form_close();
				                        ?>

									</div>
									
								</div>
								
							</div>
						</div>
						
<?php }?>
</body>
</html>