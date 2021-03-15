<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function index()
	{
		$data = [
			'title' => 'Dashboard',
			'class' => 'class="hold-transition sidebar-mini"',
            'menu'  => 'users'
		];

		$this->load->view('users', $data);
	}

}
