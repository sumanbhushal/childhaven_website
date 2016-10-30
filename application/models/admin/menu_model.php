<?php

/**
 * @author Suman bhushal
 * @copyright 2016
 */

class Menu_model extends CI_Model{
    public $menu_title;
    
    public function _construct(){
        parent::_construct();
    }
    
    public function get_menu_titles(){
        $this->load->database();
        //$query = $this->db->query('SELECT * FROM menu');
        
        //$this->db->where('id',1);
        $query = $this->db->get('menu');
        if($query ->num_rows()>0){
            return $query->result();
        }else{
            return null;
        }
    }
    
    public function get_parent_menu_title(){
        $this->load->database();
        $this->db->select('*');
        $this->db->order_by('position', 'ASC');
        $query_result = $this->db->get('menu');
        
        if($query_result -> num_rows()>0){
            return $query_result->result();
        }else{
            return null;
        }  
    }
    
    public function post_new_menu_in_db($data){
        $this->load->database();
        $this->db->insert('menu', $data);
        
    }
    
    
}

?>