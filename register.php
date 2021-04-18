<?php
include 'connection.php';
include 'dbConnect.php';

if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $role = $_POST['role'];
    $message = '';

    if (!empty($username) && !empty($password) && !empty($role)) {
        $sql = 'INSERT INTO users (username, password, role) VALUES (:username, :password, :role)';
        $query = $pdo->prepare($sql);
        $query->bindParam('username', $username);
        $query->bindParam('password', $password);
        $query->bindParam('role', $role);

        if ($query->execute()) {
            $message = "Account created successfully!";
            header('Location: index.php');
        } else {
            $message = "Account could not be created!";
        }
    } else {
        $message = 'Required data is  missing!';
    }
}
