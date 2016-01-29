<?php

class Login extends Controller {
    
    var $pageTitle = 'Login';
    
    function __construct() {
        parent::__construct();
        //echo "We are in index!";
    }

    function index() {
        $this->view->render(get_class($this), $this->pageTitle);
    }
    
    function run(){
        $this->model->run();
    }

}
