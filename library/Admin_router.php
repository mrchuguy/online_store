<?php

class Admin_router
{

    public $input_type;
    public $action;
    public $category;
    public $id;

    static private function redirect()
    {
        header('Location: ' . $_SERVER['REQUEST_URI']);
    }

    public function __construct()
    {
        $this->input_type = $_SERVER['REQUEST_METHOD'];
        $admin_html = new View();
        if ($this->input_type === 'GET') {
            $this->action = filter_input(INPUT_GET, 'action');
            if ($this->action === 'users') {
                $admin_html->users();
            } elseif ($this->action === 'categories') {
                $this->category = filter_input(INPUT_GET, 'category');
                if (is_null($this->category)) {
                    $admin_html->categories();
                } else {
                    $goods_model = new Goods_model();
                    $admin_html->goods = $goods_model->getGoods($this->category);
                    $admin_html->manufacturers = $goods_model->getManufacturers();
                    $admin_html->countries = $goods_model->getCountries();
                    $admin_html->category_id = $this->category;

                    $admin_html->category();
                }
            } elseif ($this->action === 'orders') {
                $admin_html->orders();
            } else {
                $admin_html->admin_actions();
            }
        } else {
            $this->action = filter_input(INPUT_POST, 'action');
            $this->category = filter_input(INPUT_POST, 'category');
            $this->id = filter_input(INPUT_POST, 'id');
            $category = new CategoriesModel();
            $good = new Goods_model();
            if ($this->action === 'addcategory') {
                $category->addCategory($this->category);
                self::redirect();
            } else if ($this->action === 'del_category') {
                $category->delCategory($this->id);
                self::redirect();
            } else if ($this->action === 'update_category') {
                $goods_model = new Goods_model();
                $admin_html->category_name = $goods_model->getCategory($this->category_id);
                $admin_html->update_category();
            } else if ($this->action === 'update_category_form') {
                $category->updateCategory($this->id, $this->category);
                self::redirect();
            } else if ($this->action === 'add_good') {
                $this->name = filter_input(INPUT_POST, 'name');
                $this->price = filter_input(INPUT_POST, 'price');
                $this->description = filter_input(INPUT_POST, 'description');
                $this->manufacturer_id = filter_input(INPUT_POST, 'manufacturer');
                $this->country_id = filter_input(INPUT_POST, 'country');
                $this->category_id = filter_input(INPUT_GET, 'category');
                $good->addGood($this->name, $this->price, $this->description, $this->manufacturer_id, $this->country_id, $this->category_id);
                self::redirect();
            } else if ($this->action === 'delete_good') {
                $good->deleteGood($this->id);
                self::redirect();
            } else if ($this->action === 'edit_good') {
                $good->editGood($this->id, $this->name, $this->price, $this->description, $this->manufacturer_id, $this->country_id, $this->category_id);
                self::redirect();
            } else if ($this->action === 'add_user') {
                $login = filter_input(INPUT_POST, 'login');
                $password = filter_input(INPUT_POST, 'password');
                $user = new UsersModel();
                $user->addUser($login, $password);
                self::redirect();
            } else if ($this->action === 'del_user') {
                $id = filter_input(INPUT_POST, 'id');
                $user = new UsersModel();
                $user->delUser($id);
                self::redirect();
            } else if ($this->action === 'change_status_order') {
                $id = filter_input(INPUT_POST, 'id');
                $order = new OrdersModel();
                $order->updateOrder($id);
                self::redirect();
            }


            // AddImage::addImg();
        }
        $admin_html->render();
    }

}
