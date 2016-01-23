<?php

class Dashboard extends Controller {

    var $pageTitle = 'Dashboard';

    function __construct() {
        parent::__construct();
        Session::init();

        $logged = Session::get('loggedIn');
        if ($logged == false) {
            Session::destroy();
            header('location: ../login');
            exit;
        }
    }

    function index() {
        $this->view->render(get_class($this), $this->pageTitle);
    }

    function logout() {
        Session::destroy();
        header('location: ../login');
        exit;
    }

}
