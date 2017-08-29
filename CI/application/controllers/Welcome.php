<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {
    public function __construct()
    {
        parent::__construct();  //预加载
        $this->load->model('admin_model');
    }
    public function login(){
        $this->load->view('login');
    }
    public function home(){
        $this->load->view('home');
    }
    public function addtrends(){
        $allcatalog = $this->get_all_catalog();
        $arr['data'] = $allcatalog;
        $this->load->view('addtrends',$arr);
    }
    public function login_check(){
        $this->load->model('admin_model');
        $name  = $this->input->post('username');
        $password =  $this->input->post('password');
        $result = $this->admin_model->admin_login($name,$password);
        if(count($result) == 0){
            redirect('welcome/login');
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
    public function get_all_catalog(){
        $this->load->model('admin_model');
        $all=$this->admin_model->get_catalog();
        return $all;
    }
    public function trends(){
        $alltrends = $this->get_all_trends();
        $arr['data']=$alltrends;
//        $arr['catalog']=$allcatalog;
        $this->load->view('trends.php',$arr);
    }
    public function remove_session(){
        $this->session->unset_userdata('nowadmin');
            redirect('welcome/login');
    }
    public function delect_trends(){
        $this->load->view('test.php');

        $t_id = $this->input->get('tid');
        $this->load->model('admin_model');
        $result = $this->admin_model->delete_trends($t_id);
        if($result == true){
            $this->trends();
        }

    }
    public function add_trends(){
//        $this->load->view('test.php');

        $title = $this->input->post('t_title');
        $content = $this->input->post('t_content');
        $catalog = $this->input->post('catalog');

        $this->load->helper('date');
        $datestring = '%Y-%m-%d - %h:%i';
        $time = time();
        $add_time=mdate($datestring, $time);

        $arr = array(
            't_id' => NULL ,
            't_title' => $title ,
            't_content' => $content,
            't_addtime' => $add_time,
            'catalog_id' => $catalog
        );

        $this->load->model('admin_model');
        $result = $this->admin_model->add_trends($arr);
        if($result == true){
            $this->trends();
        } 

    }
    public function usermanage(){
        $this->load->view('usermanage');

    }
}

?>