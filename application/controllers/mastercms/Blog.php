<?php
class Blog extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Mblog');
		if (!$this->session->userdata('user'))
		{
			$log = base_url("mastercms");
			$this->session->set_flashdata('msg', '<div class="alert alert-block alert-info fade in"><button type="button" class="close close-sm" data-dismiss="alert"><i class="icon-remove"></i></button><i class="fa fa-warning"></i>&nbsp;&nbsp;Anda harus login terlebih dahulu.</div>');
			echo "<script>location='$log';</script>";
		}
	}
	function show(){
		$data['showarticle'] = json_encode($this->Mblog->showblog());
		$this->render_backend('backend/blog/showblog', $data);
	}
	function addblog(){
		$data['showcategory'] = $this->db->get('_category')->result_array();	
		if ($this->input->post()) {
			$input = $this->input->post();
			$input['create_date'] = date('Y-m-d h:i:s');
			$input['publish_date'] = date('Y-m-d h:i:s');
			$url = strtolower($input['blog_title']);
			$url = str_replace(" ", "-", $url);
			$url = str_replace(",", "", $url);
			$url = str_replace(".", "", $url);
			$url = str_replace("?", "-", $url);
			$url = str_replace("(", "-", $url);
			$url = str_replace(")", "-", $url);
			$url = str_replace("!", "-", $url);
			$url = str_replace("{", "-", $url);
			$url = str_replace("}", "-", $url);
			$url = str_replace("[", "-", $url);
			$url = str_replace("]", "-", $url);
			$url = str_replace("+", "-", $url);
			$url = str_replace("/", "-", $url);
			$url = str_replace("'", "-", $url);
			$url = str_replace('"', "-", $url);
			$url = str_replace("&", "-", $url);
			$url = str_replace("%", "-", $url);
			$url = str_replace("*", "-", $url);
			$url = str_replace("#", "-", $url);
			$url = str_replace("@", "-", $url);
			$url = str_replace("$", "-", $url);
			$url = str_replace("=", "-", $url);
			$url = str_replace("`", "-", $url);
			$url = str_replace("^", "-", $url);
			$url = str_replace(":", "-", $url);
			$url = str_replace(";", "-", $url);
			$url = str_replace(">", "-", $url);
			$url = str_replace("<", "-", $url);
			$url = str_replace("~", "-", $url);
			$url = str_replace("_", "-", $url);
			$url = str_replace("”", "-", $url);
			$url = str_replace("|", "", $url);

			$input['blog_alias'] = $url;
			$status = $this->Mblog->savedata($input);
			if ($status == "berhasil")
			{
				$this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissible fade in" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><i class="fa fa-info-circle"></i>&nbsp; Artikel berhasil ditambahkan.</div>');
				redirect('mastercms/blog/show', 'refresh');
			}
			elseif($status == "gagal")
			{
				$this->session->set_flashdata('msg', '<div class="alert alert-danger alert-dismissible fade in" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><i class="fa fa-info-circle"></i>&nbsp; Artikel gagal ditambahkan.</div></div>');
				redirect('mastercms/blog/show', 'refresh');
			}
		}
		$this->render_backend('backend/blog/addblog',$data);
	}
	function detail($id)
	{
		$data['detail'] = $this->Mblog->get_by_id($id);
		$this->render_backend('backend/blog/detailblog',$data);
	}
	function delblog($id)
	{
		$status = $this->Mblog->delblog($id);
		if ($status == "berhasil")
		{
			$this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissible fade in" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><i class="fa fa-info-circle"></i>&nbsp; Artikel berhasil dihapus.</div>');
			redirect('mastercms/blog/show', 'refresh');
		}
		elseif($status == "gagal")
		{
			$this->session->set_flashdata('msg', '<div class="alert alert-danger alert-dismissible fade in" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><i class="fa fa-info-circle"></i>&nbsp; Artikel gagal dihapus.</div>');
			redirect('mastercms/blog/show', 'refresh');
		}
	}
	function edit($id)
	{
		$data['showcategory'] = $this->db->get('_category')->result_array();	
		$data['showarticle'] = $this->Mblog->showblog();
		$data['content'] = $this->Mblog->get_by_id($id);

		if ($this->input->post()) {
			$input = $this->input->post();
			$input['publish_date'] = date('Y-m-d h:i:s');
			$status = $this->Mblog->updateblog($id, $input);
			if ($status == "berhasil") {
				$this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissible fade in" role="alert"><button class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><i class="fa fa-info-circle"></i>&nbsp; Artikel berhasil diperbaharui.</div>');
				redirect('mastercms/blog/show', 'refresh');
			}
			elseif($status == "gagal") {
				$this->session->set_flashdata('msg', '<div class="alert alert-danger alert-dismissible fade in" role="alert"><button class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><i class="fa fa-info-circle"></i>&nbsp; Artikel gagal diperbaharui.</div>');
				redirect('mastercms/blog/show', 'refresh');
			}
		}
		$this->render_backend('backend/blog/editblog',$data);
	}
	function category()
	{
		$data['category'] = json_encode($this->db->get('_category')->result());
		if ($this->input->post('category_id')) {
			$input = $this->input->post();
			$id = $input['category_id'];
			$status = $this->Mblog->editCategory($id, $input);

			if ($status == "berhasil") {
				$this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissible fade in" role="alert"><button class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><i class="fa fa-info-circle"></i>&nbsp; Kategori berhasil diperbaharui.</div>');
				// redirect('mastercms/blog/category', 'refresh');
			}
			else{
				$this->session->set_flashdata('msg', '<div class="alert alert-danger alert-dismissible fade in" role="alert"><button class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><i class="fa fa-info-circle"></i>&nbsp; Kategori gagal diperbaharui.</div>');
				// redirect('mastercms/blog/category', 'refresh');
			}
		}

		$this->render_backend('backend/blog/category',$data);
	}
	function editCat()
	{
		// if ($this->input->post()) {
			// echo "<pre>";
			// print_r($this->input->post());
			// echo "</pre>";
			$input = $this->input->post();
			$id = $input['category_id'];
			$status = $this->Mblog->editCategory($id, $input);
			if ($status == "berhasil") {
				$this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissible fade in" role="alert"><button class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><i class="fa fa-info-circle"></i>&nbsp; Kategori berhasil diperbaharui.</div>');
				redirect('mastercms/blog/category', 'refresh');
			}
			else{
				$this->session->set_flashdata('msg', '<div class="alert alert-danger alert-dismissible fade in" role="alert"><button class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><i class="fa fa-info-circle"></i>&nbsp; Kategori gagal diperbaharui.</div>');
				redirect('mastercms/blog/category', 'refresh');
			}
		// }
	}
}
?>
			<!-- echo "<pre>";
			print_r($id);
			echo "</pre>"; -->