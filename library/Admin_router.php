<?php

class Admin_router
{
    public $input_type;
    public $action;
    public $category;
    public $id;

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
            $this->action = filter_input(INPUT_POST, 'action');
	    $this->category = filter_input(INPUT_POST, 'category');
	    $this->id = filter_input(INPUT_POST, 'id');	    
	    $category= new CategoriesModel();
	    if ($this->action === 'addcategory'){
		$category->addCategory($this->category);
	    } else if($this->action === 'del_category'){
		$category->delCategory($this->id);		
	    } else if($this->action === 'update_category'){
		$admin_html->update_category();		
	    }else if($this->action === 'update_category_form'){
		$category->updateCategory($this->id, $this->category);
	    }
            // AddImage::addImg();
            
        }
    }
}