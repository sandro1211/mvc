<?php

class View {

    function __construct() {
        //echo 'This is the View!';
    }

    public function render($name) {
        require 'views/header.php';
        require 'views/' . $name . '.php';
        require 'views/footer.php';
    }

}
