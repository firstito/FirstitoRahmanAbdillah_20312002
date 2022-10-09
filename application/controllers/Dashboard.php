<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
	public function index()
	{
		$data['meta'] = [
			'title' => 'Dashboard',
		];

		$this->load->view('dashboard_vw', $data);
	}

	public function tse()
	{
		$data['meta'] = [
			'title' => 'tse',
		];
		$this->load->view('tse', $data);
	}

	public function pl()
	{
		$data['meta'] = [
			'title' => 'Primier League',
		];
		$this->load->view('pl_vw', $data);
	}
}
