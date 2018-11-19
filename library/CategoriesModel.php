<?php

class CategoriesModel {
    
    public function __construct() {
	$this->db = new mysqli(HOST, LOGIN, PASS, NAME);
    }

    public function getCategory() {
	if ($this->db->connect_errno === 0) {
	    $query = 'select * from category';
	    $res = $this->db->query($query);
	    if ($res) {
		return $res->fetch_all(MYSQLI_ASSOC);
	    } else {
		return false;
	    }
	}
    }
    public function addCategory($name) {
	if ($this->db->connect_errno === 0) {
	    $query = "insert into category (name) values ('" . $name . "');";
	    $this->db->query($query);
	    self::redirect();
	}
    }
}
