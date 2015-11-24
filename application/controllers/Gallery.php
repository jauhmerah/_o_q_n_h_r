<?php

class Gallery extends Ci_Controller{

	function index(){

		$this->load->model('Gallery_model');

		if ($this->input->post('upload')) {
		    $this->Gallery_model->do_upload();
		}

		//$data['image']=$this->Gallery_model->get_images();

		$this->load->view('gallery');
	}
}
?>