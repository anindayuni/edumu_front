<?php 
class Mblog extends CI_Model
{
	function showblog()
	{
		$this->db->order_by('blog_id', 'desc');
		$this->db->join('_category c', 'c.category_id = b.category_id');
		$data = $this->db->get('_blog b');
		return $data->result_array();
	}
	function savedata($input)
	{
		$config['upload_path']		= './assets/img/article/';
		$config['allowed_types']	= 'gif|jpg|png|jpeg';

		$this->load->library("upload", $config);
		$gambar = $this->upload->do_upload("blog_image");

		if ($gambar) {
			$input['blog_image'] = $this->upload->data('file_name');
			$status = "berhasil";
		}else
		{
			$status = "gagal";
		}

		$this->db->insert('_blog', $input);
		return $status;
	}
	function get_by_id($id)
	{
		$this->db->where('blog_id', $id);
		$this->db->join('_category c','c.category_id = b.category_id');
		$data = $this->db->get('_blog b');
		return $data->row_array();
	}
	function delblog($id)
	{
		$data = $this->get_by_id($id);
		$hapusgambar = $data['blog_image'];

		if (!empty($hapusgambar)) {
			unlink("./assets/img/article/".$hapusgambar);
		}

		$this->db->where('blog_id', $id);
		$this->db->delete('_blog');
		
		return $status = "berhasil";
	}
	function updateblog($id, $input)
	{
		$config['upload_path']		= './assets/img/article/';
		$config['allowed_types']	= 'gif|jpg|png|jpeg';

		$this->load->library("upload", $config);
		$ubahgambar = $this->upload->do_upload("blog_image");

        // jika gambar diubah
		if ($ubahgambar) {
			$ubah = $this->get_by_id($id);
			$hapusgambar = $ubah['blog_image'];

			if (!empty($hapusgambar)) {
				unlink("./assets/img/article/".$hapusgambar);
			}
        	// ambil nama gambar dari formulir
			$input['blog_image'] = $this->upload->data("file_name");
			$this->db->where("blog_id", $id);
			$this->db->update('_blog', $input);
			return $status = "berhasil";
		}
		else
		{
        	// gambar tidak dirubah langsung jalankan query
			$this->db->where("blog_id", $id);
			$this->db->update('_blog', $input);
			return $status = "berhasil";
		}
	}
	function editCategory($id, $input){
		$this->db->where("category_id", $id);
		$this->db->update('_category', $input);
		return $status = "berhasil";
	}
	// frontend
	function front_showblog()
	{
		$this->db->order_by('b.blog_id', 'desc');
		$this->db->where('b.blog_status','publish');
		$this->db->join('_category c', 'c.category_id = b.category_id');
		$data = $this->db->get('_blog b');
		return $data->result_array();
	}
	function front_showblog_pagination($limit, $page=0)
	{
		$this->db->limit($limit, $page);
		$this->db->order_by('b.blog_id', 'desc');
		$this->db->where('b.blog_status','publish');
		$this->db->join('_category c', 'c.category_id = b.category_id');
		$data = $this->db->get('_blog b');
		return $data->result_array();
	}
	function get_by_url($id)
	{
		$this->db->where('b.blog_status','publish');
		$this->db->where('b.blog_id', $id);
		$this->db->join('_category c', 'c.category_id = b.category_id');
		$data = $this->db->get('_blog b');
		return $data->row_array();
	}
	function get_latest_post()
	{
		$this->db->limit(5);
		$this->db->order_by('b.blog_id', 'desc');
		$this->db->where('b.blog_status','publish');
		$this->db->join('_category c', 'c.category_id = b.category_id');
		$data = $this->db->get('_blog b');
		return $data->result_array();
	}
}

?>