<?php 
class Home extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('user'))
		{
			$log = base_url("mastercms");
			$this->session->set_flashdata('msg', '<div class="alert alert-block alert-info fade in"><button type="button" class="close close-sm" data-dismiss="alert"><i class="icon-remove"></i></button><i class="fa fa-warning"></i>&nbsp;&nbsp;Anda harus login terlebih dahulu.</div>');
			echo "<script>location='$log';</script>";
		}
	}
		// echo "<pre>";
		// print_r($data['artikel']);
		// echo "</pre>";
	function index(){
		$data['artikel'] = $this->db->query("SELECT count(blog_id) as jumlah FROM _blog WHERE blog_status = 'publish' ")->row_array();
		$data['category'] = $this->db->query("SELECT count(category_id) as jumlah FROM _category WHERE category_status = '1' ")->row_array();
		$this->render_backend('backend/home',$data);
	}
}
?>