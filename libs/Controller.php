<?php

class Controller {

    function __construct() {
        //echo 'Main Controller!';
        $this->view = new View();

        $model = 'Model' . strtolower(get_class($this));
        $path = 'models/' . $model . '.php';

        if (file_exists($path)) {
            require $path;
            $this->model = new $model();
        }
    }

    function setJs($jsName) {
        $jsPath = strtolower(get_class($this));
        $this->view->js = array($jsPath . '/js/' . $jsName . '.js');
    }

}
