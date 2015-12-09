<!DOCTYPE html>
<html>
<head>
	<title>cart</title>
</head>
<body>
 
<div id="wrap">
 
    <?php $this->view($content); ?>
     
    <div class="cart_list">
        <h3>Your shopping cart</h3>
        <div id="cart_content">
            <?php echo $this->view('main/page/testcart2'); ?>
        </div>
    </div>
</div>
 
</body>
</html>