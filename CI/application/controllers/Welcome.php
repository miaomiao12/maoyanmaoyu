<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://exampl
	 e.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function login()
	{
		$this->load->view('login');
	}
	public function save(){
		// 1接受数据
		$username = $this -> input -> post('username');
		$password = $this -> input -> post('password');
		// 2验证数据
		$error = FALSE;
		$data = array();
		if($username != 'admin'){
			$error = TRUE;
			$data['error_name']= '用户名不对';
		}
		if($password != '123456'){
			$error = TRUE;
			$data['error_psd']= '密码不对';
		}
		if($error){
			// redirect('welcome/login');
			$this -> load -> view('login',$data);
		}
		// 3连接数据库
		// 4加载view
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */