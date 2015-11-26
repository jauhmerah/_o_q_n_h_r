<!DOCTYPE html>
<html>
<head>
	<title>Shop</title>
	<meta charset="UTF-8">
</head>

<!--<?php 
		foreach($products as $data){?>

			<?php
					echo $data->item_name;
					echo $data->item_price;
			?>
		<?php }?>-->

<body>

<div class="col-sm-9 padding-right" ;">
					<div class="features_items"><!--features_items-->
					<br>	<h2 class="title text-center">All Items</h2></br>
					</div><!--features_items-->
</div>
<?php 
foreach($products as $data){?>


<div class="col-sm-4">
	
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										
										
										<p><?php echo $data->item_name?></p>
										<p><?php echo $data->item_availability?></p>

										
									</div>
									<div class="product-overlay">
										<div class="overlay-content" style="background:#ffa300">

											<h2>RM <?php echo $data->item_price?></h2>
											<p><?php echo $data->item_name?></p>
											<!--<a href="<?php echo site_url('main/page/productdetails/x1?item='.$data->item_id.'&cat='.$table); ?>">View</p>-->
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>
									</div>
							
									
								</div>
								
							</div>
						</div>	
	<?php }?>

</body>
<!--<?php

    echo "<pre>";
    print_r($products);
    echo "</pre>";

?>-->




</html>