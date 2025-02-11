<?php
$servername = "localhost";
$username = "root";
$password = "sudosql";
$dbname = "election_system";
$socket = "/run/mysqld/mysqld.sock"; // Add the socket path

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname, null, $socket);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
