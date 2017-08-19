<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class mypage extends CI_Controller {
		public function mybody(){
			$uid= $this->uri->segment(3);
			$arr=array(
				'u_id'=>$uid
			);
			$this->load->model("Mypage_model");
			$result = $this->Mypage_model->mybody($arr);
			echo JSON_encode($result);
		}
	}



?>