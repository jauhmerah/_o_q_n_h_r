<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE-9"/>
</head>
<body>
	<?php echo $error;?>
	<?php echo form_open_multipart('main/upload');?>
	<input type="file" name="userfile"/><br><br>
	<input type="submit" name="submit" value="upload image">
</form>
</body>
</html>

