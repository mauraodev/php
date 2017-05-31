<?php

    class BaseController {
    
        private $controller;
        private $action;
     
        public function __construct($controller, $action){
        
            if($controler == ''){
                $this->controller = 'home';
            }else {
                $this->controller = $controller;
            }
            
            if($controller == '') {
                $this->action = 'indexAction';
            } else {
                $this->action = $action;
            }
        
            require_once $this->controller . "Controller.class.php";
            
          
        }
        
        public function output($view) {
        
            
        }
        
        
    
    }

?>