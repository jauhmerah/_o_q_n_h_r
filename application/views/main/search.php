<!--input type="text" class="searchBox" id="searchBox"> </input>
<input type="submit" value="Search" class="btnInput" id="btnInput"> </input>-->

<?php $this->load->helper('form'); ?>
 
<?php echo form_open($this->uri->uri_string); ?>
<?php echo form_label('Search:', 'search-box'); ?>
<?php echo form_input(array('name' => 'q', 'id' => 'search-box', 'value' => $search_terms)); ?>
<?php echo form_submit('search', 'Search'); ?>
<?php echo form_close(); ?>
