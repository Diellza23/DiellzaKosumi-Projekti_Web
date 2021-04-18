<?php
include_once 'userMapper.php';
session_start();
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
    <link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css" />
</head>

<body>

    <?php include 'header.php'; ?>

    <main>
        <div class="boxLeft">
            <div class="slider">
                <div class="container">
                    <ul class="bxslider">
                        <?php
                        include 'connection.php';
                        include 'dbConnect.php';

                        $query = "SELECT * FROM sliderimgs";
                        $result = mysqli_query($conn, $query);
                        while ($row = mysqli_fetch_array($result)) {
                        ?>
                            <li>
                                <img src="<?php echo $row['image']; ?>" alt="Offer">
                                <div class="text">
                                    <h1> <?php echo $row['heading']; ?> </h1>
                                    <p> <?php echo $row['paragraph']; ?> </p>
                                </div>
                            </li>
                        <?php
                        }
                        ?>
                    </ul>
                </div>
            </div>

            <h1> Reviews and Offers! </h1>
            <hr />
            <?php
            $query = "SELECT * FROM ofertat";
            $result = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_array($result)) {
            ?>
                <tr>
                    <td>
                        <p><?php echo $row['teksti'] ?></p>
                    </td>
                    <hr>
                </tr>
            <?php
            }
            ?>
        </div>
        <div class="box">
            <?php
            include 'connection.php';
            include 'dbConnect.php';

            $query = "SELECT * FROM reservationText";
            $result = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_array($result)) {
            ?>
                <h1> <?php echo $row['heading'] ?> </h1>
                <pre> <?php echo $row['text'] ?> </pre><br>
                <button onclick="openForm()">Make a reservation</button>
            <?php
            }
            ?>
        </div>

        <?php include 'regLogResForms.php' ?>

    </main>

    <?php include 'footer.php' ?>

    <script src="http://code.jquery.com/jquery-2.2.4.js"> </script>
    <script src="scripts/jquery.bxslider.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.bxslider').bxSlider();
        });
    </script>
</body>

</html>