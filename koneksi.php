<?php

$host = 'localhost'; // replace with your actual database host
$username = 'root'; // replace with your actual database username
$password = ''; // replace with your actual database password
$database = 'coba'; // replace with your actual database name

$conn = mysqli_connect($host, $username, $password, $database);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
