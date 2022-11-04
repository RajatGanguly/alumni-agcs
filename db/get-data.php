<?php
    // include "./config.php";
    $conn = mysqli_connect("localhost","u375222219_agcs","ILoveWebsites69@","u375222219_agcs");
    error_reporting(-1);
    ini_set('display_errors', 'On');

    $name = $_POST["name"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $batch = $_POST["batch"];
    $mobile = $_POST["mobile"];
    $image = $_FILES["image"];
    echo "<pre>";
    print_r($_FILES);
    echo "</pre>";
    $image_name = "../images/".$image['name'];

    move_uploaded_file($image['tmp_name'], $image_name);

    $sql = "INSERT INTO `pending_member`(`name`, `email`, `address`, `batch`, `mobile`, `image`) VALUES('$name','$email','$address','$batch','$mobile','$image_name')";
    mysqli_query($conn, $sql) or die("Query failed");
    $to = $email;
         $subject = "Confirmation";
         
         $message = "<b>We got your application. We will contact you soon. Get in touch.</b>";
         $message .= "<h1>This is headline.</h1>";
         
         $header = "admin@alumniagcshaldia.org";
         
         mail ($to,$subject,$message,$header);
         
         
    $to = "hit19ece.rajatganguly@gmail.com";
    $subject = "New Entry";
    $message = "You got a new application from: ".$name." ".$email." ".$mobile;
    $headers = ["From: admin@alumniagcshaldia.org"];
    mail($to, $subject, $message, $headers);
    header("Location: ../members.php");
?>