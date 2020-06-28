<?php

class View {
    function __construct() {
        // echo 'This is the view<br>';
    }

    public function rendor($name) {
        require 'views/header.php';
        require 'views/' . $name . '.php';
        require 'views/footer.php';
    }
}