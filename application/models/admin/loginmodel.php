<?php

class Loginmodel extends CI_Model {
    
    public function validate_admin($username, $password){
        $password = md5($password);
        $query = $this->db->where(['user_name'=>$username, 'password'=>$password])
                            ->get('tb_admin');

        if($query->num_rows()){
            /**
              echo "<pre>";
              print_r($query->result());
            */
           return $query->row()->id;
            //return true;
        }else{
            return false;
        }
        
    }
}
 ?>