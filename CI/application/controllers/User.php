<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User extends CI_Controller {


	public function userall(){
		$this->load->model('User_model');
		$result = $this->User_model->alluser();
		
		echo json_encode($result);
	}
	public function test(){
		$this->load->view('test');
	}
}

	



