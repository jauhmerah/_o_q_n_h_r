<html>
<head>
<title>Upload Form</title>
</head>
<body>
<<<<<<< HEAD
	<?php echo $error;?>

	<?php echo form_open_multipart('main/upload');?>
	<input type="file" name="userfile"/><br><br>
	<input type="submit" name="submit" value="upload image">
=======



<!--<?php echo $error;?>-->
<?php echo form_open_multipart('upload/do_upload');?>

<?php echo "<input type='file' name= 'userfile' size='20' />";?>

<br /><br />

<?php echo "<input type= 'submit' value='upload' />";?>

>>>>>>> origin/anis_pro_process
</form>

</body>
</html>
