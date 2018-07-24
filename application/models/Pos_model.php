<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pos_model extends CI_Model {

	public function __construct(){
		$this->load->database();
	}

	public function list_barang(){
		$like = $this->input->post_get('like');
		if(isset($like)){
			$this->db->like('nama',$like);
			$this->db->or_like('kode',$like);
			$this->db->or_like('ukuran',$like);
			$this->db->or_like('status',$like);
		}

		$this->db->order_by('id','DESC');
		$this->db->limit(5);
		return $this->db->get('barang')->result_array();
	}


}