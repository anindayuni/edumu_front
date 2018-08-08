<?php 
class Mhome extends CI_Model
{
	
	function latest_post(){
		$this->db->limit(3);
		$this->db->order_by('publish_date', 'DESC');
		$ambil = $this->db->get('_blog');
		return $ambil->result_array();
	}
}

?>