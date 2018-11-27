<?php

class OrdersModel {

    private $db;

    public function __construct() {
	$this->db = new mysqli(HOST, LOGIN, PASS, NAME);
    }

    public function getOrder() {
	if ($this->db->connect_errno === 0) {
	    $query = 'select orders.id,customers.id, comment, status,customers.name,customers.surname,customers.phone,customers.email,status  from  orders LEFT OUTER JOIN customers ON customer_id = customers.id';
	    $res = $this->db->query($query);
	    if ($res) {
		return $res->fetch_all(MYSQLI_ASSOC);
	    } else {
		return false;
	    }
	}
    }

    public function updateOrder($id) {
	$query = "update orders set status = 'processed' where id =" . $id;
	$this->db->query($query);
    }
	 
	public function addCustomer($name, $surname, $phone, $email){
		if ($this->db->connect_errno === 0) {
			$query = "INSERT INTO customers (name, surname, phone, email) VALUES ('".$name."', '".$surname."', '".$phone."', '".$email."')";
			$this->db->query($query); 
		}
	}

	public function getLastCustomersId(){
		if ($this->db->connect_errno === 0) {
	        $query = 'select max(id) from customers';
	        $res = $this->db->query($query);
	        if ($res) {
		        return $res->fetch_assoc();
	        } else {
		        return false;
	        }
	    }
	}

	public function addOrder($customer_id, $comment){
		if ($this->db->connect_errno === 0) {
			$query = "INSERT INTO orders (customer_id, comment, status) VALUES (".$customer_id.", '".$comment."', 'not processed')";
			$this->db->query($query); 
		}
	}

	public function getLastOrderId(){
		if ($this->db->connect_errno === 0) {
	        $query = 'select max(id) from orders';
	        $res = $this->db->query($query);
	        if ($res) {
		        return $res->fetch_assoc();
	        } else {
		        return false;
	        }
	    }
	}

	public function addOrderGoods($order_id, $goods_id, $number){
		if ($this->db->connect_errno === 0) {
			$query = "INSERT INTO order_goods (order_id, goods_id, number) VALUES (".$order_id.", ".$goods_id.", ".$number.")";
			$this->db->query($query); 
		}
	}
} 