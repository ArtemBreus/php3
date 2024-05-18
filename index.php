<?php
$servername = "monorail.proxy.rlwy.net";
$username = "postgres";
$password = "zGNPN0ihMwiW0yWcwugQX0gIWwQypTKh";
$dbname = "railway";
$port = 51824;

// Create connection
$conn = pg_connect("host=$servername port=$port dbname=$dbname user=$username password=$password");

// Check connection
if (!$conn) {
    die("Connection failed: " . pg_last_error());
}
echo "Connected successfully";
?>
