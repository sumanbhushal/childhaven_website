<?php

class Admin extends CI_Controller
{
    public function index()
    {
        if($this->session->userdata('user_id'))
            return redirect('dashboard/admin_dashboard');
        $this->load->helper('form');
        $this->load_login_form();
    }

    public function load_login_form()
    {
        $this->load->view('admin/login');
    }

    public function admin_login()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<p class="text-primary">', '</p>');
        if ($this->form_validation->run('admin_login_form_rules')) {
            $user_name = $this->input->post('username');
            $pwd = $this->input->post('password');
            
            $this->load->model('admin/loginmodel');
            $user_id = $this->loginmodel->validate_admin($user_name, $pwd);
            if($user_id)
            {
                $this->session->set_userdata('user_id', $user_id);
                $this->admin_dashboard();
            }else{
                $this->session->set_flashdata('login_invalid', 'Invalid Username or Password');
                $this->load->view('admin/login');
            }
            
        } else {
            $this->load->view('admin/login');
        }

    }

    public function admin_dashboard()
    {
        return redirect('dashboard/admin_dashboard');
    }
    
    public function logout(){
        $this->session->unset_userdata('user_id');
        return redirect ('admin/admin_login');
    }
}

?>