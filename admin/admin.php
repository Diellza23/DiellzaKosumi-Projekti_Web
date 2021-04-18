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
        <div class="boxLeft">
            <form action="postoTeDhenat.php" method="post">
                <h1>Type your offer: </h1>
                <textarea name="teksti" placeholder="Type something..."></textarea>
                <button type="submit" name="postoTeDhenat" value="submit">Post Data</button>
            </form>
        </div>
        <div class="box">
            <h1>Ofertat!</h1>
            <hr>
            <?php
            $query = "SELECT * FROM ofertat";
            $result = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_array($result)) {
            ?>
                <tr>
                    <td>
                        <p><?php echo $row['teksti'] ?></p>
                    </td>
                    <a href="delete.php?id=<?php echo $row['id'] ?>">DELETE POST</a>
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