<?php

class Router {

    public static function route($url) {
        
        //controller
        $controller = (isset($url[0]) && $url[0] != '') ? ucwords($url[0]) : DEFAULT_CONTROLLER;
        $controller_name = $controller;
        array_shift($url);

        // if(isset($url[0]) && $url[0] != '') {
        //     $controller = ucwords($url[0]);
        // } else {
        //    $controller = DEFAULT_CONTROLLER;
        // }

        

        //action
        $action = (isset($url[0]) && $url[0] != '') ? $url[0]. 'Action' : 'indexAction';
        $action_name = $action;
        array_shift($url);
        
        // if(isset($url[0]) && $url[0] != '') {
        //     $action = $url[0] . 'Action';
        // } else {
        //    $action = 'indexAction';
        // }

        //params
        $queryParams = $url;

        $dispatch = new $controller($controller_name, $action);

        if(method_exists($controller, $action)) {
            call_user_func_array([$dispatch, $action], $queryParams);
        } else {
            die('That method does not exist in the controller \"' . $controller_name . '\"');
        }
    }

    public static function redirect($location) {
        if(!headers_sent()) {
            header('Location: '.PROOT.$location);
            exit();
        } else {
            echo '<script type="text/javascript">';
            echo 'window.location.href="' .PROOT.$location.'";';
            echo '</script>';
            echo '<noscript>';
            echo 'meta http-equiv="refresh" content="0;url='.$location.'" />';
            echo '</noscript>';exit;
        }
    }

}