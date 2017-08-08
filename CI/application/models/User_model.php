<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class User_model extends CI_model{

		public function alluser(){
			$query=$this->db->get('user');
			return $query->result();
		}

	}
?>