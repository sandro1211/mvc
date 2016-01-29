<?php

class Error extends Controller {
    
    var $pageTitle = 'Error!';
    
    function __construct() {
        parent::__construct();
        //echo 'This is an error!';
    }
    
    function index($url = false){
        $this->view->msg = "The page $url doesn't exist!";
        $this->view->render(get_class($this), $this->pageTitle);
    }

}
