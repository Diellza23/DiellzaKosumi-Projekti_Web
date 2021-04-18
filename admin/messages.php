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
    <title>Messages</title>
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
    
    <?php include 'header.php'; ?>

    <main>

        <div class="boxMessages">
            <h1>Messages</h1>
            <hr>
            <?php
            $query1 = "SELECT * FROM contactus";
            $result1 = mysqli_query($conn, $query1);
            while ($row = mysqli_fetch_array($result1)) {
            ?>
                <tr>
                    <td>
                        <p><?php echo $row['email'] ?> says: <?php echo $row['message'] ?></p>
                    </td>
                    <a href="deletemsg.php?id=<?php echo $row['id'] ?>">DELETE POST</a>
                    <hr>
                </tr>
            <?php
            }
            ?>
        </div>
    </main>
    
    <?php include 'footer.php'; ?>

</body>

</html>