<?php include 'connection.php';
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
    <title>Menu</title>
    <link rel="stylesheet" href="css/menucss.css">
    <link rel="stylesheet" href="css/main.css">
    <script type="text/javascript" src="scripts/javascript.js"></script>
</head>

<body>

    <?php include 'header.php' ?>

    <main>
        <div class="container">
            <h1>MENU</h1>
            <h4><a href="#ShowMainCourse">Main Course</a></h4>
            <h4><a href="#ShowDrinks">Drinks</a></h4>
            <h4><a href="#ShowDesserts">Desserts</a></h4>
        </div><br>
        <div class="category" id="ShowMainCourse">
            <?php
            $query = "SELECT * FROM menuContent WHERE types = 'main'";
            $result = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_array($result)) {
            ?>
                <div>
                    <img src="<?php echo $row['image'] ?>">
                    <h4> <?php echo $row['heading'] ?> </h4>
                    <p> <?php echo $row['paragraph'] ?> </p>
                </div>
            <?php
            }
            ?>
        </div>

        <div class="category" id="ShowDrinks">
            <?php
            $query = "SELECT * FROM menuContent WHERE types = 'drinks'";
            $result = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_array($result)) {
            ?>
                <div>
                    <img src="<?php echo $row['image'] ?>">
                    <h4> <?php echo $row['heading'] ?> </h4>
                    <p> <?php echo $row['paragraph'] ?> </p>
                </div>
            <?php
            }
            ?>
        </div>

        <div class="category" id="ShowDesserts">
            <?php
            $query = "SELECT * FROM menuContent WHERE types = 'dessert'";
            $result = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_array($result)) {
            ?>
                <div>
                    <img src="<?php echo $row['image'] ?>">
                    <h4> <?php echo $row['heading'] ?> </h4>
                    <p> <?php echo $row['paragraph'] ?> </p>
                </div>
            <?php
            }
            ?>
        </div><br>

        <div class="ending">
            <h1>Food tastes better when you eat it with your family!</h1>
            <button onclick="openForm()">Make a reservation</button>
        </div>

        <?php include 'regLogResForms.php' ?>

    </main>

    <?php include 'footer.php' ?>

</body>

</html>