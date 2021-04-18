<?php
include 'dbConnect.php';
if(isset($_POST['makeReservation'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $date = $_POST['date'];
    $nrOfGuests = $_POST['nrOfGuests'];

    if(empty($name) || $name == "" || empty($email) || $email == "" || empty($nrOfGuests) || $nrOfGuests == "") {
        return;
    } 
    else if($nrOfGuests <0 || $nrOfGuests >15){
        return;
    } 
    else {
        require 'connection.php';
        $sql = 'INSERT INTO reservations (name, email, date, nrOfGuests) VALUES (:name, :email, :date, :nrOfGuests)';
        $query = $pdo->prepare($sql);
        $query->bindParam('name', $name);
        $query->bindParam('email',$email);
        $query->bindParam('date',$date);
        $query->bindParam('nrOfGuests',$nrOfGuests);
        if($query->execute()) {
            echo "<script>alert('Reservation is made. Thank you for visiting!')</script>";
            header('Location: index.php');
        } else {
            echo "<script>alert('Reservation failed!');</script>";
        }
    }
}
