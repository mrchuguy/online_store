<?php
class View
{
    private $page;
    public function users(){
        $this->page= '../view/add_user_form.php';
	
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
    public function category($id){
        $this->page= '../view/add_goods_form.php';
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
}