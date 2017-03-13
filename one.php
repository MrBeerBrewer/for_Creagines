<?php

/**
* Use this file to get a persistant connection to your Database.
* Before you can CRUD operations you must connect to a database.
* You can use the PHP Data Objects (PDO) interface and connect to your database.
* We are using a persistent connection to improve performance.
* Author: Santosh J
* Date: 14-March-2017
**/

/*Substitute variables specific to your local or remote server*/
$host = '127.0.0.1';
$db   = 'ss';
$user = 'root';
$pass = '';
$charset = 'utf8';

/*Set data source name*/
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

/*Set additional options as required*/
$opt = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
    PDO::ATTR_PERSISTENT => TRUE,
];

/*Attempt a connection*/
try { 
	$pdo = new PDO($dsn, $user, $pass, $opt);
}

/*If connection fails, display relevant errors*/
catch (Exception $e) {
  echo($e->getMessage());
}