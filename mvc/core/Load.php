<?php
class Load{

    // model query database
    public function model($model){
        include_once "./mvc/models/".$model.".php";
        return new $model();
    }

    // view -> reuquire layout
    public function view($view, $data = false){
        if($data == true){
            extract($data);
        }
        include_once "./mvc/views/".$view.".php";
    }
}