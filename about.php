<?php
include 'connection.php';
include 'dbConnect.php';
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
    <title>About</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/aboutcss.css">
    <script type="text/javascript" src="scripts/javascript.js"></script>
</head>

<body>

    <?php include 'header.php' ?>

    <main>
        <div class="container">
            <h1>About Us</h1>
            <a href="#" style="background-image:url(images/president.jpg)" class="blurredBG">
                <div class="parentBG">
                    <div class="content">
                        <?php
                        $query = "SELECT * FROM aboutcontent where id=1";
                        $result = mysqli_query($conn, $query);
                        while ($row = mysqli_fetch_array($result)) {
                        ?>

                            <b><?php echo $row['bold'] ?></b><br>

                            <i><?php echo $row['italic'] ?></i><br>

                        <?php
                            echo $row['text'];
                        }
                        ?>
                    </div>
                </div>
            </a>
            <a href="#" style="background-image:url(images/chief.jpg)" class="blurredBG">
                <div class="parentBG">
                    <div class="content">
                        <?php
                        $query = "SELECT * FROM aboutcontent where id=2";
                        $result = mysqli_query($conn, $query);
                        while ($row = mysqli_fetch_array($result)) {
                        ?>

                            <b><?php echo $row['bold'] ?></b><br>

                            <i><?php echo $row['italic'] ?></i><br>

                        <?php
                            echo $row['text'];
                        }
                        ?>
                    </div>
                </div>
            </a>
            <a href="#" style="background-image:url(images/interior.jpg)" class="blurredBG">
                <div class="parentBG">
                    <div class="content">
                        <?php
                        $query = "SELECT * FROM aboutcontent where id=3";
                        $result = mysqli_query($conn, $query);
                        while ($row = mysqli_fetch_array($result)) {
                        ?>

                            <b><?php echo $row['bold'] ?></b><br>

                            <i><?php echo $row['italic'] ?></i><br>

                        <?php
                            echo $row['text'];
                        }
                        ?>
                    </div>
                </div>
            </a>
        </div>

        <?php include 'regLogResForms.php' ?>

    </main>

    <?php include 'footer.php' ?>

</body>

</html>