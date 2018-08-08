<?php
class Blog extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Mblog');
	}
	function page(){
		$article = $this->Mblog->front_showblog();
		$config['base_url'] = base_url('blog/page');
		$config['total_rows'] = count($article);
		$config['per_page'] = 12;
		$config['display_pages'] = TRUE;
		$config['full_tag_open'] = '<li>';
		$config['full_tag_close'] = '</li>';
		$config['first_link'] = " First ";
		$config['first_tag_open'] = "<li>";
		$config['first_tag_close'] = "</li>";
		$config['prev_link'] = " Prev ";
		$config['prev_tag_open'] = "<li>";
		$config['prev_tag_close'] = "</li>";
		$config['next_link'] = " Next ";
		$config['next_tag_open'] = "<li>";
		$config['next_tag_close'] = "</li>";
		$config['last_link'] = "Last ";
		$config['last_tag_open'] = "<li>";
		$config['last_tag_close'] = "</li>";
		$config['cur_tag_open'] = '<li class="active"><a>';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$this->pagination->initialize($config);
		$from = $this->uri->segment(3);
		$data['blog'] = json_encode($this->Mblog->front_showblog_pagination($config['per_page'], $from));
		$data['mpaging'] = $this->pagination->create_links();

		$this->render_page('frontend/blog/showblog',$data);
	}
	function detail($url, $id)
	{
		$data['detail'] = $this->Mblog->get_by_url($id);
		$data['latest'] = $this->Mblog->get_latest_post();
		$this->render_page('frontend/blog/detailblog',$data);
	}
}
?>