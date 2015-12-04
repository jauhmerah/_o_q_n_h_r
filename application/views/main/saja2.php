<!DOCTYPE html>
<html>
<body>
<!--?php echo form_open('main/search');?>
Category:<br>
<input type="text" name="category">
<br>
<input type="submit">
</form>-->

<?php echo form_open('main/search'); ?>
		<div>
			<?php echo form_label('sub_cat:', 'sub_cat'); ?>
			<input name = "itemname" placeholder = "Search">
		</div>
			 <div class="form-group">
                                    <select name="sub_cat"id="" class="form-control" placeholder = "Select Your Category" matches=""/>
										
										<!--<option selected>All</option>-->
										<option href="<?php echo site_url('main/saja2');?>">Select Your Category</option>										
                                        <option value = "5">Business</option>
                                        <option value = "3">Travel</option>
                                        <option value = "4">Automotive</option>
                                        <option value = "1">Fashion</option>
										<option value = "2">Electronics</option>
										</select>
                                </div>
							<div>
			<?php echo form_submit('action', 'Search'); ?>
		</div>
<?php echo form_close(); ?>
</body>
</html>




