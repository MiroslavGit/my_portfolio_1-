<?php
$servername = "sql103.epizy.com";
$username = "epiz_30799286";
$password = "PwT7XBktL3fvUC";
$dbname = "epiz_30799286_portfolio";

/* $servername = "localhost";
$username = "root";
$password = "";
$dbname = "portfolio"; */

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}