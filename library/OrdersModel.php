<?php

class OrdersModel {

    private $db;

    public function __construct() {
	$this->db = new mysqli(HOST, LOGIN, PASS, NAME);
    }

    public function getOrder() {
	if ($this->db->connect_errno === 0) {
	    $query = 'select orders.id, comment, status,customers.name,customers.surname,customers.phone,customers.email,status  from  orders LEFT OUTER JOIN customers ON customer_id = customers.id';
	    $res = $this->db->query($query);
	    if ($res) {
		return $res->fetch_all(MYSQLI_ASSOC);
	    } else {
		return false;
	    }
	}
    }

    public function updateOrder($id) {
	$query = "update orders set status = 'processed' where id =" . "$id";
	$this->db->query($query);
    }

}
