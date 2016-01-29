<?php

class Help extends Controller {
    
    var $pageTitle = 'Help';
    
    function __construct() {
        parent::__construct();
        //echo 'We are inside Help!';
    }
    
    function index(){
        $this->view->render(get_class($this), $this->pageTitle);
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
