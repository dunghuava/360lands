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
		$data['page_name']='Đăng nhập';
		$this->getLayout('account/sign_in',$data);
	}
	public function do_sign_in(){
		$post = $this->input->post();
		if (isset($post['member_signin'])){
			$data=array(
				'member_username'=>replace_value($post['data']['member_username'],''),
				'member_password'=>sha1(replace_value($post['data']['member_password'],''))
			);
			$condition = array(
				'member_username'=>$data['member_username']
			);
			if ($this->Account_M->sign_in($data)){
				$member = $this->Account_M->find($condition);
				$this->set_userdata('member_signin',$member);
				$res['login_status']='success';
				$this->reponse($res);
			}else{
				$res['login_status']='failed';
				$res['body']=alert('warning','Tài khoản hoặc mật khẩu không chính xác');
				$this->reponse($res);
			}
		}
	}
	public function sign_up()
	{
		$this->check_login();
		$data['page_name']='Tạo tài khoản';
		$this->getLayout('account/sign_up',$data);
	}
	public function do_sign_up(){
		$post = $this->input->post();
		if (isset($post['member_signup'])){
			$member_data=array(
				'member_firstname'	=>replace_value($post['data']['member_firstname'],''),
				'member_lastname'	=>replace_value($post['data']['member_lastname'],''),
				'member_username'	=>replace_value($post['data']['member_username'],''),
				'member_email'		=>replace_value($post['data']['member_email'],''),
				'member_password'	=>sha1(replace_value($post['data']['member_password'],'')),
				'created_at'		=>dateinsert(),
				'updated_at'		=>dateinsert(),
			);
			$condition = array(
				'member_username'=>$member_data['member_username']
			);
			$checked = $this->Account_M->find($condition);
			if (!$checked){
				$this->Account_M->create($member_data);
				$res['register_status']='success';
				$res['body']=alert('success','Đăng ký tài khoản thành công');
				$this->reponse($res);
			}else{
				$res['register_status']='failed';
				$res['body']=alert('warning','Tên đăng nhập đã tồn tại');
				$this->reponse($res);
			}
		}
	}
}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */