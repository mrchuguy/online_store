<?php
class View
{
    private $page;
    public function users(){
        $this->page= '../view/users.php';
	
    }
    public function categories(){
        $this->page= '../view/categories.php';
    }
    public function orders(){
        $this->page= '../view/orders.php';
    }
    public function admin_actions(){
        $this->page= '../view/admin_actions.php';
    }
    public function category(){
        $this->page= '../view/goods.php';
    }
    
    public function update_category(){
	$this->page= '../view/update_category.php';
    }
    public function render() {
	include_once '../view/admin_template.php';
	include_once $this->page;
    }
    //---
    public function actions(){
        include_once 'view/actions.php';
    }
    public function goods($id){
        include_once 'view/show_goods.php';
    }
    public function full_descr_goods($category_id,$goods_id){
        include_once 'view/show_full_descr_goods.php';
    }
    public function basket(){
        include_once 'view/basket.php';
    }
    public function make_order(){
        include_once 'view/add_new_order.php';
    }
}