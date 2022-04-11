<?php
$host = "127.0.0.1";
$user = "root";
$pass = "";
$db = "storebook";

$con = new mysqli($host,$user,$pass,$db);

if ($con->connect_error) {
    die("Connection failed: ");
  }

  session_start();
?>