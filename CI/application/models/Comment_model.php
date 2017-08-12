<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Comment_model extends CI_model{

		public function addcomment($arr){
			$query=$this->db->insert('comments', $arr);
			return $query;
		}
		public function all_comment($arr){
			$this->db->select('*');
			$this->db->order_by('c_id','DESC');
			$query=$this->db->get_where('comments', $arr);
			return $query->result();
		}
	}
?>