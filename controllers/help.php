<?php

class Help extends Controller {

    function __construct() {
        parent::__construct();
        //echo 'We are inside Help!';
        $this->view->msg = 'BODY';
        $this->view->render('help/index');
    }
    
    public function other($arg = false){
        echo 'We are inside other, ';
        echo 'Optional: ' . $arg . '!';
        
        require 'models/help_model.php';
        $model = new Help_Model();
    }
}
