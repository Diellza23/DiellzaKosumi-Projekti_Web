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
    <title>Team</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/teamcss.css">
    <script type="text/javascript" src="scripts/javascript.js"></script>
</head>

<body>

    <?php include 'header.php'; ?>

    <main>
        <div class="team">
            <h1>Best Workers</h1>
            <div class="employees">
                <a href="#employee1"><img src="images/manager.png" alt="manager"></a>
                <a href="#employee2"><img src="images/chef.png" alt="chef"></a>
                <a href="#employee3"><img src="images/waiter.png" alt="waiter"></a>
            </div>
        </div>

        <div class="section" id="employee1">
            <?php
            $query = "SELECT * FROM teamcontent WHERE id = 1";
            $result = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_array($result)) {
            ?>
                <h1> <?php echo $row['heading'] ?> </h1>
                <p> <?php echo $row['paragraph'] ?> </p>
            <?php
            }
            ?>
        </div>
        <div class="section" id="employee2">
            <?php
            $query = "SELECT * FROM teamcontent WHERE id = 2";
            $result = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_array($result)) {
            ?>
                <h1> <?php echo $row['heading'] ?> </h1>
                <p> <?php echo $row['paragraph'] ?> </p>
            <?php
            }
            ?>
        </div>
        <div class="section" id="employee3">
            <?php
            $query = "SELECT * FROM teamcontent WHERE id = 3";
            $result = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_array($result)) {
            ?>
                <h1> <?php echo $row['heading'] ?> </h1>
                <p> <?php echo $row['paragraph'] ?> </p>
            <?php
            }
            ?>
        </div>

        <?php include 'regLogResForms.php' ?>

    </main>

    <?php include 'footer.php'; ?>

</body>

</html>