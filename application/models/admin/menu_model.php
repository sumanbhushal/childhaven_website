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
}

?>