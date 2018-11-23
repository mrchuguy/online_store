<?php
class View
{
    public function users(){
        echo 'форма добавления нового пользователя, ниже все пользователи с кнопкой удалить';
    }
    public function categories(){
        include_once '../view/categories.php';
    }
    public function orders(){
        echo 'все заказы, у необработаных кнопка обработан';
    }
    public function admin_actions(){
        include_once '../view/admin_actions.php';
    }
    public function category($id){
        //echo 'category'.$id;
        include_once '../view/add_goods_form.php';
    }
    public function update_category(){
	include_once '../view/update_category.php';
    }
    //---
    public function actions(){
        include_once 'view/actions.php';
    }
    public function goods($id){
        include_once 'view/show_goods.php';
    }
}