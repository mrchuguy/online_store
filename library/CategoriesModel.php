<?php

class CategoriesModel {
    
	
	private $db;
	
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
	    $query = "insert into category (name) values ('" . $name . "');";
	    $this->db->query($query);
	}
	    public function updateCategory($id, $name) {
	    $query = "update category set name = '" . $name . "' where id ='" . $id;
	    $this->db->query($query);
    }
	 public function delCategory($id) {
	$query = 'delete from category where id=' . $id;
	$this->db->query($query);
	 }
}
