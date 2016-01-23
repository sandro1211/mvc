<?php

class Controller {

    function __construct() {
        //echo 'Main Controller!';
        $this->view = new View();

        $model = strtolower(get_class($this)) . 'Model';
        $path = 'models/' . $model . '.php';
        
        if (file_exists($path)) {
            require $path;
            $this->model = new $model();
        }
    }

}
