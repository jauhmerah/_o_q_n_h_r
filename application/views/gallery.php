<!DOCTYPE HTML>
<html lang ="en-US">
<head>
    <title>Ci Gallery</title>
    <meta charset="UTF-8">                                                                                                                          
</head>
<body>
<div id="gallery">
                    <?php if(isset($images) && count($images)):
                       foreach($images as $image):?>
                       <div class="thumb">
                            <a href="<?php echo $image['url'];?>">
                              <img src="<?php echo $image['thumb_url'];?>"/>
                            </a>
                        </div>

                     <?php endforeach; else:?>
                        <div id="blank_gallery">Please upload Your Image</div>
                     <?php endif;?>
                 </div>

                 <div id="upload">
                    <?php
                    echo form_open_multipart('gallery');
                    echo form_upload('userfile');
                    echo form_submit('upload','Upload');
                    echo form_close();
                    ?>
                 </div>
</body>
</html>