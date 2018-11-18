<?php

class Admin_router
{
    public $input_type;
    public $action;
    public $category;

    public function __construct()
    {
        $this->input_type = $_SERVER['REQUEST_METHOD'];
        $admin_html = new View();
        if ($this->input_type === 'GET') {
            $this->action = filter_input(INPUT_GET, 'action');
            if ($this->action === 'users'){
                $admin_html->users();
            }elseif($this->action === 'categories'){
                $this->category = filter_input(INPUT_GET, 'category');

                if(is_null($this->category)){
                    $admin_html->categories();
                }else{
                    $admin_html->category($this->category);
                }
            }elseif ($this->action === 'orders'){
                $admin_html->orders();
            }else{
                $admin_html->admin_actions();
            }
        } else {
//            $input_value = filter_input(INPUT_POST, 'text');
            // AddImage::addImg();
            echo 'post zapros';
        }
    }
}