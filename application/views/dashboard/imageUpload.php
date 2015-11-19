<script language="javascript" type="text/javascript" src="<?php echo $this->config->item('base_url'); ?>js/imageUpload.js"></script>  
  
  
  
<form method="post" id="signin" action="<?php echo $this->config->item('base_url'); ?>ImageUpload/saveImageIntoDB" autocomplete="off" enctype='multipart/form-data' class="common-forms">  
  
<input type="hidden" name="addedImg" id="addedImg" value="<?php echo set_value('addedImg')?>">  
  
  
  
Title : <input type="text" name="txtTitle" id="txtTitle">  
  
<div id="iframe_container">  
  
<iframe src="<?php echo $this->config->item('base_url'); ?>ImageUpload/display_upload" frameborder="0" style="height:75px;"></iframe>  
  
</div>  
  
  
  
<div id="main">  
  
<div id="images_container">  
  
  
  
</div>  
  
</div>  
  
<input value="Submit" tabindex="2" type="submit"/>  
  
  
  
</form>  