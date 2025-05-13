<?php
$host = "localhost";
$dbname = "u268400332_booktrip4me";
$username = "u268400332_booktrip4me";
$password = "Booktrip4me@!@#321";

$conn = new mysqli($host, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
