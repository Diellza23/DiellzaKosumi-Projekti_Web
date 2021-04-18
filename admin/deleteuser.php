<?php
    session_start();
    $id = '';
    if(isset($_SESSION['email'])){
        include 'connection.php';
        $id = $_GET['id'];
        $query = "DELETE FROM users WHERE userid = '$id'";

        $data = mysqli_query($conn,$query);

        if($data){
            echo "<script>location.href='users.php'</script>";
        }
        else{
            echo "<script>alert('User could not be deleted!')</script>";
            echo "<script>location.href = 'users.php'</script>";
        }
    }
    else{
        echo "<script>location.href='logout.php'</script>";
    }
