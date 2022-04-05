<?php
    include "config.php";

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
    // header("Location: ../members.php")
?>