<html>
<head>
	<title>cart</title>
</head>
<body>
<?php

$this->load->library('table');
$this->table->set_heading('item_id', 'item_name','item_price');
foreach($listProduct as $p)
	$this->table->add_row($p->item_id,$p->item_name,$p->item_price);
echo $this->table->generate();
?>
</body>
</html>