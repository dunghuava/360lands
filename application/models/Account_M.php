<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account_M extends CI_Model {

	protected $table = 'members';
	
	function sign_in ($data){
		$flag = $this->db->where($data)->get($this->table)->num_rows();
		return $flag==1 ? true:false;
	}
	function find($condition){
		return $this->db->where($condition)->get($this->table)->row_array();
	}
	function create($data){
		return $this->db->insert($this->table,$data);
	}
}

/* End of file Account_M.php */
/* Location: ./application/models/Account_M.php */