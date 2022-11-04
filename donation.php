<?php
    include("./db/config.php");
    if (isset($_POST['name'])){
        $name = $_POST["name"];
        $email = $_POST["email"];
        $address = $_POST["address"];
        $batch = $_POST["batch"];
        $mobile = $_POST["mobile"];
        $image = $_FILES["image"];
        echo "<pre>";
        print_r($_FILES);
        echo "</pre>";
        $image_name = "./images/".$image['name'];

        move_uploaded_file($image['tmp_name'], $image_name);

        $sql = "INSERT INTO `donations`(`name`, `email`, `address`, `batch`, `phone`, `image`) VALUES('$name','$email','$address','$batch','$mobile','$image_name')";
        echo $sql;
        mysqli_query($conn, $sql) or die("Query failed");
        $to = $email;
         $subject = "Confirmation";
         
         $message = "<b>Thanks for your contribution. Get in touch.</b>";
         $message .= "<h1>This is headline.</h1>";
         
         $header = "From:admin@alumniagcshaldia.org";
         
         mail ($to,$subject,$message,$header);
        header("Location: ./");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JOIN | AGSC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/navbar.css">
    <link rel="stylesheet" href="styles/footer.css">
    <style>
        .add-form{
            width: 84vw;
            margin-left: 12vw;
        }
        .qr-pic{
            width: 36vw;
        }
        @media(max-width: 756px){
            .qr-pic{
                width: 72vw;
            }
        }
    </style>
</head>
<body>
    <?php
        include "./components/navbar.php";
    ?>
    <br><br><br><br><br><br>
    <form class="row g-3 add-form" action="<?php $_SERVER["PHP_SELF"]; ?>" method="POST" enctype="multipart/form-data">
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Name</label>
            <input type="text" class="form-control" id="inputPassword4" name="name" placeholder="Enter Name">
        </div>
        <div class="col-md-6">
            <label for="inputEmail" class="form-label">Email</label>
            <input type="email" class="form-control" id="inputEmail4" name="email" placeholder="Enter Email">
        </div>
        <div class="col-12">
            <label for="inputAddress" class="form-label">Address</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="Enter Address" name="address">
        </div>
        <div class="col-md-6">
            <label for="inputCity" class="form-label">Batch (Like: 2000-2004)</label>
            <input type="text" class="form-control" id="inputCity" name="batch">
        </div>
        <div class="col-md-6">
            <label for="inputCity" class="form-label">Mobile</label>
            <input type="text" class="form-control" id="inputCity" name="mobile">
        </div>
        <div class="col-md-6">
            <img src="./pics/upiqr.jpg" class="qr-pic" alt="upi qr code">
        </div>
        <div class="col-md-6">
            <label for="inputCity" class="form-label">Upload Screen Shot</label>
            <input type="file" class="form-control" id="inputCity" name="image"><br><br>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Donate Us</button>
        </div>
    </form>
    <?php
        include "./components/footer.php";
    ?>
</body>
</html>