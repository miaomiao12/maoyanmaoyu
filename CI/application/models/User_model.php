<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class User_model extends CI_model{

		public function alluser(){
			$query=$this->db->get('user');
			return $query->result();
		}
		public function add_user($username,$password,$reg_time){
            $arr = array(	'u_id' 		=> null,
                            'u_name' 	=> $username,
                            'u_psd'		=> $password,
                            'reg_time'	=> $reg_time
                            );
            $sql = $this->db->insert_string('users', $arr);
            $query=$this->db->query($sql);
            // return $query->num_rows();
            return $query;

        }
        public function has_name($username){
            $arr = array(
                            'u_name' 	=> $username
                            );
            $query = $this->db->get_where('users', $arr);
            return $query->num_rows();
        }
        public function login_ing($username,$password){

            $arr = array(
                            'u_name' 	=> $username,
                            'u_psd' => $password
                            );
            $query = $this->db->get_where('users', $arr);
            return $query->row();
        }
	}
?>