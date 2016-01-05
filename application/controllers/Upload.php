<?php

class Upload extends CI_Controller {

		function __construct()
		{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->model('Upload_model');
		}

		function index()
		{
			$this->load->view('dashboard/upload_form', array('error' => ' ' ));
		}

		function do_upload()
		{
			if($this->input->post('form1'))
			{
				$config['upload_path'] = './upload/';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size']    = '2000';
				$config['max_width']  = '2000';
				$config['max_height']  = '2000';
				$this->load->library('upload', $config);
				$error = '';
				$data = '';
				if ( ! $this->upload->do_upload('userfile'))
				{
					$error = array('error' => $this->upload->display_errors());
					echo "<pre>"; print_r($error); echo "</pre>"; die();
				}
				else
				{
					$data=$this->upload->data();
					//print_r($data); die();
					//$this->thumb($data);
					$file=array(
						'img_name'=>$data['raw_name'],
						'thumb_name'=>$data['raw_name'].'_thumb',
						'ext'=>$data['file_ext'],
						'upload_date'=>time(),
						'file_name'=>$data['file_name']
					);
					$this->session->set_userdata('file_name', $data['file_name']);
					$this->load->model('upload_model');
					$username = $this->session->userdata('username');
					$this->upload_model->add_image($username, $file);
					$data = array('upload_data' => $data);
					//$this->load->view('upload_success', $data);
				}
				redirect(site_url('main/page/profile'));
			}
			else
			{
				echo "<script>alert('ERROR!');history.back(-1);</script>";
			}
		}

		function thumb($data)
		{
			$config['image_library'] = 'gd2';
			$config['source_image'] =$data['full_path'];
			$config['create_thumb'] = TRUE;
			$config['maintain_ratio'] = TRUE;
			$config['width'] = 275;
			$config['height'] = 250;
			$this->load->library('image_lib', $config);
			$this->image_lib->resize();
		}
	}
?>

