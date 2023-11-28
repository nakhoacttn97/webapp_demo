<?php
// method query username password for login
class loginmodel extends DB{
    protected function __construct(){
        parent::__construct();
    }

    // 
    protected function login($table_admin, $user, $pass){
        $sql = "SELECT * FROM $table_admin WHERE username = ? AND password = ?";
        $res = $this->db->affectedRow($sql, $user, $pass);
        return $res;
    }

    //  

}