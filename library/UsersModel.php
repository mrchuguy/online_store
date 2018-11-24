<?php


class UsersModel {
    private $db;
    
    public function __construct() {
        $this->db= new mysqli(HOST, LOGIN, PASS, NAME);
    }
    
    public function delUser($id) {
	$query = 'delete from users where id=' . "$id";
	$this->db->query($query);
    }
    
    public function addUser($login, $password) {
        $password_hash = password_hash($password);
	$query = "insert into users (login, password) values ('" . $login . "','".$password_hash."');";
	$this->db->query($query);
    }

    public function getUsers(){
        if($this->db->connect_errno===0){
            $query='select * from users';
            $res = $this->db->query($query);
            if($res){
               return $res->fetch_all(MYSQLI_ASSOC);
            } else{
                return false;
            }
        }
    }
}

