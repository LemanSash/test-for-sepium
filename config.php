<?php

$host = "sql101.infinityfree.com"; /* Host name */
$user = "if0_36314588"; /* User */
$password = "sxaf3avmWMgHk"; /* Password */
$dbname = "if0_36314588_test"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
   die("Connection failed: " . mysqli_connect_error());
}