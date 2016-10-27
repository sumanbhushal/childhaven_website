<?php

/**
 * @author Suman
 * @copyright 2016
 */

class Menu_Controller extends CI_Controller
{
    public function index()
    {
        //echo "hello";
        $this->menu();
    }

    public function menu()
    {
        $this->load->model('menu_model');
        $data['menu_title'] = $this->menu_model->get_menu_titles();

        $this->load->view('menu_view', $data);
    }
}

?>