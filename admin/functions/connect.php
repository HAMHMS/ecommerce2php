<?php 

define('HOST', 'localhost');
define('USER', 'root');
define('PASSWORD', '');
define('DBNAME', 'project1');



$conn = new mysqli(HOST, USER, PASSWORD, DBNAME);

// arabic
$conn -> set_charset('utf8');