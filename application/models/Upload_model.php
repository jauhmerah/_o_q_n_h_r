<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Upload_model extends CI_Model {
	public function __construct()
	{
		parent::__construct();
	}
	function add_image($us_name, $data)
	{
		//*
		$this->db->select('us_name, us_id');
		$this->db->from('sa_user');
		$this->db->where('us_name', $us_name);
		$g = $this->db->get();
		$r = $g->result();
		$us_id = (isset($r[0]->us_id)) ? ($r[0]->us_id) : (-1);

		$this->db->select('us_id');
		$this->db->from('sa_profile');
		$this->db->where('us_id', $us_id);
		$g2 = $this->db->get();
		$r2 = $g2->result();
		$us_id = (isset($r2[0]->us_id)) ? ($r2[0]->us_id) : (-1);
		if ($us_id == -1) {
			$profile = array(
				'us_name' => $r[0]->us_name,
				'us_id' => $r[0]->us_id,
				'pr_image' => $data['file_name']
			);
			$this->db->insert('sa_profile', $profile);
		}

		$this->db->where('us_id', $us_id);
		$da = array(
			'pr_image' => $data['file_name']
		);
		$this->db->update('sa_profile', $da);
		//*/
	}
}