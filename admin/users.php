<?php
session_start();
include 'dbConnect.php';
include 'connection.php';
$email = '';
if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];
} else {
    echo "<script>location.href = 'logout.php'</script>";
}
?>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Restaurant</title>
    <link rel="stylesheet" href="css/main.css">
    <script type="text/javascript" src="scripts/javascript.js"></script>
</head>

<body>

    <?php include 'header.php'; ?>

    <main>
        <div class="boxMessages">
            <h1>Users</h1>
            <hr>

            <table>
                <tr>
                    <th>ID</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Operations</th>
                </tr>
                <?php

                $query = "SELECT * FROM users";
                $result = mysqli_query($conn, $query);
                while ($row = mysqli_fetch_array($result)) {

                ?>
                    <tr>
                        <td><?php echo $row['userid'] ?></td>
                        <td><?php echo $row['username'] ?></td>
                        <td><?php echo ($row['role']) == '1' ? "Admin" : "User" ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $row['userid'] ?>&username=<?php echo $row['username'] ?>&role=<?php echo $row['role'] ?>">Edit</a>
                            <a href="deleteuser.php?id=<?php echo $row['userid'] ?>">Delete</a>
                        </td>
                    </tr>
                <?php } ?>

            </table>
        </div>
    </main>

    <?php include 'footer.php'; ?>
</body>

</html>