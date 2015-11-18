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
										
										<h2><b>Availability:</b><?php echo $data->item_price?></h2>
										<p><?php echo $data->item_name?></p>
										<p><?php echo $data->item_availability?></p>

										
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