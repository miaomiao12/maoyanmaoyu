<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {
    public function __construct()
    {
        parent::__construct();  //预加载
        $this->load->model('admin_model');
    }
	public function home()
    {
        $this->load->view('home');
    }
    public function addAdmin(){
        $this->load->view('add_admin');
    }
	public function login(){
        $this->load->view('login');
    }
    public function login_check(){
	    $name  = $this->input->post('username');
	    $password =  $this->input->post('password');
        $this->load->model('admin_model');
        $result = $this->admin_model->get_by_admin($name,$password);
        if(count($result) == 0){
            echo "<script> alert('用户名或密码错误'); </script>";
            $this->load->view('login');
        }else{
            $this->session->set_userdata('nowadmin',$result);
            redirect('welcome/home');
        }
    }
    public function get_all_trends(){
        $this->load->model('admin_model');
        $all=$this->admin_model->get_all();
        return $all;
    }
    public function trends(){
        $alltrends=$this->get_all_trends();
        $arr['data']=$alltrends;
        // $arr['data']=123;
        $this->load->view('wenzhangguanli.php',$arr);
    }





    public function add_admin(){
        $name  = $this->input->post('username');
        $password =  $this->input->post('password');
        $sub = true;
        if($admin_name = ''){
            $sub = false;
        }
        if($admin_password = ''){
            $sub = false;
        }
        if($sub){
            $row = $this->admin_model->insert_to_admin($name,$password);
            if($row){
                redirect('welcome/home');
            }else{
                echo "<script>alert('添加失败');</script>";
            }
        }
    }



}
