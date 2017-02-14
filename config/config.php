<?php

//define configuration constants
define("DB_HOST", "mysqlsrv.dcs.bbk.ac.uk");
define("DB_USER", "tshadd01");
define("DB_PASS", "bbkmysql");
define("DB_NAME", "tshadd01db");

// Instantiate database.
$database = new Database();

// This was needed so that the below query could be run without running into strict group by errors, 
// this meant ALL of the data retrieval could be done inside of a single select
$database->query('SET sql_mode = "";');
$database->execute();
?>