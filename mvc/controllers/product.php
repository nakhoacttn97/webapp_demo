<<?php
class product extends Controller{

    // call constructor of Controller -> Load -> model & view
    protected function __construct(){
        parent::__construct();
    }

    // key of product in database table tbl_product
    // id_product, name_product, image, price, waranty, price_old
    protected function list_product(){
        $this->load->view("header");

        $productDetail = $this->model("product");
        $data["productDetail"] = $this->select($productDetail);


        $this->view("footer");
    }
}