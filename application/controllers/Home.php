<?php 
class Home extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Mhome');
	}
	function index(){
		$data['blog_content'] = $this->Mhome->latest_post();
		$this->render_page('frontend/home', $data);
	}
	function fitur()
	{
		$this->render_page('frontend/pages/fitur');
	}
	function tentang_kami()
	{
		$this->render_page('frontend/pages/tentang-kami');
	}
}


?>