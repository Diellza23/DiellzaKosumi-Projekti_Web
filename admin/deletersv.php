<?php
    session_start();
    if(isset($_SESSION['email'])){
        include 'connection.php';
        $id = $_GET['id'];
        $query = "DELETE FROM reservations WHERE id = '$id'";

        $data = mysqli_query($conn,$query);

        if($data){
            echo "<script>location.href='reservations.php'</script>";
        }
        else{
            echo "<script>alert('Message could not be deleted!')</script>";
        }
    }
    else{
        echo "<script>location.href='logout.php'</script>";
    }
