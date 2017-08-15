<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Article_model extends CI_model{

		public function new_article(){
			$this->db->select('*');
			$query=$this->db->get('trends');
			return $query->result();
		}
		
		public function hot_article(){
			$this->db->select('*');
			$this->db->order_by('t_dj','DESC');
			$query=$this->db->get('trends');
			return $query->result();
		}
		
		public function detail_article($arr){
			$this->db->select('*');
			$query=$this->db->get_where('trends',$arr);
			return $query->result();
		}
		public function add_catalog($cname){
			 $arr = array(
			 				'catalog_id' 	=> null,
                            'catalog_name' 	=> $cname
                            );
            $sql = $this->db->insert_string('t_catalog', $arr);
            $query=$this->db->query($sql);
            return $query;
		}
	}
?>