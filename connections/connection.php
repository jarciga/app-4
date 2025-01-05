<?php
DEFINE('HOST', 'localhost');
DEFINE('USER', 'root');
DEFINE('PASS', '');
//DEFINE('DB_NAME', '');
DEFINE('DB_NAME', '');
DEFINE('PORT', '3306');
$employeedb = mysqli_connect(HOST, USER, PASS, DB_NAME,PORT) OR die ("Could not connect to MySQL: ". mysqli_connect_error()); 

