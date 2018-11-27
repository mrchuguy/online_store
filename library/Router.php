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
            $comment = filter_input(INPUT_POST, 'comment');
            //----------------------
            $order = new OrdersModel();
            $order->addCustomer($name, $surname, $phone, $email);
            //----------------------
            $customer_id = $order->getLastCustomersId();
            $customer_id2 = intval($customer_id["max(id)"]);
            $order->addOrder($customer_id2, $comment);
            //----------------------
            $order_id = $order->getLastOrderId();
            $order_id2 = intval($order_id["max(id)"]);
            $goods_model = new Goods_model();
            $goods = $goods_model->getAllGoods();
            foreach($goods as $goods_item){
                if($_SESSION[$goods_item['name']]!== null){
                  $goods_id2 = intval($goods_item['id']);
                  $number2 = intval($_SESSION[$goods_item['name']]);
                  $order->addOrderGoods($order_id2, $goods_id2, $number2);
                }
            }
            session_destroy();    
        }
       }
    }
}