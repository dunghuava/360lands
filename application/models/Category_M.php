<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category_M extends CI_Model {
	private $table = 'category';

	function all(){
		$data = $this->db->get($this->table)->result_array();
		return $data;
	}
	function createSlug(){
		$all = $this->all();
		foreach ($all as $item){
			$string = $item['category_name'];
			$slug   = createSlug($string);
			$this->db->where('category_id',$item['category_id'])->update($this->table,['category_slug'=>$slug]);
		}
	}
}

/* End of file Category_M.php */
/* Location: ./application/models/Category_M.php */