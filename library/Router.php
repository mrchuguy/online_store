<?php
class Router
{
    public $input_type;
    public $action;
    public $category;
    public $goods;

    public function __construct(){
       $this->input_type = $_SERVER['REQUEST_METHOD'];
       $html = new View();
       if ($this->input_type === 'GET') {
           $this->category = filter_input(INPUT_GET, 'category');
           $this->goods = filter_input(INPUT_GET, 'goods');
           if ($this->category !== null&&$this->goods !== null){
               $html->full_descr_goods($this->category,$this->goods);
            }else if($this->category !== null){
                $html->goods($this->category);
            }else {
                $html->actions();
            }
       } else {
        $this->action = filter_input(INPUT_POST, 'action');
        if($this->action === 'basket'){
          $html->basket();
        } else if($this->action === 'make_order'){
            $html->make_order();
        } else if($this->action === 'confirm_order'){
            $name = filter_input(INPUT_POST, 'customer_name');
            $surname = filter_input(INPUT_POST, 'customer_surname');
            $phone = filter_input(INPUT_POST, 'customer_phone');
            $email = filter_input(INPUT_POST, 'customer_email');
            $order = new OrdersModel();
            $order->addCustomer($name, $surname, $phone, $email);
        }
       }
    }
}