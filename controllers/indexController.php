<?php

class Index extends Controller {

    function __construct() {
        parent::__construct();
        //echo "We are in index!";
        $this->view->msg = 'BODY';
        $this->view->render(get_class($this));


        $stack = debug_backtrace();
        $firstFrame = $stack[count($stack) - 1];
        $initialFile = $firstFrame['file'];
        echo $initialFile;
    }

}
