<?php

class Help extends Controller {

    function __construct() {
        parent::__construct();
        //echo 'We are inside Help!';
    }
    
    function index(){
        $this->view->render(get_class($this));
    }
    
    public function other($arg = false){
        require 'models/helpModel.php';
        $model = new HelpModel();
        $this->view->blah = $model->blah();
    }
    
    public function hey($var = false){
        echo 'what comes: ' . $var;
    }
}
