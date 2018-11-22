<?php


class Goods_model {
    
    private $db;
	
    public function __construct() {
	$this->db = new mysqli(HOST, LOGIN, PASS, NAME);
    }
    
    static public function redirect() {
	header('Location:' . $_SERVER['PHP_SELF']);
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
    
    public function getGoods($id){
        if ($this->db->connect_errno === 0) {
	    $query = 'select * from goods where category_id='."'$id'";
	    $res = $this->db->query($query);
	    if ($res) {
                $goods = $res->fetch_all(MYSQLI_ASSOC);
                return $goods;
	    } else {
		return false;
	    }
	}
    }

        public function addGood($good, $price, $description, $manufact_count_id, $category_id) {
	if ($this->db->connect_errno === 0) {
	    $query = "insert into goods (name, price, description, manufact_count_id, category_id) values ('" . $name . "','" . $price . "','" . $description . "','" . $manufact_count_id . "','" . $category_id . "');";
	    $this->db->query($query);
	    self::redirect();
	}
    }
}