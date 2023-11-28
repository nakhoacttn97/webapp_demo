<?php
class TestApp extends Controller{

    public $testAppModel;
    protected $testAppView;

    function __construct(){
        parent::__construct();
    }

    public function testapp(){
        // model
        $testAppModel = $this->load->model("TestModel");
        $table_test = "test_query";
        $data['arr'] = $testAppModel->getTest($table_test);

         //view
         $this->load->view("testApp", $data);
    }
}