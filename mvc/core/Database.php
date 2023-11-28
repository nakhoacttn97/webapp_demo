<?php
class Database extends PDO{

    public function __construct($connect, $user, $pass){
        parent::__construct($connect, $user, $pass);
    }

    // cac ham ben duoi viet truy van
    public function select($sql, $data = [], $fetchStyle = PDO::FETCH_ASSOC){
        $stmt = $this->prepare($sql);

        foreach($data as $key => $value){
            $stmt->bindParam($key, $value);
        }

        $stmt->execute();
        $res = $stmt->fetchAll($fetchStyle);
        return $res;
    }
}