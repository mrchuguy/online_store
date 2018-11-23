<?php


class Goods_model {
    
    private $db;
	
    public function __construct() {
	$this->db = new mysqli(HOST, LOGIN, PASS, NAME);
    }
    
    public function getCategory($category_id){
	if ($this->db->connect_errno === 0) {
	    $query = 'SELECT category.name FROM category WHERE category.id = '.$category_id;
	    $this->db->query($query);
	}
    }
    
    public function getManufacturers() {
	if ($this->db->connect_errno === 0) {
	    $query = 'select * from manufacturers';
	    $res = $this->db->query($query);
	    if ($res) {
                $manufacturers = $res->fetch_all(MYSQLI_ASSOC);
                return $manufacturers;
	    } else {
		return false;
	    }
	}
    }
    
    public function getCountries() {
	if ($this->db->connect_errno === 0) {
	    $query = 'select * from countries';
	    $res = $this->db->query($query);
	    if ($res) {
                $countries = $res->fetch_all(MYSQLI_ASSOC);
		return $countries;
	    } else {
		return false;
	    }
	}
    }
    
    public function getGoods($category_id){
        if ($this->db->connect_errno === 0) {
	    $query = 'SELECT goods.id, goods.name, goods.price, goods.description, manufacturers.name as manufacturer, countries.name as country, goods.category_id FROM goods LEFT OUTER JOIN manufacturer_country ON goods.manufact_count_id = manufacturer_country.id LEFT OUTER JOIN countries ON countries.id = manufacturer_country.country_id LEFT OUTER JOIN manufacturers ON manufacturers.id = manufacturer_country.manufacturer_id WHERE category_id ='.$category_id;
	    $res = $this->db->query($query);
	    if ($res) {
                $goods = $res->fetch_all(MYSQLI_ASSOC);
                return $goods;
	    } else {
		return false;
	    }
	}
    }

    public function addGood($name, $price, $description, $manufacturer_id, $country_id, $category_id) {
	if ($this->db->connect_errno === 0) {
	    $query = "INSERT INTO goods (name, price, description, manufact_count_id, category_id) VALUES ('".$name."', '".$price."', '".$description."', (SELECT manufacturer_country.id FROM manufacturer_country WHERE country_id = '".$country_id."'&&manufacturer_id = '".$manufacturer_id."'), '".$category_id."')";
	    $this->db->query($query);
	    
	}
    }
    
    public function deleteGood($id){
	if ($this->db->connect_errno === 0) {
	    $query = 'delete from goods where id='.$id;
	    $this->db->query($query);
	}
    }
    
    public function editGood($id, $name, $price, $description, $manufacturer_id, $country_id, $category_id) {
	if ($this->db->connect_errno === 0) {
	    $query = "UPDATE goods SET name = '".$name."', price = '".$price."', description = '".$description."', manufact_count_id = (SELECT manufacturer_country.id FROM manufacturer_country WHERE country_id = '".$country_id."'&&manufacturer_id = '".$manufacturer_id."'), category_id = '".$category_id."' WHERE id = ".$id;
	    $this->db->query($query);
	}
    }
    
    
}
