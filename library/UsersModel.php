<?php


class UsersModel {
    private $db;
    
    public function __construct() {
        $this->db= new mysqli();
    }
}
