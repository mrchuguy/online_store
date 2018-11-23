<?php
class View
{
    private $page;
    public function users(){
        echo 'форма добавления нового пользователя, ниже все пользователи с кнопкой удалить';
    }
    public function categories(){
        $this->page= '../view/categories.php';
    }
    public function orders(){
        echo 'все заказы, у необработаных кнопка обработан';
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
}