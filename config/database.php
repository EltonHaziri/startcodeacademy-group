<?php

class Database {

    protected $conn;

    public function __construct() {
        $this->conn = new mysqli('localhost','root','','detyrat');

        if($this->conn->connect_errno>0) {
            die('Lidhja me database deshtoi :'.$this->conn->connect_errno);
        }
    }
}



