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
	public function reg(){
        $one = 1;
        $username=$this->input->get("username");
        $password=$this->input->get("password");
        $this->load->helper('date');
        $this->load->model('User_model');
        $datestring = '%Y-%m-%d - %h:%i';
        $time = time();
        $reg_time=mdate($datestring, $time);
        $result=$this->User_model->add_user($username,$password,$reg_time);
        if($result == true){
            echo $one;
        }
    }
    public function hasname(){//验证是否存在
        $username=$this->input->get("username");
        $this->load->model('User_model');
        $result=$this->User_model->has_name($username);
        echo $result;
    }
    public function CIlogining(){
        $username=$this->input->get("username");
        $password=$this->input->get("password");
        $this->load->model('User_model');
        $result=$this->User_model->login_ing($username,$password);
        if($result){
            echo json_encode($result);
        }else if(count($result) == 0){
            $value = 10086;
            echo $value;
        }
    }
    public function talentwall(){
        $this->load->model('User_model');
        $result = $this->User_model->talentwall();
        echo json_encode($result);
    }
}
?>

	



