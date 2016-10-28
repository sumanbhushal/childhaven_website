<?php 
class menu_manager extends MY_Controller {
    
    public function get_menu(){
        
        $this->load->model('admin/menu_model');
        $menuList = array(
            'menu' => $this->menu_model->get_menu_titles()
            );
        $this->load->view('admin/menu_manager_view.php',$menuList);
    }
    public function add_menu(){
        $this->load->helper('form');
        $this->load->view('admin/add_menu_view.php');
    }
    public function post_menu(){
        //$this->load->helper('form');
        $this->load->library('form_validation');
        if($this->form_validation->run('add_menu_rules')){
            echo "success";
        }else{
           $this->load->view('admin/add_menu_view.php');
            //return redirect('menu_manager/add_menu');
        }
    }
}
?>