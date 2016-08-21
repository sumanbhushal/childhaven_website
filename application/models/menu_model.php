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
        $query = $this->db->query('SELECT * FROM menu');
        
        if($query ->num_rows()>0){
            return $query->result();
        }else{
            return null;
        }
    }
}

?>