<?php

class Upload extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	}

	function index()
	{
		$this->load->view('upload_form', array('error' => ' ' ));
	}

	function do_upload()
	{
		if($this->input->post('upload'))

        {
		$config['upload_path'] = './upload/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '100';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';
		$config['encrypt_name']= true;
		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());

			$this->load->view('upload_form', $error);
		}
		else
		{
			$data=$this->upload->data();
			$file=array(
				'source'=>$data['source']);
			$this->gallery_model->add_image($file);
			$data=array('upload_data'=>$this->upload->data());
			$this->load->view('dashboard/upload_success',$data)
		
	
	else
	{
		redirect(site_url('upload'));
	}

			//$data['upload_data'] = $this->upload->data()
			//$data['hanis']=$this->gallery_model->insert_file($this->upload->data('upload_data'));

			
			//$data=$this->Gallery_model->getalldata();
	}

}
?>