<?php
// $servername = "localhost";
// $username = "root";
// $password = "";
// $database = "samadhi";

// // Create connection
// $conn = new mysqli($servername, $username, $password, $database);
$Conn = mysqli_connect("localhost", "root", "", "samadhi","3306");
// Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }
// echo "Connected successfully";
// ?>