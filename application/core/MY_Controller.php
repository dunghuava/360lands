<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

	public function getLayout($page,$data=null,$nav=true){
		if (isset($data['page_name'])){
			$data['page_name']=$data['page_name'];
		}else{
			$data['page_name']='Unnamed';
		}
		$this->view('header');
		if ($nav){
			$this->view('nav');	
		}
		$this->view($page,$data);
		$this->view('footer');	
	}
	public function reponse($data){
		echo json_encode($data);
	}
	public function set_userdata($key,$value=null){
		$this->session->set_userdata( $key,$value );
	}
	public function get_userdata($key){
		if ($this->session->has_userdata($key)){
			return $this->session->get_userdata($key);
		}
		return false;
	}
	public function unset_userdata($key){
		$this->session->unset_userdata($key);
	}
	public function set_flashdata($key,$value){
		$this->session->set_flashdata($key,$value);
	}
	public function get_flashdata($key){
		return $this->session->flashdata($key);
	}
	public function view($view,$data=null){
		return $this->load->view($view, $data);
	}
}

/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */