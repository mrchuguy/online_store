<?php
class View
{
    public function users(){
        echo 'форма добавления нового пользователя, ниже все пользователи с кнопкой удалить';
    }
    public function goods(){
        echo 'кнопка добавить категорию, ниже все категории с кнопкой переименовать';
    }
    public function orders(){
        echo 'все заказы, у необработаных кнопка обработан';
    }
    public function admin_actions(){
        include_once '../view/admin_actions.php';
    }
}