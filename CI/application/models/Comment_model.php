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
		public function check_comment($arr){
			// $this->db->select('count(*) as shuliang,c_id,c_time,c_content,c_trend_id,c_user_id');
			$this->db->select('count(*) as shuliang');
			$this->db->order_by('c_id','DESC');
			$this->db->from('comments');
			$this->db->where($arr);
			$this->db->join('trends', 'trends.t_id = comments.c_trend_id');
			$query=$this->db->get();
			return $query->result();
		}
		public function show_comment($arr){
			// $this->db->select('count(*) as shuliang,c_id,c_time,c_content,c_trend_id,c_user_id');
			$this->db->select('*');
			$this->db->order_by('c_id','DESC');
			$this->db->from('comments');
			$this->db->where($arr);
			$this->db->join('trends', 'trends.t_id = comments.c_trend_id');
			$this->db->join('users', 'comments.c_user_id = users.u_id');
			$query=$this->db->get();
			return $query->result();
		}
		public function del_comment($arr){
			$query=$this->db->delete('comments',$arr);
			return $query;
		}
		public function check_status($arr){
			$this->db->set('c_check','1');
			$this->db->where($arr);
			$query=$this->db->update('comments');
			return $query;
		}
	}
?>