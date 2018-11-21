<?php


class Goods_model {
    
    private $dbname = 'r2d2_articles';
    private $db;

    public function __construct() {
	$this->db = new mysqli($this->dbname);
    }
    
    static public function redirect() {
	header('Location:' . $_SERVER['PHP_SELF']);
    }
    
    public function getManufacturers() {
        exit('ghgj');
	if ($this->db->connect_errno === 0) {
	    $query = 'select name from manufacturers';
	    $res = $this->db->query($query);
	    if ($res) {
                $manufacturers = $res->fetch_all(MYSQLI_ASSOC);
                var_dump($manufacturers);
                exit();
		return $manufacturers;
	    } else {
		return false;
	    }
	}
    }
    
    public function getCountries() {
	if ($this->db->connect_errno === 0) {
	    $query = 'select name from countries';
	    $res = $this->db->query($query);
	    if ($res) {
		return $res->fetch_all(MYSQLI_ASSOC);
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
