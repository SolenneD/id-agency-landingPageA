<?php
session_start();

define("SQL_HOST","localhost");
define("SQL_USER", "root");
define("SQL_PASS", "root");
define("SQL_DBNAME", "idagency");

try{
    $db = new PDO("mysql:dbname=".SQL_DBNAME.";charset=utf8;host=".SQL_HOST,SQL_USER,SQL_PASS);
}catch(Execption $e){
    die('Erreur : ' . $e->getMessage());
}

$maxFileSize = 1048576; //=1Mo

include('functions.php');