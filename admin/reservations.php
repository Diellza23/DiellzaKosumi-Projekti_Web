<?php
include 'dbConnect.php';
include 'connection.php';

session_start();
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
    <title>Reservations</title>
    <link rel="stylesheet" href="css/reservationscss.css">
</head>

<body>

    <?php include 'header.php'; ?>

    <main>
        <div class="container">
            <h1>Reservations</h1>
            <hr>
            <?php
            $query1 = "SELECT * FROM reservations";
            $result1 = mysqli_query($conn, $query1);
            while ($row = mysqli_fetch_array($result1)) {
            ?>
                <tr>
                    <td>
                        <p>Emri: <?php echo $row['name'] ?></p>
                    </td>
                    <td>
                        <p>Email: <?php echo $row['email'] ?></p>
                    </td>
                    <td>
                        <p>Data: <?php echo $row['date'] ?></p>
                    </td>
                    <td>
                        <p>Persona: <?php echo $row['nrOfGuests'] ?></p>
                    </td>
                    <a href="deletersv.php?id=<?php echo $row['id'] ?>">DELETE RESERVATION</a>
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