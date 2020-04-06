<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends MY_Controller {

	public function index()
	{		
		$data['page_name']='Danh mục tin';
		$data['arr_category'] = $this->Category_M->all();
		$this->getLayout('pages/category',$data);
	}
}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */