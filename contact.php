<?php
include 'dbConnect.php';
include 'connection.php';
session_start();
if (isset($_POST['contactUs'])) {
    $email = $_POST['email'];
    $message = $_POST['message'];

    include 'connection.php';

    $sql = 'INSERT INTO contactus (email, message) VALUES (:email, :message)';
    $query = $pdo->prepare($sql);
    $query->bindParam('email', $email);
    $query->bindParam('message', $message);

    if ($query->execute()) {
        echo "<script>location.href='index.php'</script>";
    } else {
        echo "<script>alert('Message could not be sent!');</script>";
    }
}
