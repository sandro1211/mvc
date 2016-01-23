<?php

class Bootstrap {

    function __construct() {
        $url = filter_input(INPUT_GET, 'url');
        $url = rtrim($url, '/');
        $url = explode('/', $url);

        if (empty($url[0])) {
            require 'controllers/indexController.php';
            $controller = new Index();
            $controller->index();
            return false;
        }

        $file = 'controllers/' . $url[0] . 'Controller.php';
        if (file_exists($file)) {
            require $file;
        } else {
            require 'controllers/errorController.php';
            $controller = new Error();
            $controller->index($url[0]);
            return false;
        }

        $controller = new $url[0];

        if (isset($url[1])) {
            if (method_exists($controller, $url[1])) {
                if (isset($url[2])) {
                    $controller->{$url[1]}($url[2]);
                } else {
                    $controller->{$url[1]}();
                }
            } else {
                $controller->index();
            }
        } else {
            $controller->index();
        }
    }

}
