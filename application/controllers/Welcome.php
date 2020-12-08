<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends My_Controller {

	public function index()
	{
		$this->parseData['title_budge'] = 'Dashboard';
		$this->parseData['title_tab'] = 'Dashboard';
		$this->parseData['content'] = 'content/dashboard';
		$this->load->view('index', $this->parseData);
	}
}
