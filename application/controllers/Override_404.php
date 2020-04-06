<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Override_404 extends MY_Controller {

	public function index()
	{
		$this->view('header');
		$this->view('nav');
		$this->view('override_404');
	}
}

/* End of file Override_404.php */
/* Location: ./application/controllers/Override_404.php */