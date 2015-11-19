<html>
<head>
<title>Upload Form</title>
</head>
<body>

<h3>Your file was successfully uploaded!</h3>

<!--<img src="<?php echo $img?>" width="300" height="300">-->

<img src="<?=base_url().'/upload/'; ?><?php echo $upload_data['file_name']; ?>" width="300" height="300">


<ul>
 
<?php foreach ($upload_data as $item => $value ):?>
<li><?php echo $item;?>: <?php echo $value;?>: </li>
<?php endforeach; ?>
</ul>

<p><?php echo anchor('upload', 'Upload Another File!'); ?></p>

</body>
</html>