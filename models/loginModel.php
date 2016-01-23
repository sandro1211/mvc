<?php

class LoginModel extends Model {

    function __construct() {
        parent::__construct();
    }

    function run() {
        $csql = "SELECT id "
                . "FROM users "
                . "WHERE login = :login "
                . "AND password = :password ";

        $stmt = $this->db->prepare($csql);
        $stmt->execute(array(
            ':login' => $_POST['login'],
            ':password' => $_POST['password']
        ));

        //$data = $stmt->fetchAll();
        $count = $stmt->rowCount();
        if ($count > 0) {
            Session::init();
            Session::set('loggedIn', true);
            header('location: ../dashboard');
        } else {
            header('location: ../login');
        }
    }

}
