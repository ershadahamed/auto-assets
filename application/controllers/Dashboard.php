<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$data = [
			'title' => 'Dashboard',
			'class' => 'class="hold-transition sidebar-mini layout-fixed"',
		];

		$this->load->view('dashboard', $data);
	}

}
