<?php
$servername = "localhost";
$database = "la_paka";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    #die("Connection failed: " . mysqli_connect_error());
}
#echo "Connected successfully";
