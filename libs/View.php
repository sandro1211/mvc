<?php

class View {

    function __construct() {
        //echo 'This is the View!';
    }

    public function render($name, $pageTitle = 'TITLE', $showHF = true) {
        echo "<title>$pageTitle</title>";
        
        if ($showHF == true) {
            require 'views/header.php';
            require 'views/' . strtolower($name) . '/index.php';
            require 'views/footer.php';
        } else {
            require 'views/' . strtolower($name) . '/index.php';
        }
    }

}
