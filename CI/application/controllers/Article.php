<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Article extends CI_Controller {

	public function newarticle(){
		$this->load->model('Article_model');
		$result = $this->Article_model->new_article();
		echo json_encode($result);
	}
	public function hotarticle(){
		$this->load->model('Article_model');
		$result = $this->Article_model->hot_article();
		echo json_encode($result);
	}
	
	public function detailarticle(){
		$id=$this->uri->segment(3);
		$this->load->model('Article_model');
		$arr=array(
			't_id'=>$id
		);
		$result = $this->Article_model->detail_article($arr);
		echo json_encode($result);
	}
}

	



