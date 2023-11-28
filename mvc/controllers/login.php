<?php
// class login have method for login
class login extends Controller{

    // construct auto call some method
    protected function __construct(){
        // call Load,php
        parent::__construct();

        // create some variable
        $mess = [];
        $data = [];
    }

    // method login for admin
    protected function login(){
        $this->load->view('header');
        $this->load->view('cpanel/login');
        $this->load->view('footer');
    }

    protected function auth_login(){
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        $tableAdmin = 'tbl_admin';
        $login_model = $this->model('login_model');
        
        
    }
}