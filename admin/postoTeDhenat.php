<?php
session_start();
include 'dbConnect.php';
$email = '';
if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];
} else {
    echo "<script>location.href = 'logout.php'</script>";
}

$teksti = '';
if (isset($_POST['postoTeDhenat'])) {
    $teksti = $_POST['teksti'];
    if (!($teksti == "" || empty($teksti) || $teksti == " ")) {

        $sql = 'INSERT INTO ofertat (teksti) VALUES (:teksti)';
        $query = $pdo->prepare($sql);
        $query->bindParam('teksti', $teksti);

        if ($query->execute()) {
            echo "<script>alert('Njoftimi u ruajt.')</script>";
            echo "<script>location.href='admin.php'</script>";
        } else {
            echo "<script>alert('Njoftimi nuk u ruajt.');</script>";
        }
    } else {
        echo "<script>alert('Njoftimi nuk u ruajt.');</script>";
    }
}
