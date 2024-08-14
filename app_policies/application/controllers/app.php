<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class app extends Policies_Controller
{
	function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$this->view_content();
	}
	private function view_content()
	{
		if ($this->session->userdata('aksesid_policies') == '5') {
			redirect('policies', 'location');
		} else {
			redirect('history', 'location');
		}
	}
}
