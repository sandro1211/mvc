<?php

class Help extends Controller {

    function __construct() {
        parent::__construct();
        //echo 'We are inside Help!';
    }
    
    public function other($arg = false){
        echo 'We are inside other, ';
        echo 'Optional: ' . $arg . '!';
        
        require 'models/help_model.php';
        $model = new Help_Model();
    }
}
