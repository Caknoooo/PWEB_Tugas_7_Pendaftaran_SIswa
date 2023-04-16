<?php

$server = "localhost";
$user = "root";
$password = "";
$db_name = "form_page";

$db = mysqli_connect($server, $user, $password, $db_name);

if(!$db) {
  die("Failed to connect database " . mysqli_connect_error());
}

?>