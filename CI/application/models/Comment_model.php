<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Comment_model extends CI_model{

		public function addcomment($arr){
			$query=$this->db->insert('comments', $arr);
			return $query;
		}
		public function all_comment($arr){
			$this->db->select('*');
			$this->db->order_by('c_id','DESC');
			$this->db->from('comments');
			$this->db->where($arr);
			$this->db->join('users', 'comments.c_user_id = users.u_id');
			$query=$this->db->get();
			return $query->result();
		}
	}
?>