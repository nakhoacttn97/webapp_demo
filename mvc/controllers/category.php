<?php
class category extends Controller{

    public function __construct(){
        // create array data
        $data = [];

        // Call Controller.php -> Load.php -> method model and views
        parent::__construct(); 
    }

    public function list_category(){

        $this->load->view("header");

        // view + model of category
        $categorymodel = $this->load->model("categorymodel");
        $table = "tbl_category_product";
        $data["category"] = $categorymodel->category($table);
        $this->load->view("category", $data);

        $this->load->view("footer");
    }

    // category by id
    public function catebyid(){

        $this->load->view('header');
        $categorymodel = $this->load->model('homemodel');
        $id = 2;

        $table = 'tbl_category_product';
        $data['categorybyid'] = $categorymodel->categorybyid($table, $id);
        
        $this->load->view('categorybyid', $data);
        $this->load->view('footer');
    }

    // add category
    public function addcategory(){
        $this->load->view('addcategory');
    }

    // insert category
    public function insertcategory(){
        $categorymodel = $this->load->model
    }

}