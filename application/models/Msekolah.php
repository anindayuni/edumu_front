<?php
class Msekolah extends CI_Model
{
	function savedata($data)
	{
		$image = $data['sekolah_image'];
		$config['upload_path']		= './assets/img/sekolah/';
		$config['allowed_types']	= 'gif|jpg|png|jpeg';

		$this->load->library("upload", $config);
		$gambar = $this->upload->do_upload($image);

		if ($gambar) {
			$data['sekolah_image'] = $this->upload->data('file_name');
			$status = "berhasil";
		}else
		{
			$status = "gagal";
		}

		$this->db->insert('_sekolah', $data);
		return $status;
	}
}
?>