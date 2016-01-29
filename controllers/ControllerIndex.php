<?php

class Index extends Controller {

    var $pageTitle = 'Index';

    function __construct() {
        parent::__construct();
        //echo "We are in index!";
    }

    function index() {
        $this->view->render(get_class($this), $this->pageTitle);
        echo "IVANES!";
    }

}
