<?php
include 'connection.php';
include 'dbConnect.php';
?>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="stylesheet" href="css/main.css">
    <script type="text/javascript" src="scripts/javascript.js"></script>
</head>

<body>

    <header class="loginHeader">
        <ul>
            <li style="display:inline;"><button onclick="openLoginForm()">Log In</button></li>
            <li style="display:inline;"><button onclick="openRegisterForm()">Register</button></li> <!-- LOGIN DHE REGISTER  -->
        </ul>
    </header>

    <?php include 'regLogResForms.php'; ?>

</body>

</html>