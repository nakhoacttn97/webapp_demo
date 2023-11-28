<?php
// Controller xu ly model va view hien thi -> client
class Controller{

    protected $load = [];

    public function __construct(){
            $this->load = new Load();
    }
}