<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Action extends CI_Controller {
    public function add_to_trends(){
        header('Access-Control-Allow-Origin:*');//����������Դ����
        header('Access-Control-Allow-Method:POST,GET');//������ʵķ�ʽ
        $title = $this->input->post('title');
        $content = $this->input->post('content');
        $photo = $this->input->post('photo');
        /*var_dump($photo);
        die();*/
        $time = date('y-m-d',time());
        $this->load->model('Action_model');
        $row = $this->Action_model->insert_to_trends($title,$content,$time,$photo);
        if($row){
            echo "sucess";
        }else{
            echo "fail";
        }
    }


}