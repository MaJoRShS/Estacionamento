<?php

include 'pdo.php';
use Connection;

abstract  class Model{


    protected $connection;


    public function __construct() {

        $this->connection = Connection::connect();
    }

public function insert ($key){
    // $sql = "INSERT INTO carros "
}

}