<?php
$servername = "localhost";
$username = "root";
$password = "21131141@lov";
$dbname = "formlogin";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>