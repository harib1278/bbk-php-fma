<?php
/**

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