<?php

class Admin extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Madmin');
	}
	function index()
	{
		$data['admin'] = $this->Madmin->showadmin();
		$this->render_backend('backend/admin/showadmin',$data);
	}
}
?>