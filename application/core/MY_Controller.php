<?php
class MY_Controller extends CI_Controller{
     
     public function __construct(){
       parent::__construct();
        if(!$this->session->userdata('user_id'))
        return redirect('admin/admin_login');
    }
}

 ?>