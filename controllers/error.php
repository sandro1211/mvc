<?php

class Error extends Controller {

    function __construct($url = false) {
        parent::__construct();
        //echo 'This is an error!';
        $this->view->msg = "The page $url doesn't exist!";
        $this->view->render('/error/index');
    }

}
