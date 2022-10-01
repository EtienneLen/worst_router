<?php
require_once 'class/router.php';

class My_Router extends Router {
    public $route_controller = array(
        "/" => "home", 
        "/about" => "about"
    );
    static function home() {
        echo "Home";
    }
    
    static function about() {
        echo "About page";
    }
    
   
}

$router = new My_Router();
$router->routing();