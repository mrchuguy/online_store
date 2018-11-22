<?php
class Router
{
    public $input_type;
    public $action;
    public $category;

    public function __construct(){
       $this->input_type = $_SERVER['REQUEST_METHOD'];
       $html = new View();
       if ($this->input_type === 'GET') {
           $this->action = filter_input(INPUT_GET, 'action');
           if ($this->action === 'goods'){
               $this->category = filter_input(INPUT_GET, 'category');
               $html->goods($this->category);
            }else {
                $html->actions();
            }
       }
    }
}