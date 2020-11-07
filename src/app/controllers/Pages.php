<?php

class Pages {
    public function __construct() {}

    public function index() {
        echo 'Index Method';
    }

    public function pagesTeste($param1) {
        echo 'Pages Method Teste' . $param1;
    }
}