<?php
$servername = "localhost";
$username = "benjamin";
$password = "nwabunwanne12345";
$myDB ="myfirstdatabase";

// Create connection
$conn = new mysqli($servername, $username, $password, $myDB);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
};
