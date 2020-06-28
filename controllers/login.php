<?php

class Login extends Controller {

    function __construct() {
        parent::__construct();
        $this->view->rendor('login/index');
    }

}