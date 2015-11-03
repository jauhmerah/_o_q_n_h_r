<?php

echo form_label('Search Category : ');
$data = array(
'name' => 'category',
'placeholder' => 'Please Enter category'
);
echo form_input($data);
echo "<div class='error_msg'>";
if (isset($id_error_message)) {
echo $id_error_message;
}

echo "</div>";
echo form_submit('submit', 'Show Record');
echo form_close();
?>

<?php
if (isset($result_display)) {
echo "<p><u>Result</u></p>";
if ($result_display == 'No record found !') {
echo $result_display;
} else {
echo "<table class='result_table'>";
echo '<tr><th>sub_cat_id</th><th>sub_cat</th><tr/>';
foreach ($result_display as $value) {
echo '<tr>' . '<td class="sub_cat_id">' . $value->sub_cat_id . '</td>' . '<td>' . $value->sub_cat . '</td>' . '<td class="sub_cat">' . '</td>' . '<tr/>';
}
echo '</table>';
}
}
?>