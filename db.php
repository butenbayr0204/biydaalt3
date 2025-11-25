<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "denejnii_magnit";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Database холболтын алдаа: " . $conn->connect_error);
}
?>
