<?php
class Dashboard extends MY_Controller{
    
   
    public function admin_dashboard(){
        $this->load->view('admin/dashboard');
    }
    
    public function menu_manager(){
        return redirect('menu_manager/get_menu');
        
    }
}
 ?>