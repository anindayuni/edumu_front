<?php

class Madmin extends CI_Model
{
	function showadmin(){
		$this->db->order_by('user_id', 'desc');
		$data = $this->db->get('_user');
		return $data->result_array();
	}
}
?>