<?php
$config = [

    'admin_login_form_rules' => [
        [
            'field' => 'username',
            'label'=> 'Username',
            'rules' => 'required|trim'
        ], 
        [
            'field' => 'password',
            'label'=> 'Password',
            'rules' => 'required'
        ]
    ], 
    'add_menu_rules' => [
        [
            'field' => 'menu_title',
            'label' => 'Menu Title',
            'rules' => 'required'
        ]
    ]

];
 ?>