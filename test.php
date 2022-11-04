<?php
    echo "HI";
    $to = "hit19ece.rajatganguly@gmail.com";
    $subject = "New Entry";
    $message = "You got a new application";
    $headers = ["From: admin@alumniagcshaldia.org"];
    mail($to, $subject, $message, $headers);
    
    $conn = mysqli_connect("localhost","u375222219_agcs","ILoveWebsites96@","u375222219_agcs");
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";
    echo $conn;
    echo "HI";
?>