<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	 class Mypage_model extends CI_model {
	 	
		public function mybody($arr) {
			$this->db->select('*');
			$result = $this->db->get_where('users',$arr);
			return $result->result();
		}
	 }
?>