<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admin_model extends CI_Model{
    public function admin_login($name,$password){
        $arrayName = array(
                    'admin_name' => $name, 
                    'admin_password' => $password
                            );
        $query = $this->db->get_where('admin', $arrayName);
        return $query->row();
    }
    public function get_num_by_admin(){
        $sql = "select * from admin";
        return $this->db->query($sql)->result();
    }
    public function insert_to_admin($name,$password){
        $sql = "insert into admin(admin_id,admin_name,admin_password,admin_photo) VALUES (null,'$name','$password','')";
        return $this->db->query($sql);
    }
    public function get_all(){
        $query = $this->db->get('trends');
        return $query->result();
    }

    public function delete_trends($t_id){
        $query = $this->db->delete('trends', array('t_id' => $t_id)); 
        return $query;
    }
    public function add_trends($arr){
            $sql = $this->db->insert_string('trends', $arr);
            $query=$this->db->query($sql);
            return $query;
    }
    public function get_catalog(){
        $query = $this->db->get('t_catalog');
        return $query->result();
    }
}