<?php

$db_host = "sql101.infinityfree.com"; 
$db_user = "if0_36314588"; 
$db_password = "sxaf3avmWMgHk";
$db_base = 'if0_36314588_test'; 

$db = new PDO("mysql:host=$db_host;dbname=$db_base", $db_user, $db_password);

$con = mysqli_connect($db_host, $db_user, $db_password, $db_base);

if (!$con) {
   die("Connection failed: " . mysqli_connect_error());
}