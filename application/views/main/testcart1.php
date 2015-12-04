<!DOCTYPE html>
<html>
<body>
<ul class="products">
    <?php foreach($products as $p): ?>
    <li>
        <h3><?php echo $p['item_name']; ?></h3>
        
        <small>&euro;<?php echo $p['item_price']; ?></small>
        <?php echo form_open('cart/add_cart_item'); ?>
            <fieldset>
                <label>Quantity</label>
                <?php echo form_input('quantity', '1', 'maxlength="2"'); ?>
                <?php echo form_hidden('product_id', $p['item_id']); ?>
                <?php echo form_submit('add', 'Add'); ?>
            </fieldset>
        <?php echo form_close(); ?>
    </li>
    <?php endforeach;?>
</ul>
</body>

<script>
    $(document).ready(function() { 
        /*place jQuery actions here*/ 
       
        $("ul.products form").submit(function() {
            // Get the product ID and the quantity 
            var id = $(this).find('input[name=product_id]').val();
            var qty = $(this).find('input[name=quantity]').val();
            
            $.post(link + "cart/add_cart_item", { product_id: id, quantity: qty, ajax: '1' },
                function(data){ 
                    // Interact with returned data
             });
             
            return false; // Stop the browser of loading the page defined in the form "action" parameter.
        });
    
    });
</script>

</html>