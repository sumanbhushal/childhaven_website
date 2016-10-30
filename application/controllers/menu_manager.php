<?php 
class menu_manager extends MY_Controller {
    
     
    public function get_menu(){
        $this->load->model('admin/menu_model');
        $menuList = array(
            'menu' => $this->menu_model->get_menu_titles()
            );
        $this->load->view('admin/menu_manager_view.php',$menuList);
    }
    
    public function add_new_menu(){
        $this->load->helper('form');
        $this->load->model('admin/menu_model');
        $parentMenuList = array(
        'parent_menu' => $this->menu_model->get_parent_menu_title()
        );
        $this->load->view('admin/add_menu_view.php', $parentMenuList);
    }
    
    public function post_menu(){
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('admin/menu_model');
        $this->form_validation->set_error_delimiters('<p class="text-primary">', '</p>');
        if($this -> input->post('Submit')){
            $menuTitle = $this->input->post('menu_title');
            $get_menu_from_db = $this->menu_model->get_parent_menu_title();
            
            $menuTitleFromDB = [];
            foreach($get_menu_from_db as $key => $val){
                $menuTitleFromDB [] = $val->menu;
            }
            
            if(in_array(strtolower($menuTitle), array_map('strtolower', $menuTitleFromDB))){
                
                $this->session->set_flashdata('same_menu_name', 'Menu title already Exist');
                $parentMenuList = array(
                    'parent_menu' => $this->menu_model->get_parent_menu_title()
                    );
                    $this->load->view('admin/add_menu_view.php', $parentMenuList);
            }else {
                if($this->form_validation->run('add_menu_rules')){
                    //echo "success";
                    $menuTitle = $this->input->post('menu_title');
                    $parentMenu = $this->input->post('parent_menu');
                    $menuPosition = $this->input->post('menu_position');
                    $menuForNavBar = $this->input->post('set_nav_bar');
                    $this->store_menu_in_db($menuTitle, $parentMenu, $menuPosition, $menuForNavBar);
                }else{
                    $parentMenuList = array(
                    'parent_menu' => $this->menu_model->get_parent_menu_title()
                    );
                    $this->load->view('admin/add_menu_view.php', $parentMenuList);
                   //return redirect('menu_manager/add_menu');
                }
            }
        }
    }
    
    public function store_menu_in_db($menu_title, $parent_menu, $menu_position, $set_nav_bar){
        if($parent_menu == 'Select from')
        $parent_menu = "NULL";
        
        if($menu_position == 'Select from')
        $menu_position = 0;
        
        if($set_nav_bar != 1){
            $set_nav_bar = 0;
        }
        
        $data = array(
          'menu' => $menu_title, 
           'parent_menu' =>$parent_menu, 
            'position'=>$menu_position, 
             'nav_menu'=>$set_nav_bar
        );
        //echo $parent_menu;
        $this->load->model('admin/menu_model');
        $this->menu_model->post_new_menu_in_db($data);
              redirect('menu_manager/get_menu');
    }
   
}
?>