<?php
    session_start();
    if(isset($_SESSION['email'])){
        include 'connection.php';
        $id = $_GET['id'];
        $query = "DELETE FROM contactus WHERE id = '$id'";

        $data = mysqli_query($conn,$query);

        if($data){
            header('Location: messages.php');
        }
        else{
            echo "Mesazhi nuk u fshi!";
        }
    }
    else{
        echo "<script>location.href='logout.php'</script>";
    }
