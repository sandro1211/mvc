<?php

class View {

    function __construct() {
        //echo 'This is the View!';
    }

    public function render($name, $noInclude = false) {
        if ($noInclude == true) {
            require "views/$name/index.php";
        } else {
            require 'views/header.php';
            require "views/$name/index.php";
            require 'views/footer.php';
        }
    }

}
