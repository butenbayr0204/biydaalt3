<?php
include "db.php";

$name = $_POST['name'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$sql = "INSERT INTO requests(name, phone, message) 
        VALUES('$name', '$phone', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "Амжилттай илгээгдлээ!";
} else {
    echo "Алдаа: " . $conn->error;
}
?>
