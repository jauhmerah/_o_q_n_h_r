<div>  
  
<form name="iform" action="<?php echo $PHP_SELF;?>" method="post" enctype="multipart/form-data">  
  
<input id="file" type="file" name="image" onChange="iform.submit();window.parent.upload(this,'<?php echo $this->config->item('base_url')?>');" />  
  
  
<span style="font-size:11px; color:#666666;">only gif, png, jpg files.</span>  
  
<input type="hidden" value="" name="div_id" />  
  
</form>  
  
</div>