<?php
// class query database of category
class categorymodel extends DB{
    public function __construct(){
        // create method connect database for model
        parent::__construct();
    }

    public function category($table){
        $sql = "SELECT * FROM $table ORDER BY id ASC";
        $res = $this->db->select($sql);
        return $res;
    }
}