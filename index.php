<?php
require_once 'router.php';

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
    static function page_404() {
        echo "404";
    }
   
}

$router = new My_Router();
$router->routing();