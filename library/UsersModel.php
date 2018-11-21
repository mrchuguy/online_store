<?php


class UsersModel {
    private $db;
    
    public function __construct() {
        $this->db= new mysqli(HOST, LOGIN, PASS, NAME);
    }
    public function showUsers(){
        if($this->db->connect_errno===0){
            $query='select * from users';
            $res = $this->db->query($query);
            if($res){
                $res->fetch_all(MYSQLI_ASSOC);
                $users = $res;
?>
                <ol>
<?php
                    foreach($users as $user){
?>
                        <li><?= $user['login']?>
                            <form method="post">
                                <input type="submit" value="delete"/>
                                <input type="hidden" name="action" value="del_user"/>
                                <input type="hidden" name="id" value="<?= $user['id']?>"/>
                            </form>
                        </li>
<?php
                    }
?>
                </ol>     
<?php

            } else{
                return false;
            }
        }
    }
}

