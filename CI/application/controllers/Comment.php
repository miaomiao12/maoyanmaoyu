<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Comment extends CI_Controller {

	public function add_comment(){
		// header('Content-type: text/html;charset=GBK');
		$id=$this->uri->segment(3);
		$uid=$this->uri->segment(4);
		$content=$this->uri->segment(5);
		// $id=$this->input->get('t_id');
		// $uid=$this->input->get('c_user_id');
		// $content=$this->input->get('c_content');
		$content=iconv('GBK','UTF-8', $content);
			// echo($content);
		$this->load->model('Comment_model');
		$arr=array(
			'c_trend_id'=>$id,
			'c_id'=>'NULL',
			'c_content'=>$content,
			'c_time'=>time(),
			'c_user_id'=>$uid
		);
		$result = $this->Comment_model->addcomment($arr);
		if($result){
			echo '1';
		}else{
			echo '0';
		}
	}
	public function allcomment(){
		$tid=$this->uri->segment(3);
		$arr=array(
			'comments.c_trend_id'=>$tid
		);
		$this->load->model('Comment_model');
		$result = $this->Comment_model->all_comment($arr);
		echo json_encode($result);
	}
}

	



