<!DOCTYPE html>
<html>
<head>
	<title>Shop</title>
	<meta charset="UTF-8">
</head>
<body>
	<div id ="products">
	<ul>
		<?php foreach ($products as $product): ?>
		<li>
		<?php echo form_open('main/lala'); ?>
		<div class="name"><?php echo $product->item_name; ?></div>
		<div class="price">$<?php echo $product->item_price; ?></div>
		<?php echo form_close(); ?>
	    </li>
	    <?php endforeach; ?>
    </ul>
    </div>
</body>
</html>
