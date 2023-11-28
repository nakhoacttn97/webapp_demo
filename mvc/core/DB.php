<?php
class DB{
    
    protected $db = [];

    public function __construct(){
        $connect = 'mysql:dbname=webapp;host=localhost;charset=utf8';
        $user = 'root';
        $pass = '';
        $this->db = new Database($connect, $user, $pass);
    }
}