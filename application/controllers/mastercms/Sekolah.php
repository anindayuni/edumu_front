<?php

class Sekolah extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Msekolah');
	}
	function index(){
		if($this->input->post())
		{
			echo "<pre>";
			print_r($this->input->post());
			echo "</pre>";
		}
		$this->render_backend('backend/sekolah/showsekolah');
	}
	function addsekolah()
	{
		$data = array(
			'sekolah_nama'=> $this->input->get('sekolah_nama'),
			'sekolah_email'=> $this->input->get('sekolah_email'),
			'sekolah_telp'=> $this->input->get('sekolah_telp'),
			'sekolah_alamat'=> $this->input->get('sekolah_alamat'),
			'sekolah_image'=> $this->input->get('sekolah_image'),
		);
		 // $this->db->insert('_sekolah',$data);
		 $this->Msekolah->savedata($data);
		// $this->render_backend('backend/sekolah/addsekolah');
	}
}
?>