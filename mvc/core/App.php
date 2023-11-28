<?php
// class App chua cac ham xu ly thanh dia chi url
class App{

    protected $url;
    protected $controllerName="index";
    protected $action="index";
    protected $params=[];
    public $controllerPath="./mvc/controllers/";
    protected $controller;

    function __construct(){
        $this->urlProcess();
        $this->loadController();
        $this->callMethod();
    }

    // Xu ly url
    protected function urlProcess(){
        if(isset($_GET['url'])){
            $this->url = $_GET['url'];
        }else{
            $this->url = NULL;
        }
        
        if($this->url != NULL){
            $this->url = explode("/", filter_var(trim($_GET['url'], '/')));
        }else{
            unset($this->url);
        }
    }

    // load controller
    protected function loadController(){
        if(isset($this->url[0])){
            $this->controllerName = $this->url[0];
            $fileName = $this->controllerPath.$this->controllerName.".php";
            if(file_exists($fileName)){
                include_once $fileName;
                if(class_exists($this->controllerName)){
                    $this->controller = new $this->controllerName();
                }
            }
        }else{
            // reuqire url default
            include_once $this->controllerPath.$this->controllerName.".php";
            $this->controller = new $this->controllerName();
        }
    }
    
    protected function callMethod(){
        // TH1 exists url[1] va url[2]
        if(isset($this->url[2])){
            $this->action = $this->url[1];
            if(method_exists($this->controller, $this->action)){
                $this->controller->{$this->action}($this->url[2]);  // call function inside controller
            }else{
                //header("Location:")
                echo "Not found";
            }
        }else{  
            // TH2 chi ton tai url[1], not url[2]
            if(isset($this->url[1])){
                $this->action = $this->url[1];
                if(method_exists($this->controller, $this->action)){
                    $this->controller->{$this->action}();
                }else{
                    echo "Not found";
                }
            }else{
                // TH3 khong ton tai ca url[1] & url[2], su dung method default
                if(method_exists($this->controller, $this->action)){
                    $this->controller->{$this->action}();
                }else{
                    echo "Not found";
                }
            }
        }
    }
}