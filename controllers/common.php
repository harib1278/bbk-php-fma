<?php
/**
* Class was created to make the act of running a query as simple as instantiating an object and passing it a SQL query string on instantiation. 
*/

class CommonController{

    private $sql;
    private $database;

    public function __construct($sql){   

        $this->sql      = $sql; 
        $this->database = new Database();

    }

    public function runQuery(){

        $this->database->query($this->sql);

        return $this->database->resultset();
    }
}

?>