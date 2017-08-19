<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Action_model extends CI_model{
	public function insert_to_trends($title,$content,$time,$photo){
		$sql = "insert into trends(t_id,t_title,t_sender,t_content,t_addtime,t_address,t_img,catalog_id) values (null,'$title','','$content','$time','','$photo','1')";
        return $this->db->query($sql);
	}
}