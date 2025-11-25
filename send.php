<?php
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$conn = new mysqli("localhost", "root", "", "contact");

if ($conn->connect_error) {
    die("Холболтын алдаа: " . $conn->connect_error);
}

$sql = "INSERT INTO requests (fullname, email, subject, message)
        VALUES ('$fullname', '$email', '$subject', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "Хүсэлт амжилттай илгээгдлээ!";
} else {
    echo "Алдаа гарлаа: " . $conn->error;
}

$conn->close();
?>
