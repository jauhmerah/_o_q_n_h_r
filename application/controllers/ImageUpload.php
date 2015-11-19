<?php  
  
class ImageUpload  extends Controller {  
  
  
  
public function __construct() {  
  
parent::Controller();  
  
$this->load->helper(array('form','url'));  
  
$this->load->library('validation');  
  
}  
  
  
  
function index() {  
  
$this->load->view('imageUpload');  
  
}  
  
  
  
/*display image uploading interface and display uploaded image  
  
*/  
  
function display_upload() {  
  
if (isset($_FILES['image'])) {  
  
$datedate = date("Ymdhis");  
  
$imageNewName = $date.'_'.$_FILES['image']['name'];  
  
$config['upload_path'] = './photos/'; /* NB! create this dir! */  
  
$config['allowed_types'] = 'jpg|jpeg|png|pjpeg|x-png|X-PNG|gif';  
  
$config['max_size']  = '2048';  
  
$config['file_name']  = $imageNewName;  
  
$config['remove_spaces']  = TRUE;  
  
  
  
/* Load the upload library */  
  
$this->load->library('upload', $config);  
  
  
  
$upload = $this->upload->do_upload('image');  
  
  
  
if ($upload) {  
  
?>  
  
  
  
<script type="text/javascript" language="javascript">  
  
window.parent.setUploadedImage('<?php echo $imageNewName; ?>','<?php echo $this->config->item('base_url').'photos/'.$imageNewName?>', '<?php echo $file_temp_name?>', '<?php echo $div_id?>');  
  
</script>  
  
<?php  
  
}  
  
else {  
  
?>  
  
<script type="text/javascript" language="javascript">  
  
alert('<?php echo $this->upload->display_errors();?>');  
  
  
  
</script>  
  
<?php  
  
}  
  
  
  
}  
  
else {  
  
$err = true;  
  
}  
  
  
  
?>  
  
  
  
<?php  
  
$this->load->view('uploading_interface');  
  
}  
  
}  
  
?>  