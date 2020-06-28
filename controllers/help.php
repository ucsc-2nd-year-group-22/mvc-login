<?php

class Help extends Controller{

    function __construct() {
        parent::__construct();
        // echo 'We are in help.' .'<br>';
        $this->view->rendor('help/help');
    }

    public function other($arg = false) {
        // echo 'We are inside other'.'<br>';
        // echo 'Oprtional : ' . $arg .'<br>';

        require 'models/help_model.php';
        $model = new Help_model();
    }

}