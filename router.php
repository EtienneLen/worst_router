<?php
class Router {
    public $route_controller = array();

    static function page_404() {
        echo "404";
    }

    function routing() {

        if(array_key_exists($_SERVER["REQUEST_URI"], $this->route_controller)) {
            call_user_func(array(get_class($this), $this->route_controller[$_SERVER["REQUEST_URI"]]));
        } else {
            call_user_func(array(get_class($this), 'page_404'));
        
        }

    }

}

?>