<html>
<head>
<title>Upload Form</title>
</head>
<body>



<!--<?php echo $error;?>-->
<?php echo form_open_multipart('upload/do_upload');?>

<?php echo "<input type='file' name= 'userfile' size='20' />";?>

<br /><br />

<?php echo "<input type= 'submit' value='upload' />";?>

</form>

</body>
</html>