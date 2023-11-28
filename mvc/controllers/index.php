<?php

class index extends Controller{

    public function __construct(){
        // create variable type => array
        $data = [];

        // Controller.php -> Load.php -> method model and view
        parent::__construct();
    }

    // func index co chuc nang default
    public function index(){
        $this->homepage();
    }

    public function homepage(){
        $this->load->view('header');
        $this->load->view('home');
        $this->load->view('footer');
    }

    public function notfound(){
        $this->load->view('header');
        $this->load->view('404');
        $this->load->view('footer');
    }

}