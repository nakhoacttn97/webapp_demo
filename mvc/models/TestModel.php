<?php
class TestModel extends DB{

    // constrcut -> connect database
    public function __construct(){
        parent::__construct();
    }
    
    // callmethod query database
    public function getTest($table){
       $sql = "SELECT * FROM $table";
       $res = $this->db->select($sql);
       return $res;
    }
}