<?php

class Admin_router
{
    public $input_type;
    public $action;

    public function __construct()
    {
        $this->input_type = $_SERVER['REQUEST_METHOD'];
        $admin_html = new View();
        if ($this->input_type === 'GET') {
            $this->action = filter_input(INPUT_GET, 'action');
            if ($this->action === 'users'){
                $admin_html->users();
            }elseif($this->action === 'goods'){
                $admin_html->goods();
            }elseif ($this->action === 'orders'){
                $admin_html->orders();
            }else{
                $admin_html->admin_actions();
            }
        } else {
//            $input_value = filter_input(INPUT_POST, 'text');
            echo 'post zapros';
        }
    }
}