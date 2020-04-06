<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Account extends MY_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Account_M');
	}
	function check_login(){
		if ($this->get_userdata('member_signin')){
			redirect(base_url().'discovery','location');
		}
	}
	function sign_out(){
		$this->unset_userdata('member_signin');
		redirect(base_url(),'location');
	}
	public function sign_in()
	{
		$this->check_login();

		$post = $this->input->post();
		if (isset($post['member_signin'])){
			$data=array(
				'member_username'=>$post['member_username'],
				'member_password'=>$post['member_password']
			);
			$condition = array(
				'member_username'=>$data['member_username']
			);
			if ($this->Account_M->sign_in($data)){
				$member = $this->Account_M->find($condition);
				$this->set_userdata('member_signin',$member);
				redirect(base_url().'discovery','location');
			}else{
				$data['error_log']='Tên tài khoản hoặc mật khẩu ko chính xác';
			}
		}

		$data['page_name']='Đăng nhập';
		$this->getLayout('account/sign_in',$data);
	}
	public function sign_up()
	{
		$this->check_login();
		$data['page_name']='Tạo tài khoản';
		$this->getLayout('account/sign_up',$data);
	}
}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */