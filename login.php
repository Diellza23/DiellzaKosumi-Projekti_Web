<?php
session_start();
include 'dbConnect.php';
include 'connection.php';
$email = '';
$password = '';
if (isset($_POST['login'])) {
	$email = $_POST['email'];
	$password = $_POST['password'];
	$message = '';

	$query = $pdo->prepare("SELECT * from users where username='$email' AND role='1'");
	$query->bindParam(':email', $email);
	$query->execute();

	$user = $query->fetch();
	if (password_verify($password, $user['password'])) {
		$_SESSION['email'] = $email;
		echo "<script>location.href='admin/admin.php'</script>";
	}
	
	$query1 = $pdo->prepare("SELECT * from users where username='$email' AND role='2'");
	$query1->bindParam(':email', $email);
	$query1->execute();

	$user1 = $query1->fetch();
	if (password_verify($password, $user1['password'])) {
		$_SESSION['email'] = $email;
		echo "<script>location.href='user.php'</script>";
	}

	else {
		echo "<script>alert('Email or Password incorrect!')</script>";
		echo "<script>location.href='index.php'</script>";
	}
}
