<?php
session_start();
$email = $_SESSION['email'];
include 'connection.php';
include 'dbConnect.php';

if (isset($_SESSION['email'])) {
    $id = $_GET['id'];
    $username = $_GET['username'];
    $role = $_GET['role'];

    if (isset($_GET['update'])) {
        if (!empty($username) && !empty($role)) {
            $query = "UPDATE users SET userid='$id', username='$username',role='$role' WHERE userid='$id'";

            $data = mysqli_query($conn, $query);

            if ($data) {
                header('Location: users.php');
            } else {
                echo "<script>alert('User did not update!')</script>";
            }
        }
    }
} else {
    echo "<script>location.href='logout.php'</script>";
}
?>

<html>

<head>
    <link rel="stylesheet" href="css/main.css" type="text/css" />
</head>

<body>

    <?php include 'header.php'; ?>
    <main>
        <div class="boxMessages">
            <form action="edit.php" method="get">
                <label>User Id</label>
                <input type="text" name="id" value="<?php echo "$id" ?>" />
                <label>Email</label>
                <input type="text" name="username" value="<?php echo "$username" ?>" />
                <label>Role</label>
                <input type="text" name="role" value="<?php echo "$role" ?>" />

                <button type="submit" name="update" value="submit">
                    Update
                </button>
            </form>
        </div>
    </main>
</body>
<?php
include 'footer.php';
?>

</html>