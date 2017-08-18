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
        public function talentwall(){
            $sql='SELECT t_sender,count(t_sender),u_name,u_id,head_img from trends,users where t_sender=u_id GROUP BY t_sender ORDER BY COUNT(t_sender) DESC limit 3';
            $query=$this->db->query($sql);
            // $this->db->select();
            // $this->db->where('user');
            // $query=$this->db->limited('');
            return $query->result();
        }
		public function talent_info($arr){
			$this->db->select('*');
			$query=$this->db->get_where('users',$arr);
			return $query->result();
		}
		public function all_user(){
			// $this->db->select('*');
			$query=$this->db->get('users');
			return $query->result();
		}
		
	}
?>